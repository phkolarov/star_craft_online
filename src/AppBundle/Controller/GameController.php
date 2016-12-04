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

class GameController extends Controller
{

    /**
     * @Route("/gameIndex", name="map")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('pages/game.html.twig'
        );

    }

}