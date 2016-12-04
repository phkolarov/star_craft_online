<?php

namespace AppBundle\Controller;

use AppBundle\Form\LoginUserType;
use AppBundle\Form\RegisterUserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Types\TextType;

class UserController extends Controller
{
    /**
     * @Route("/login", name="homepage")
     * @Method("GET")
     */
    public function login(Request $request)
    {
        $login = $this->createForm(LoginUserType::class);
        $register = $this->createForm(RegisterUserType::class);

        // replace this example code with whatever you need
        return $this->render('partials/login.html.twig',[
            'login' => $login->createView(),
            'register'=> $register->createView()
        ]);
    }


    /**
     * @Route("/login")
     * @Method("POST")
     */
    public function loginIn(Request $request){

         $form = $this->createForm(LoginUserType::class);
        $form->handleRequest($request);
        if($form->isValid()){

            echo 'is valid';
        }else{
            echo 'not valid';
        }
    }



}
