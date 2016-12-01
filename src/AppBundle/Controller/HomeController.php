<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('pages/login.html.twig');
    }


    /**
     * @Route("/test", name="bom")
     */
    public function testFunc(){

        $players = $this->getDoctrine()->getRepository('DataBundle:Players')->findAll();


        foreach ( $players as $player){
            var_dump($player->getName());
            break;
        }

        $responce = new JsonResponse(json_encode(array('pinko'=>1)),200,array('Content-type'=>'application/json'),true);

        return $responce;
    }
}
