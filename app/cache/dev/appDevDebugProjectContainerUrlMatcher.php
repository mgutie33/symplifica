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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        // symplifica_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'symplifica_homepage');
            }

            return array (  '_controller' => 'SymplificaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'symplifica_homepage',);
        }

        if (0 === strpos($pathinfo, '/index')) {
            // index_menuPrincipal
            if ($pathinfo === '/index/menuPrinicpal') {
                return array (  '_controller' => 'SymplificaBundle\\Controller\\SymplificaController::menuPrincipalAction',  '_route' => 'index_menuPrincipal',);
            }

            // index_ingresarHabitacion
            if ($pathinfo === '/index/ingresarHabitacion') {
                return array (  '_controller' => 'SymplificaBundle\\Controller\\SymplificaController::ingresarHabitacionAction',  '_route' => 'index_ingresarHabitacion',);
            }

            // index_procesarHabitacion
            if ($pathinfo === '/index/procesarHabitacion') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_index_procesarHabitacion;
                }

                return array (  '_controller' => 'SymplificaBundle\\Controller\\SymplificaController::procesarHabitacionAction',  '_route' => 'index_procesarHabitacion',);
            }
            not_index_procesarHabitacion:

            // index_ingresarPaciente
            if ($pathinfo === '/index/ingresarPaciente') {
                return array (  '_controller' => 'SymplificaBundle\\Controller\\SymplificaController::ingresarPacienteAction',  '_route' => 'index_ingresarPaciente',);
            }

            if (0 === strpos($pathinfo, '/index/procesar')) {
                // index_procesarPaciente
                if ($pathinfo === '/index/procesarPaciente') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_index_procesarPaciente;
                    }

                    return array (  '_controller' => 'SymplificaBundle\\Controller\\SymplificaController::procesarPacienteAction',  '_route' => 'index_procesarPaciente',);
                }
                not_index_procesarPaciente:

                // index_procesarHabitacionPaciente
                if ($pathinfo === '/index/procesarHabitacionPaciente') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_index_procesarHabitacionPaciente;
                    }

                    return array (  '_controller' => 'SymplificaBundle\\Controller\\SymplificaController::procesarHabitacionPacienteAction',  '_route' => 'index_procesarHabitacionPaciente',);
                }
                not_index_procesarHabitacionPaciente:

            }

            if (0 === strpos($pathinfo, '/index/refrescartabla')) {
                // index_refrescartablaHabitacion
                if ($pathinfo === '/index/refrescartablaHabitacion') {
                    return array (  '_controller' => 'SymplificaBundle\\Controller\\SymplificaController::refrescartablaHabitacionAction',  '_route' => 'index_refrescartablaHabitacion',);
                }

                // index_refrescartablaPaciente
                if ($pathinfo === '/index/refrescartablaPaciente') {
                    return array (  '_controller' => 'SymplificaBundle\\Controller\\SymplificaController::refrescartablaPacienteAction',  '_route' => 'index_refrescartablaPaciente',);
                }

            }

        }

        // home_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home_default_index');
            }

            return array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home_default_index',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
