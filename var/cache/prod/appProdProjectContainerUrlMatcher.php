<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/g')) {
            // generator
            if ($pathinfo === '/generator') {
                return array (  '_controller' => 'AppBundle\\Controller\\DataGeneratorController::index',  '_route' => 'generator',);
            }

            if (0 === strpos($pathinfo, '/game')) {
                // gameindex
                if ($pathinfo === '/game/index') {
                    return array (  '_controller' => 'AppBundle\\Controller\\GameController::indexAction',  '_route' => 'gameindex',);
                }

                // galaxies
                if ($pathinfo === '/game/galaxies') {
                    return array (  '_controller' => 'AppBundle\\Controller\\GameController::galaxies',  '_route' => 'galaxies',);
                }

                // mygalaxies
                if ($pathinfo === '/game/mygalaxies') {
                    return array (  '_controller' => 'AppBundle\\Controller\\GameController::playerGalaxies',  '_route' => 'mygalaxies',);
                }

                // galaxy
                if (0 === strpos($pathinfo, '/game/galaxy') && preg_match('#^/game/galaxy/(?P<id>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'galaxy')), array (  '_controller' => 'AppBundle\\Controller\\GameController::galaxy',));
                }

                // testPagination
                if ($pathinfo === '/game/pagination') {
                    return array (  '_controller' => 'AppBundle\\Controller\\GameController::testPaginator',  '_route' => 'testPagination',);
                }

            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'home',);
        }

        // bom
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::testFunc',  '_route' => 'bom',);
        }

        // security_login
        if ($pathinfo === '/security_login') {
            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::loginAction',  '_route' => 'security_login',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // homepage
            if ($pathinfo === '/login') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_homepage;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginRegister',  '_route' => 'homepage',);
            }
            not_homepage:

            // app_user_loginin
            if ($pathinfo === '/login') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_app_user_loginin;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginIn',  '_route' => 'app_user_loginin',);
            }
            not_app_user_loginin:

        }

        // register
        if ($pathinfo === '/register') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_register;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::register',  '_route' => 'register',);
        }
        not_register:

        // security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::logoutAction',  '_route' => 'security_logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
