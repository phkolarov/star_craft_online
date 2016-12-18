<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 30-Nov-16
 * Time: 10:03 PM
 */

namespace AppBundle\Controller;

use AppBundle\Form\LoginUserType;
use DataBundle\Entity\Galaxies;
use DataBundle\Entity\PlayerResouces;
use DataBundle\Repository\TaskRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use DataBundle\Entity\Players;

class GameController extends Controller
{

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/game/index", name="gameindex")
     */
    public function indexAction(Request $request)
    {
        return $this->render('pages/game.html.twig', [
            'planetCount' => $this->getProfileInfoData()->planetCount,
            'unitsCount' => $this->getProfileInfoData()->unitsCount,
            'userResources' => $this->getProfileInfoData()->userResources,
        ]);
    }


    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("game/galaxies", name="galaxies")
     */
    public function galaxies(Request $request)
    {

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM DataBundle:Galaxy a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $galaxies = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            12/*limit per page*/
        );

        return $this->render('pages/galaxies.html.twig', [
            'planetCount' => $this->getProfileInfoData()->planetCount,
            'unitsCount' => $this->getProfileInfoData()->unitsCount,
            'userResources' => $this->getProfileInfoData()->userResources,
            'galaxies' => $galaxies
        ]);
    }

    /**
     * @Route("game/mygalaxies", name="mygalaxies")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function playerGalaxies(Request $request)
    {

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM DataBundle:Galaxies a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $galaxies = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            12/*limit per page*/
        );

        return $this->render('pages/player-galaxies.html.twig', [
            'planetCount' => $this->getProfileInfoData()->planetCount,
            'unitsCount' => $this->getProfileInfoData()->unitsCount,
            'userResources' => $this->getProfileInfoData()->userResources,
            'galaxies' => $galaxies
        ]);

    }

    /**
     * @Route("game/galaxy/{id}/{name}", name="galaxy")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function galaxy(Request $request)
    {

        $galaxyId = $request->get('id');
        $galaxtName = $request->get('name');
        $galaxy = new Galaxies();

        $em = $this->getDoctrine()->getManager();
        $galaxy = $em->getRepository('DataBundle:Galaxy')->find($galaxyId);
        $planetsOfGalaxy = $em->getRepository('DataBundle:GalaxyPlanet')->findBy(array('galaxy' => $galaxy));

        $planets = [];
        $players = [];


        foreach ($planetsOfGalaxy as $planet) {
            $owner = $planet->getPlanet()->getOwner() != null ? $planet->getPlanet()->getOwner()->getUsername() : 'незаселена';
            $ownerId = $planet->getPlanet()->getOwner() != null ? $planet->getPlanet()->getOwner()->getId() : '-1';

            $planets[] = array(
                'id' => $planet->getPlanet()->getId(),
                'name' => $planet->getPlanet()->getName(),
                'owner' => $owner,
                'ownerId' => $ownerId,
                'X' => $planet->getPlanet()->getX(),
                'Y' => $planet->getPlanet()->getY(),
                'type' => $planet->getPlanet()->getType()->getName(),
                'metal' => $planet->getPlanet()->getMetal(),
                'mineral' => $planet->getPlanet()->getMineral(),
                'gas' => $planet->getPlanet()->getGas(),
                'image' => $planet->getPlanet()->getImageUri(),
            );

            if ($ownerId != '-1') {
                if (!array_key_exists($ownerId, $players)) {
                    $players[$ownerId] = $owner;
                };
            }
        }

        return $this->render('pages/galaxy.html.twig', [
            'planetCount' => $this->getProfileInfoData()->planetCount,
            'unitsCount' => $this->getProfileInfoData()->unitsCount,
            'userResources' => $this->getProfileInfoData()->userResources,
            'galaxyName' => $galaxtName,
            'planets' => $planets,
            'players' => $players
        ]);

    }


    /**
     * @Route("game/planet/{id}", name="planet")
     */
    public function myPlanet(Request $request){

        $planetId = $request->get('id');
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        $userId = $usr->getId();

        $em = $this->getDoctrine()->getEntityManager();
        $currentPlanet = $em->getRepository('DataBundle:Planet')->find($planetId);
        $planetPlayerId = $currentPlanet->getOwner()->getId();

        if($currentPlanet != null && $userId == $planetPlayerId ){

            return $this->render('/pages/planet.html.twig',[
                'planetCount' => $this->getProfileInfoData()->planetCount,
                'unitsCount' => $this->getProfileInfoData()->unitsCount,
                'userResources' => $this->getProfileInfoData()->userResources,
                'planetName'=> $currentPlanet->getName(),
                'metal'=> $currentPlanet->getMetal(),
                'mineral'=> $currentPlanet->GetMineral(),
                'gas'=> $currentPlanet->getGas(),
                'dockers'=>$this->getDockers()
            ]);
        }
     return $this->redirect('home');
    }

    /**
     * @Route("game/pagination", name="testPagination")
     */
    public function testPaginator(Request $request)
    {

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM DataBundle:Galaxies a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        // parameters to template
        return $this->render('pages/pagination.html.twig', array('pagination' => $pagination));
    }


    /**
     * @Route("game/buildings", name="buildings")
     */
    public function buildings(Request $request){

        $player= $this->get('security.token_storage')->getToken()->getUser();

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM DataBundle:Buildings a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $buildings = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            12/*limit per page*/
        );


        return $this->render('pages/buildings.html.twig', [
            'planetCount' => $this->getProfileInfoData()->planetCount,
            'unitsCount' => $this->getProfileInfoData()->unitsCount,
            'userResources' => $this->getProfileInfoData()->userResources,
            'buildings' => $buildings
        ]);
    }

    /**
     * @Route("game/units", name="units")
     */
    public function units(Request $request){


        return $this->render('pages/units.html.twig', [
            'planetCount' => $this->getProfileInfoData()->planetCount,
            'unitsCount' => $this->getProfileInfoData()->unitsCount,
        ]);

    }

    /**
     * @Route("game/buildingTasks", name="buildingTasks")
     */
    public function buildingTasks(){

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userTasks = $em->getRepository('DataBundle:BuildingTask')->getTask($user);


        return $this->json($userTasks);
    }


    private function getProfileInfoData()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $planetCount = count($em->getRepository('DataBundle:PlanetPlayers')->findBy(['player' => $user->getId()]));
        $unitsCount = count($em->getRepository('DataBundle:PlayerUnits')->findBy(['playerid' => $user->getId()]));

        $resources = $em->getRepository('DataBundle:PlayerResources')->findByPlayer($user);
        $outputResourceArray = [];
        foreach ($resources as $resource) {
            $outputResourceArray[] = array(
                'name'=> ($resource->getResource()->getName()),
                'amount' => $resource->getAmount()
            );
        }

        return (object)array(
            'planetCount' => $planetCount,
            'unitsCount' => $unitsCount,
            'userResources' => $outputResourceArray,
        );
    }

    private function getDockers(){
        $dockers = intval($this->get('security.token_storage')->getToken()->getUser()->getLevel()) * 1.3;
        return floor($dockers);
    }

}