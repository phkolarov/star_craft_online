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
            'unitsCount' => $this->getProfileInfoData()->unitsCount
        ]);
    }


    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("game/galaxies", name="galaxies")
     */
    public function galaxies(Request $request)
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

        return $this->render('pages/galaxies.html.twig',[
            'planetCount' => $this->getProfileInfoData()->planetCount,
            'unitsCount' => $this->getProfileInfoData()->unitsCount,
            'galaxies' => $galaxies
        ]);
    }

    /**
     * @Route("game/mygalaxies", name="mygalaxies")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function playerGalaxies(Request $request){

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM DataBundle:Galaxies a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $galaxies = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            12/*limit per page*/
        );

        return $this->render('pages/player-galaxies.html.twig',[
            'planetCount' => $this->getProfileInfoData()->planetCount,
            'unitsCount' => $this->getProfileInfoData()->unitsCount,
            'galaxies' => $galaxies
        ]);

    }

    /**
     * @Route("game/galaxy/{id}/{name}", name="galaxy")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function galaxy(Request $request){

        $galaxyId = $request->get('id');
        $galaxtName = $request->get('name');
        $galaxy = new Galaxies();

        $em = $this->getDoctrine()->getManager();
        $galaxy = $em->getRepository('DataBundle:Galaxy')->find($galaxyId);
        $planetsOfGalaxy = $em->getRepository('DataBundle:GalaxyPlanet')->findBy(array('galaxy'=>$galaxy));

        var_dump($planetsOfGalaxy);
//        $planets = $em->getRepository('DataBundle:GalaxiesPlanets')->findBy(array('Galaxy' => 20));



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

    private function getProfileInfoData()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $planetCount = count($em->getRepository('DataBundle:PlanetPlayers')->findBy(['player' => $user->getId()]));
        $unitsCount = count($em->getRepository('DataBundle:PlayerUnits')->findBy(['playerid' => $user->getId()]));

        return (object)array(
            'planetCount' => $planetCount,
            'unitsCount' => $unitsCount
        );
    }

}