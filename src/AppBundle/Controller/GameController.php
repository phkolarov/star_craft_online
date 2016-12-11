<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 30-Nov-16
 * Time: 10:03 PM
 */

namespace AppBundle\Controller;

use AppBundle\Form\LoginUserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class GameController extends Controller
{

    /**
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @Route("/game/index", name="gameindex")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $planetCount = count($em->getRepository('DataBundle:PlanetPlayers')->findBy(['player' => $user->getId()]));
        $unitsCount =  count($em->getRepository('DataBundle:PlayerUnits')->findBy(['playerid'=>  $user->getId()]));

        return $this->render('pages/game.html.twig', [
            'planetCount' => $planetCount,
            'unitsCount'=> $unitsCount
        ]);

    }

}