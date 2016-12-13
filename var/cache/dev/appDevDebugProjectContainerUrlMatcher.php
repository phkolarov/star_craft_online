<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

                if (0 === strpos($pathinfo, '/game/p')) {
                    // planet
                    if (0 === strpos($pathinfo, '/game/planet') && preg_match('#^/game/planet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'planet')), array (  '_controller' => 'AppBundle\\Controller\\GameController::myPlanet',));
                    }

                    // testPagination
                    if ($pathinfo === '/game/pagination') {
                        return array (  '_controller' => 'AppBundle\\Controller\\GameController::testPaginator',  '_route' => 'testPagination',);
                    }

                }

                // buildings
                if ($pathinfo === '/game/buildings') {
                    return array (  '_controller' => 'AppBundle\\Controller\\GameController::buildings',  '_route' => 'buildings',);
                }

                // units
                if ($pathinfo === '/game/units') {
                    return array (  '_controller' => 'AppBundle\\Controller\\GameController::units',  '_route' => 'units',);
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
