<?php

namespace AppBundle\Controller;

use AppBundle\Form\LoginUserType;
use AppBundle\Form\RegisterUserType;
use DataBundle\DataBundle;
use DataBundle\Entity\PlayersRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
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

        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            return $this->redirect('game/index');
        }


        $login = $this->createForm(LoginUserType::class);
        $register = $this->createForm(RegisterUserType::class);

        // replace this example code with whatever you need
        return $this->render('partials/login.html.twig', [
            'login' => $login->createView(),
            'register' => $register->createView()
        ]);

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


    /**
     * @Route("/security_login", name="security_login")
     */
    public function loginAction()
    {
        return $this->render('security/login.html.twig');
    }

}
