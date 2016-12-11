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

        // replace this example code with whatever you need
        return $this->render('pages/game.html.twig'
        );

    }

}