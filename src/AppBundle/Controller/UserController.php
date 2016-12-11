<?php

namespace AppBundle\Controller;

use AppBundle\Form\LoginUserType;
use AppBundle\Form\RegisterUserType;
use DataBundle\Entity\Players;
use DataBundle\Entity\Races;
use DataBundle\Entity\Test;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Types\TextType;
use \DataBundle\Repository\RacesRepository;

class UserController extends Controller
{
    /**
     * @Route("/login", name="homepage")
     * @Method("GET")
     */
    public function loginRegister(Request $request)
    {
        $login = $this->createForm(LoginUserType::class);
        $register = $this->createForm(RegisterUserType::class);

        // replace this example code with whatever you need

        return $this->render('partials/login.html.twig', [
            'login' => $login->createView(),
            'register' => $register->createView()
        ]);
    }


    /**
     * @Route("/login")
     * @Method("POST")
     */
    public function loginIn(Request $request)
    {

        $form = $this->createForm(LoginUserType::class);
        $form->handleRequest($request);
        if ($form->isValid()) {

            $encoder = $this->container->get('security.password_encoder');

            //$encoded = $encoder->encodePassword($user, $plainPassword);

            $player = $this->getDoctrine()->getRepository('DataBundle:Players')->find(1);

            var_dump($encoder);
            echo 'is valid';
        } else {
            echo 'not valid';
        }
    }

    /**
     * @Route("/register", name="register")
     * @Method("POST")
     */
    public function register(Request $request)
    {

        $form = $this->createForm(RegisterUserType::class);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $userData = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $race = $em->getRepository('DataBundle:Races')
                ->findOneById([$userData->getRaceId()]);

            $newPlayer = new Players();

            $newPlayer->setPassword($userData->getPassword());
            $newPlayer->setName($userData->getName());
            $newPlayer->setEmail($userData->getEmail());
            $newPlayer->setRace($race);


            $password = $this->get('security.password_encoder')
                ->encodePassword($newPlayer, $userData->getPassword());

            $newPlayer->setPassword($password);
            $existedUser = $em->getRepository('DataBundle:Players')->findOneByEmail($userData->getEmail());

            if(is_null($existedUser)){
                $em->persist($newPlayer);
                $em->flush();
            }else{
                $this->addFlash('error','Потребителят съществува');
            }
            
        } else {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error',$error->getMessage());
            }
        }

        return $this->redirectToRoute('home');

    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        throw new \Exception('This should never be reached!');
    }

}
