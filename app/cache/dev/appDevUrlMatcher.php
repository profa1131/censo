<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/actividadcomercialvivienda')) {
                // actividadcomercialvivienda
                if (rtrim($pathinfo, '/') === '/actividadcomercialvivienda') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_actividadcomercialvivienda;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'actividadcomercialvivienda');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ActividadComercialViviendaController::indexAction',  '_route' => 'actividadcomercialvivienda',);
                }
                not_actividadcomercialvivienda:

                // actividadcomercialvivienda_create
                if ($pathinfo === '/actividadcomercialvivienda/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_actividadcomercialvivienda_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ActividadComercialViviendaController::createAction',  '_route' => 'actividadcomercialvivienda_create',);
                }
                not_actividadcomercialvivienda_create:

                // actividadcomercialvivienda_new
                if ($pathinfo === '/actividadcomercialvivienda/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_actividadcomercialvivienda_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ActividadComercialViviendaController::newAction',  '_route' => 'actividadcomercialvivienda_new',);
                }
                not_actividadcomercialvivienda_new:

                // actividadcomercialvivienda_show
                if (preg_match('#^/actividadcomercialvivienda/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_actividadcomercialvivienda_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadcomercialvivienda_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ActividadComercialViviendaController::showAction',));
                }
                not_actividadcomercialvivienda_show:

                // actividadcomercialvivienda_edit
                if (preg_match('#^/actividadcomercialvivienda/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_actividadcomercialvivienda_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadcomercialvivienda_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ActividadComercialViviendaController::editAction',));
                }
                not_actividadcomercialvivienda_edit:

                // actividadcomercialvivienda_update
                if (preg_match('#^/actividadcomercialvivienda/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_actividadcomercialvivienda_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadcomercialvivienda_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ActividadComercialViviendaController::updateAction',));
                }
                not_actividadcomercialvivienda_update:

                // actividadcomercialvivienda_delete
                if (preg_match('#^/actividadcomercialvivienda/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_actividadcomercialvivienda_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadcomercialvivienda_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ActividadComercialViviendaController::deleteAction',));
                }
                not_actividadcomercialvivienda_delete:

            }

            if (0 === strpos($pathinfo, '/aguasservidas')) {
                // aguasservidas
                if (rtrim($pathinfo, '/') === '/aguasservidas') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_aguasservidas;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'aguasservidas');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AguasServidasController::indexAction',  '_route' => 'aguasservidas',);
                }
                not_aguasservidas:

                // aguasservidas_create
                if ($pathinfo === '/aguasservidas/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_aguasservidas_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AguasServidasController::createAction',  '_route' => 'aguasservidas_create',);
                }
                not_aguasservidas_create:

                // aguasservidas_new
                if ($pathinfo === '/aguasservidas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_aguasservidas_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AguasServidasController::newAction',  '_route' => 'aguasservidas_new',);
                }
                not_aguasservidas_new:

                // aguasservidas_show
                if (preg_match('#^/aguasservidas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_aguasservidas_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aguasservidas_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AguasServidasController::showAction',));
                }
                not_aguasservidas_show:

                // aguasservidas_edit
                if (preg_match('#^/aguasservidas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_aguasservidas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aguasservidas_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AguasServidasController::editAction',));
                }
                not_aguasservidas_edit:

                // aguasservidas_update
                if (preg_match('#^/aguasservidas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_aguasservidas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aguasservidas_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AguasServidasController::updateAction',));
                }
                not_aguasservidas_update:

                // aguasservidas_delete
                if (preg_match('#^/aguasservidas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_aguasservidas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aguasservidas_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AguasServidasController::deleteAction',));
                }
                not_aguasservidas_delete:

            }

            if (0 === strpos($pathinfo, '/animales')) {
                // animales
                if (rtrim($pathinfo, '/') === '/animales') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_animales;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'animales');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AnimalesController::indexAction',  '_route' => 'animales',);
                }
                not_animales:

                // animales_create
                if ($pathinfo === '/animales/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_animales_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AnimalesController::createAction',  '_route' => 'animales_create',);
                }
                not_animales_create:

                // animales_new
                if ($pathinfo === '/animales/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_animales_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AnimalesController::newAction',  '_route' => 'animales_new',);
                }
                not_animales_new:

                // animales_show
                if (preg_match('#^/animales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_animales_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'animales_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AnimalesController::showAction',));
                }
                not_animales_show:

                // animales_edit
                if (preg_match('#^/animales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_animales_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'animales_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AnimalesController::editAction',));
                }
                not_animales_edit:

                // animales_update
                if (preg_match('#^/animales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_animales_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'animales_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AnimalesController::updateAction',));
                }
                not_animales_update:

                // animales_delete
                if (preg_match('#^/animales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_animales_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'animales_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AnimalesController::deleteAction',));
                }
                not_animales_delete:

            }

            if (0 === strpos($pathinfo, '/areasdetrabajos')) {
                // areasdetrabajos
                if (rtrim($pathinfo, '/') === '/areasdetrabajos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_areasdetrabajos;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'areasdetrabajos');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AreasDeTrabajosController::indexAction',  '_route' => 'areasdetrabajos',);
                }
                not_areasdetrabajos:

                // areasdetrabajos_create
                if ($pathinfo === '/areasdetrabajos/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_areasdetrabajos_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AreasDeTrabajosController::createAction',  '_route' => 'areasdetrabajos_create',);
                }
                not_areasdetrabajos_create:

                // areasdetrabajos_new
                if ($pathinfo === '/areasdetrabajos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_areasdetrabajos_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AreasDeTrabajosController::newAction',  '_route' => 'areasdetrabajos_new',);
                }
                not_areasdetrabajos_new:

                // areasdetrabajos_show
                if (preg_match('#^/areasdetrabajos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_areasdetrabajos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areasdetrabajos_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AreasDeTrabajosController::showAction',));
                }
                not_areasdetrabajos_show:

                // areasdetrabajos_edit
                if (preg_match('#^/areasdetrabajos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_areasdetrabajos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areasdetrabajos_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AreasDeTrabajosController::editAction',));
                }
                not_areasdetrabajos_edit:

                // areasdetrabajos_update
                if (preg_match('#^/areasdetrabajos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_areasdetrabajos_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areasdetrabajos_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AreasDeTrabajosController::updateAction',));
                }
                not_areasdetrabajos_update:

                // areasdetrabajos_delete
                if (preg_match('#^/areasdetrabajos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_areasdetrabajos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areasdetrabajos_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\AreasDeTrabajosController::deleteAction',));
                }
                not_areasdetrabajos_delete:

            }

        }

        if (0 === strpos($pathinfo, '/co')) {
            if (0 === strpos($pathinfo, '/comunas')) {
                // comunas
                if (rtrim($pathinfo, '/') === '/comunas') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comunas;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comunas');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ComunasController::indexAction',  '_route' => 'comunas',);
                }
                not_comunas:

                // comunas_create
                if ($pathinfo === '/comunas/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_comunas_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ComunasController::createAction',  '_route' => 'comunas_create',);
                }
                not_comunas_create:

                // comunas_new
                if ($pathinfo === '/comunas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comunas_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ComunasController::newAction',  '_route' => 'comunas_new',);
                }
                not_comunas_new:

                // comunas_show
                if (preg_match('#^/comunas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comunas_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comunas_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ComunasController::showAction',));
                }
                not_comunas_show:

                // comunas_edit
                if (preg_match('#^/comunas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comunas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comunas_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ComunasController::editAction',));
                }
                not_comunas_edit:

                // comunas_update
                if (preg_match('#^/comunas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_comunas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comunas_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ComunasController::updateAction',));
                }
                not_comunas_update:

                // comunas_delete
                if (preg_match('#^/comunas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_comunas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comunas_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ComunasController::deleteAction',));
                }
                not_comunas_delete:

            }

            if (0 === strpos($pathinfo, '/con')) {
                if (0 === strpos($pathinfo, '/condicion')) {
                    if (0 === strpos($pathinfo, '/condicionterrenos')) {
                        // condicionterrenos
                        if (rtrim($pathinfo, '/') === '/condicionterrenos') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_condicionterrenos;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'condicionterrenos');
                            }

                            return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionTerrenosController::indexAction',  '_route' => 'condicionterrenos',);
                        }
                        not_condicionterrenos:

                        // condicionterrenos_create
                        if ($pathinfo === '/condicionterrenos/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_condicionterrenos_create;
                            }

                            return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionTerrenosController::createAction',  '_route' => 'condicionterrenos_create',);
                        }
                        not_condicionterrenos_create:

                        // condicionterrenos_new
                        if ($pathinfo === '/condicionterrenos/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_condicionterrenos_new;
                            }

                            return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionTerrenosController::newAction',  '_route' => 'condicionterrenos_new',);
                        }
                        not_condicionterrenos_new:

                        // condicionterrenos_show
                        if (preg_match('#^/condicionterrenos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_condicionterrenos_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionterrenos_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionTerrenosController::showAction',));
                        }
                        not_condicionterrenos_show:

                        // condicionterrenos_edit
                        if (preg_match('#^/condicionterrenos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_condicionterrenos_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionterrenos_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionTerrenosController::editAction',));
                        }
                        not_condicionterrenos_edit:

                        // condicionterrenos_update
                        if (preg_match('#^/condicionterrenos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_condicionterrenos_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionterrenos_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionTerrenosController::updateAction',));
                        }
                        not_condicionterrenos_update:

                        // condicionterrenos_delete
                        if (preg_match('#^/condicionterrenos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_condicionterrenos_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionterrenos_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionTerrenosController::deleteAction',));
                        }
                        not_condicionterrenos_delete:

                    }

                    if (0 === strpos($pathinfo, '/condicionessalubridad')) {
                        // condicionessalubridad
                        if (rtrim($pathinfo, '/') === '/condicionessalubridad') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_condicionessalubridad;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'condicionessalubridad');
                            }

                            return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionesSalubridadController::indexAction',  '_route' => 'condicionessalubridad',);
                        }
                        not_condicionessalubridad:

                        // condicionessalubridad_create
                        if ($pathinfo === '/condicionessalubridad/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_condicionessalubridad_create;
                            }

                            return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionesSalubridadController::createAction',  '_route' => 'condicionessalubridad_create',);
                        }
                        not_condicionessalubridad_create:

                        // condicionessalubridad_new
                        if ($pathinfo === '/condicionessalubridad/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_condicionessalubridad_new;
                            }

                            return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionesSalubridadController::newAction',  '_route' => 'condicionessalubridad_new',);
                        }
                        not_condicionessalubridad_new:

                        // condicionessalubridad_show
                        if (preg_match('#^/condicionessalubridad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_condicionessalubridad_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionessalubridad_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionesSalubridadController::showAction',));
                        }
                        not_condicionessalubridad_show:

                        // condicionessalubridad_edit
                        if (preg_match('#^/condicionessalubridad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_condicionessalubridad_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionessalubridad_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionesSalubridadController::editAction',));
                        }
                        not_condicionessalubridad_edit:

                        // condicionessalubridad_update
                        if (preg_match('#^/condicionessalubridad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_condicionessalubridad_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionessalubridad_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionesSalubridadController::updateAction',));
                        }
                        not_condicionessalubridad_update:

                        // condicionessalubridad_delete
                        if (preg_match('#^/condicionessalubridad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_condicionessalubridad_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionessalubridad_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\CondicionesSalubridadController::deleteAction',));
                        }
                        not_condicionessalubridad_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/consejoscomunales')) {
                    // consejoscomunales
                    if (rtrim($pathinfo, '/') === '/consejoscomunales') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_consejoscomunales;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'consejoscomunales');
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ConsejosComunalesController::indexAction',  '_route' => 'consejoscomunales',);
                    }
                    not_consejoscomunales:

                    // consejoscomunales_create
                    if ($pathinfo === '/consejoscomunales/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_consejoscomunales_create;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ConsejosComunalesController::createAction',  '_route' => 'consejoscomunales_create',);
                    }
                    not_consejoscomunales_create:

                    // consejoscomunales_new
                    if ($pathinfo === '/consejoscomunales/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_consejoscomunales_new;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ConsejosComunalesController::newAction',  '_route' => 'consejoscomunales_new',);
                    }
                    not_consejoscomunales_new:

                    // consejoscomunales_show
                    if (preg_match('#^/consejoscomunales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_consejoscomunales_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consejoscomunales_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ConsejosComunalesController::showAction',));
                    }
                    not_consejoscomunales_show:

                    // consejoscomunales_edit
                    if (preg_match('#^/consejoscomunales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_consejoscomunales_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consejoscomunales_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ConsejosComunalesController::editAction',));
                    }
                    not_consejoscomunales_edit:

                    // consejoscomunales_update
                    if (preg_match('#^/consejoscomunales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_consejoscomunales_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consejoscomunales_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ConsejosComunalesController::updateAction',));
                    }
                    not_consejoscomunales_update:

                    // consejoscomunales_delete
                    if (preg_match('#^/consejoscomunales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_consejoscomunales_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consejoscomunales_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ConsejosComunalesController::deleteAction',));
                    }
                    not_consejoscomunales_delete:

                }

            }

        }

        // censo_censo_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'censo_censo_default_index');
            }

            return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'censo_censo_default_index',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/en')) {
                if (0 === strpos($pathinfo, '/enfermedades')) {
                    // enfermedades
                    if (rtrim($pathinfo, '/') === '/enfermedades') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_enfermedades;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'enfermedades');
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnfermedadesController::indexAction',  '_route' => 'enfermedades',);
                    }
                    not_enfermedades:

                    // enfermedades_create
                    if ($pathinfo === '/enfermedades/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_enfermedades_create;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnfermedadesController::createAction',  '_route' => 'enfermedades_create',);
                    }
                    not_enfermedades_create:

                    // enfermedades_new
                    if ($pathinfo === '/enfermedades/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_enfermedades_new;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnfermedadesController::newAction',  '_route' => 'enfermedades_new',);
                    }
                    not_enfermedades_new:

                    // enfermedades_show
                    if (preg_match('#^/enfermedades/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_enfermedades_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedades_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnfermedadesController::showAction',));
                    }
                    not_enfermedades_show:

                    // enfermedades_edit
                    if (preg_match('#^/enfermedades/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_enfermedades_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedades_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnfermedadesController::editAction',));
                    }
                    not_enfermedades_edit:

                    // enfermedades_update
                    if (preg_match('#^/enfermedades/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_enfermedades_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedades_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnfermedadesController::updateAction',));
                    }
                    not_enfermedades_update:

                    // enfermedades_delete
                    if (preg_match('#^/enfermedades/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_enfermedades_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedades_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnfermedadesController::deleteAction',));
                    }
                    not_enfermedades_delete:

                }

                if (0 === strpos($pathinfo, '/enseres')) {
                    // enseres
                    if (rtrim($pathinfo, '/') === '/enseres') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_enseres;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'enseres');
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnseresController::indexAction',  '_route' => 'enseres',);
                    }
                    not_enseres:

                    // enseres_create
                    if ($pathinfo === '/enseres/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_enseres_create;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnseresController::createAction',  '_route' => 'enseres_create',);
                    }
                    not_enseres_create:

                    // enseres_new
                    if ($pathinfo === '/enseres/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_enseres_new;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnseresController::newAction',  '_route' => 'enseres_new',);
                    }
                    not_enseres_new:

                    // enseres_show
                    if (preg_match('#^/enseres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_enseres_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseres_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnseresController::showAction',));
                    }
                    not_enseres_show:

                    // enseres_edit
                    if (preg_match('#^/enseres/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_enseres_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseres_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnseresController::editAction',));
                    }
                    not_enseres_edit:

                    // enseres_update
                    if (preg_match('#^/enseres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_enseres_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseres_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnseresController::updateAction',));
                    }
                    not_enseres_update:

                    // enseres_delete
                    if (preg_match('#^/enseres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_enseres_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'enseres_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EnseresController::deleteAction',));
                    }
                    not_enseres_delete:

                }

            }

            if (0 === strpos($pathinfo, '/estados')) {
                // estados
                if (rtrim($pathinfo, '/') === '/estados') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_estados;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'estados');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EstadosController::indexAction',  '_route' => 'estados',);
                }
                not_estados:

                // estados_create
                if ($pathinfo === '/estados/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_estados_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EstadosController::createAction',  '_route' => 'estados_create',);
                }
                not_estados_create:

                // estados_new
                if ($pathinfo === '/estados/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_estados_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EstadosController::newAction',  '_route' => 'estados_new',);
                }
                not_estados_new:

                // estados_show
                if (preg_match('#^/estados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_estados_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estados_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EstadosController::showAction',));
                }
                not_estados_show:

                // estados_edit
                if (preg_match('#^/estados/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_estados_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estados_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EstadosController::editAction',));
                }
                not_estados_edit:

                // estados_update
                if (preg_match('#^/estados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_estados_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estados_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EstadosController::updateAction',));
                }
                not_estados_update:

                // estados_delete
                if (preg_match('#^/estados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_estados_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estados_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\EstadosController::deleteAction',));
                }
                not_estados_delete:

            }

        }

        if (0 === strpos($pathinfo, '/f')) {
            if (0 === strpos($pathinfo, '/familias')) {
                // familias
                if (rtrim($pathinfo, '/') === '/familias') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_familias;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'familias');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FamiliasController::indexAction',  '_route' => 'familias',);
                }
                not_familias:

                // familias_create
                if ($pathinfo === '/familias/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_familias_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FamiliasController::createAction',  '_route' => 'familias_create',);
                }
                not_familias_create:

                // familias_new
                if ($pathinfo === '/familias/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_familias_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FamiliasController::newAction',  '_route' => 'familias_new',);
                }
                not_familias_new:

                // familias_show
                if (preg_match('#^/familias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_familias_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'familias_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FamiliasController::showAction',));
                }
                not_familias_show:

                // familias_edit
                if (preg_match('#^/familias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_familias_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'familias_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FamiliasController::editAction',));
                }
                not_familias_edit:

                // familias_update
                if (preg_match('#^/familias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_familias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'familias_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FamiliasController::updateAction',));
                }
                not_familias_update:

                // familias_delete
                if (preg_match('#^/familias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_familias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'familias_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FamiliasController::deleteAction',));
                }
                not_familias_delete:

            }

            if (0 === strpos($pathinfo, '/formatenencias')) {
                // formatenencias
                if (rtrim($pathinfo, '/') === '/formatenencias') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formatenencias;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'formatenencias');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FormaTenenciasController::indexAction',  '_route' => 'formatenencias',);
                }
                not_formatenencias:

                // formatenencias_create
                if ($pathinfo === '/formatenencias/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_formatenencias_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FormaTenenciasController::createAction',  '_route' => 'formatenencias_create',);
                }
                not_formatenencias_create:

                // formatenencias_new
                if ($pathinfo === '/formatenencias/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formatenencias_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FormaTenenciasController::newAction',  '_route' => 'formatenencias_new',);
                }
                not_formatenencias_new:

                // formatenencias_show
                if (preg_match('#^/formatenencias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formatenencias_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatenencias_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FormaTenenciasController::showAction',));
                }
                not_formatenencias_show:

                // formatenencias_edit
                if (preg_match('#^/formatenencias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formatenencias_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatenencias_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FormaTenenciasController::editAction',));
                }
                not_formatenencias_edit:

                // formatenencias_update
                if (preg_match('#^/formatenencias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_formatenencias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatenencias_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FormaTenenciasController::updateAction',));
                }
                not_formatenencias_update:

                // formatenencias_delete
                if (preg_match('#^/formatenencias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_formatenencias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatenencias_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\FormaTenenciasController::deleteAction',));
                }
                not_formatenencias_delete:

            }

        }

        if (0 === strpos($pathinfo, '/groups')) {
            // groups
            if (rtrim($pathinfo, '/') === '/groups') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groups;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'groups');
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\GroupsController::indexAction',  '_route' => 'groups',);
            }
            not_groups:

            // groups_create
            if ($pathinfo === '/groups/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_groups_create;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\GroupsController::createAction',  '_route' => 'groups_create',);
            }
            not_groups_create:

            // groups_new
            if ($pathinfo === '/groups/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groups_new;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\GroupsController::newAction',  '_route' => 'groups_new',);
            }
            not_groups_new:

            // groups_show
            if (preg_match('#^/groups/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groups_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\GroupsController::showAction',));
            }
            not_groups_show:

            // groups_edit
            if (preg_match('#^/groups/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groups_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\GroupsController::editAction',));
            }
            not_groups_edit:

            // groups_update
            if (preg_match('#^/groups/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_groups_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\GroupsController::updateAction',));
            }
            not_groups_update:

            // groups_delete
            if (preg_match('#^/groups/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_groups_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groups_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\GroupsController::deleteAction',));
            }
            not_groups_delete:

        }

        if (0 === strpos($pathinfo, '/habitantes')) {
            // habitantes
            if (rtrim($pathinfo, '/') === '/habitantes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habitantes;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'habitantes');
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\HabitantesController::indexAction',  '_route' => 'habitantes',);
            }
            not_habitantes:

            // habitantes_create
            if ($pathinfo === '/habitantes/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_habitantes_create;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\HabitantesController::createAction',  '_route' => 'habitantes_create',);
            }
            not_habitantes_create:

            // habitantes_new
            if ($pathinfo === '/habitantes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habitantes_new;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\HabitantesController::newAction',  '_route' => 'habitantes_new',);
            }
            not_habitantes_new:

            // habitantes_show
            if (preg_match('#^/habitantes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habitantes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitantes_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\HabitantesController::showAction',));
            }
            not_habitantes_show:

            // habitantes_edit
            if (preg_match('#^/habitantes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habitantes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitantes_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\HabitantesController::editAction',));
            }
            not_habitantes_edit:

            // habitantes_update
            if (preg_match('#^/habitantes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_habitantes_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitantes_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\HabitantesController::updateAction',));
            }
            not_habitantes_update:

            // habitantes_delete
            if (preg_match('#^/habitantes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_habitantes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitantes_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\HabitantesController::deleteAction',));
            }
            not_habitantes_delete:

        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/mecanismosinformacion')) {
                // mecanismosinformacion
                if (rtrim($pathinfo, '/') === '/mecanismosinformacion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mecanismosinformacion;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mecanismosinformacion');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MecanismosInformacionController::indexAction',  '_route' => 'mecanismosinformacion',);
                }
                not_mecanismosinformacion:

                // mecanismosinformacion_create
                if ($pathinfo === '/mecanismosinformacion/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mecanismosinformacion_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MecanismosInformacionController::createAction',  '_route' => 'mecanismosinformacion_create',);
                }
                not_mecanismosinformacion_create:

                // mecanismosinformacion_new
                if ($pathinfo === '/mecanismosinformacion/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mecanismosinformacion_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MecanismosInformacionController::newAction',  '_route' => 'mecanismosinformacion_new',);
                }
                not_mecanismosinformacion_new:

                // mecanismosinformacion_show
                if (preg_match('#^/mecanismosinformacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mecanismosinformacion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mecanismosinformacion_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MecanismosInformacionController::showAction',));
                }
                not_mecanismosinformacion_show:

                // mecanismosinformacion_edit
                if (preg_match('#^/mecanismosinformacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mecanismosinformacion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mecanismosinformacion_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MecanismosInformacionController::editAction',));
                }
                not_mecanismosinformacion_edit:

                // mecanismosinformacion_update
                if (preg_match('#^/mecanismosinformacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_mecanismosinformacion_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mecanismosinformacion_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MecanismosInformacionController::updateAction',));
                }
                not_mecanismosinformacion_update:

                // mecanismosinformacion_delete
                if (preg_match('#^/mecanismosinformacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mecanismosinformacion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mecanismosinformacion_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MecanismosInformacionController::deleteAction',));
                }
                not_mecanismosinformacion_delete:

            }

            if (0 === strpos($pathinfo, '/misiones')) {
                // misiones
                if (rtrim($pathinfo, '/') === '/misiones') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_misiones;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'misiones');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MisionesController::indexAction',  '_route' => 'misiones',);
                }
                not_misiones:

                // misiones_create
                if ($pathinfo === '/misiones/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_misiones_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MisionesController::createAction',  '_route' => 'misiones_create',);
                }
                not_misiones_create:

                // misiones_new
                if ($pathinfo === '/misiones/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_misiones_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MisionesController::newAction',  '_route' => 'misiones_new',);
                }
                not_misiones_new:

                // misiones_show
                if (preg_match('#^/misiones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_misiones_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'misiones_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MisionesController::showAction',));
                }
                not_misiones_show:

                // misiones_edit
                if (preg_match('#^/misiones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_misiones_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'misiones_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MisionesController::editAction',));
                }
                not_misiones_edit:

                // misiones_update
                if (preg_match('#^/misiones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_misiones_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'misiones_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MisionesController::updateAction',));
                }
                not_misiones_update:

                // misiones_delete
                if (preg_match('#^/misiones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_misiones_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'misiones_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MisionesController::deleteAction',));
                }
                not_misiones_delete:

            }

            if (0 === strpos($pathinfo, '/municipios')) {
                // municipios
                if (rtrim($pathinfo, '/') === '/municipios') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_municipios;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'municipios');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MunicipiosController::indexAction',  '_route' => 'municipios',);
                }
                not_municipios:

                // municipios_create
                if ($pathinfo === '/municipios/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_municipios_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MunicipiosController::createAction',  '_route' => 'municipios_create',);
                }
                not_municipios_create:

                // municipios_new
                if ($pathinfo === '/municipios/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_municipios_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MunicipiosController::newAction',  '_route' => 'municipios_new',);
                }
                not_municipios_new:

                // municipios_show
                if (preg_match('#^/municipios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_municipios_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipios_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MunicipiosController::showAction',));
                }
                not_municipios_show:

                // municipios_edit
                if (preg_match('#^/municipios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_municipios_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipios_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MunicipiosController::editAction',));
                }
                not_municipios_edit:

                // municipios_update
                if (preg_match('#^/municipios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_municipios_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipios_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MunicipiosController::updateAction',));
                }
                not_municipios_update:

                // municipios_delete
                if (preg_match('#^/municipios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_municipios_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipios_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\MunicipiosController::deleteAction',));
                }
                not_municipios_delete:

            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/parroquias')) {
                // parroquias
                if (rtrim($pathinfo, '/') === '/parroquias') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_parroquias;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'parroquias');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ParroquiasController::indexAction',  '_route' => 'parroquias',);
                }
                not_parroquias:

                // parroquias_create
                if ($pathinfo === '/parroquias/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_parroquias_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ParroquiasController::createAction',  '_route' => 'parroquias_create',);
                }
                not_parroquias_create:

                // parroquias_new
                if ($pathinfo === '/parroquias/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_parroquias_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ParroquiasController::newAction',  '_route' => 'parroquias_new',);
                }
                not_parroquias_new:

                // parroquias_show
                if (preg_match('#^/parroquias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_parroquias_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'parroquias_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ParroquiasController::showAction',));
                }
                not_parroquias_show:

                // parroquias_edit
                if (preg_match('#^/parroquias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_parroquias_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'parroquias_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ParroquiasController::editAction',));
                }
                not_parroquias_edit:

                // parroquias_update
                if (preg_match('#^/parroquias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_parroquias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'parroquias_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ParroquiasController::updateAction',));
                }
                not_parroquias_update:

                // parroquias_delete
                if (preg_match('#^/parroquias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_parroquias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'parroquias_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ParroquiasController::deleteAction',));
                }
                not_parroquias_delete:

            }

            if (0 === strpos($pathinfo, '/plagas')) {
                // plagas
                if (rtrim($pathinfo, '/') === '/plagas') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_plagas;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'plagas');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PlagasController::indexAction',  '_route' => 'plagas',);
                }
                not_plagas:

                // plagas_create
                if ($pathinfo === '/plagas/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_plagas_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PlagasController::createAction',  '_route' => 'plagas_create',);
                }
                not_plagas_create:

                // plagas_new
                if ($pathinfo === '/plagas/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_plagas_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PlagasController::newAction',  '_route' => 'plagas_new',);
                }
                not_plagas_new:

                // plagas_show
                if (preg_match('#^/plagas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_plagas_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plagas_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PlagasController::showAction',));
                }
                not_plagas_show:

                // plagas_edit
                if (preg_match('#^/plagas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_plagas_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plagas_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PlagasController::editAction',));
                }
                not_plagas_edit:

                // plagas_update
                if (preg_match('#^/plagas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_plagas_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plagas_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PlagasController::updateAction',));
                }
                not_plagas_update:

                // plagas_delete
                if (preg_match('#^/plagas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_plagas_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plagas_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PlagasController::deleteAction',));
                }
                not_plagas_delete:

            }

            if (0 === strpos($pathinfo, '/pr')) {
                if (0 === strpos($pathinfo, '/preguntas')) {
                    // preguntas
                    if (rtrim($pathinfo, '/') === '/preguntas') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_preguntas;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'preguntas');
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PreguntasController::indexAction',  '_route' => 'preguntas',);
                    }
                    not_preguntas:

                    // preguntas_create
                    if ($pathinfo === '/preguntas/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_preguntas_create;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PreguntasController::createAction',  '_route' => 'preguntas_create',);
                    }
                    not_preguntas_create:

                    // preguntas_new
                    if ($pathinfo === '/preguntas/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_preguntas_new;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PreguntasController::newAction',  '_route' => 'preguntas_new',);
                    }
                    not_preguntas_new:

                    // preguntas_show
                    if (preg_match('#^/preguntas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_preguntas_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntas_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PreguntasController::showAction',));
                    }
                    not_preguntas_show:

                    // preguntas_edit
                    if (preg_match('#^/preguntas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_preguntas_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntas_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PreguntasController::editAction',));
                    }
                    not_preguntas_edit:

                    // preguntas_update
                    if (preg_match('#^/preguntas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_preguntas_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntas_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PreguntasController::updateAction',));
                    }
                    not_preguntas_update:

                    // preguntas_delete
                    if (preg_match('#^/preguntas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_preguntas_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'preguntas_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\PreguntasController::deleteAction',));
                    }
                    not_preguntas_delete:

                }

                if (0 === strpos($pathinfo, '/profesiones')) {
                    // profesiones
                    if (rtrim($pathinfo, '/') === '/profesiones') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_profesiones;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'profesiones');
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ProfesionesController::indexAction',  '_route' => 'profesiones',);
                    }
                    not_profesiones:

                    // profesiones_create
                    if ($pathinfo === '/profesiones/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_profesiones_create;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ProfesionesController::createAction',  '_route' => 'profesiones_create',);
                    }
                    not_profesiones_create:

                    // profesiones_new
                    if ($pathinfo === '/profesiones/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_profesiones_new;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ProfesionesController::newAction',  '_route' => 'profesiones_new',);
                    }
                    not_profesiones_new:

                    // profesiones_show
                    if (preg_match('#^/profesiones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_profesiones_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesiones_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ProfesionesController::showAction',));
                    }
                    not_profesiones_show:

                    // profesiones_edit
                    if (preg_match('#^/profesiones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_profesiones_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesiones_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ProfesionesController::editAction',));
                    }
                    not_profesiones_edit:

                    // profesiones_update
                    if (preg_match('#^/profesiones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_profesiones_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesiones_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ProfesionesController::updateAction',));
                    }
                    not_profesiones_update:

                    // profesiones_delete
                    if (preg_match('#^/profesiones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_profesiones_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesiones_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ProfesionesController::deleteAction',));
                    }
                    not_profesiones_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/recoleccionbasura')) {
                // recoleccionbasura
                if (rtrim($pathinfo, '/') === '/recoleccionbasura') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recoleccionbasura;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'recoleccionbasura');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RecoleccionBasuraController::indexAction',  '_route' => 'recoleccionbasura',);
                }
                not_recoleccionbasura:

                // recoleccionbasura_create
                if ($pathinfo === '/recoleccionbasura/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_recoleccionbasura_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RecoleccionBasuraController::createAction',  '_route' => 'recoleccionbasura_create',);
                }
                not_recoleccionbasura_create:

                // recoleccionbasura_new
                if ($pathinfo === '/recoleccionbasura/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recoleccionbasura_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RecoleccionBasuraController::newAction',  '_route' => 'recoleccionbasura_new',);
                }
                not_recoleccionbasura_new:

                // recoleccionbasura_show
                if (preg_match('#^/recoleccionbasura/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recoleccionbasura_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recoleccionbasura_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RecoleccionBasuraController::showAction',));
                }
                not_recoleccionbasura_show:

                // recoleccionbasura_edit
                if (preg_match('#^/recoleccionbasura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_recoleccionbasura_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recoleccionbasura_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RecoleccionBasuraController::editAction',));
                }
                not_recoleccionbasura_edit:

                // recoleccionbasura_update
                if (preg_match('#^/recoleccionbasura/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_recoleccionbasura_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recoleccionbasura_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RecoleccionBasuraController::updateAction',));
                }
                not_recoleccionbasura_update:

                // recoleccionbasura_delete
                if (preg_match('#^/recoleccionbasura/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_recoleccionbasura_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'recoleccionbasura_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RecoleccionBasuraController::deleteAction',));
                }
                not_recoleccionbasura_delete:

            }

            if (0 === strpos($pathinfo, '/registrosocioeconomico')) {
                // registrosocioeconomico
                if (rtrim($pathinfo, '/') === '/registrosocioeconomico') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_registrosocioeconomico;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'registrosocioeconomico');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RegistroSocioeconomicoController::indexAction',  '_route' => 'registrosocioeconomico',);
                }
                not_registrosocioeconomico:

                // registrosocioeconomico_create
                if ($pathinfo === '/registrosocioeconomico/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_registrosocioeconomico_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RegistroSocioeconomicoController::createAction',  '_route' => 'registrosocioeconomico_create',);
                }
                not_registrosocioeconomico_create:

                // registrosocioeconomico_new
                if ($pathinfo === '/registrosocioeconomico/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_registrosocioeconomico_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RegistroSocioeconomicoController::newAction',  '_route' => 'registrosocioeconomico_new',);
                }
                not_registrosocioeconomico_new:

                // registrosocioeconomico_show
                if (preg_match('#^/registrosocioeconomico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_registrosocioeconomico_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'registrosocioeconomico_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RegistroSocioeconomicoController::showAction',));
                }
                not_registrosocioeconomico_show:

                // registrosocioeconomico_edit
                if (preg_match('#^/registrosocioeconomico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_registrosocioeconomico_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'registrosocioeconomico_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RegistroSocioeconomicoController::editAction',));
                }
                not_registrosocioeconomico_edit:

                // registrosocioeconomico_update
                if (preg_match('#^/registrosocioeconomico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_registrosocioeconomico_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'registrosocioeconomico_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RegistroSocioeconomicoController::updateAction',));
                }
                not_registrosocioeconomico_update:

                // registrosocioeconomico_delete
                if (preg_match('#^/registrosocioeconomico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_registrosocioeconomico_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'registrosocioeconomico_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\RegistroSocioeconomicoController::deleteAction',));
                }
                not_registrosocioeconomico_delete:

            }

        }

        // contrasenia
        if ($pathinfo === '/contrasenia') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_contrasenia;
            }

            return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\SeguridadController::contraseniaAction',  '_route' => 'contrasenia',);
        }
        not_contrasenia:

        // olvido_contrasenia
        if ($pathinfo === '/olvido_contrasenia') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_olvido_contrasenia;
            }

            return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\SeguridadController::olvidoContraseniaAction',  '_route' => 'olvido_contrasenia',);
        }
        not_olvido_contrasenia:

        if (0 === strpos($pathinfo, '/servicioscomunales')) {
            // servicioscomunales
            if (rtrim($pathinfo, '/') === '/servicioscomunales') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_servicioscomunales;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'servicioscomunales');
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ServiciosComunalesController::indexAction',  '_route' => 'servicioscomunales',);
            }
            not_servicioscomunales:

            // servicioscomunales_create
            if ($pathinfo === '/servicioscomunales/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_servicioscomunales_create;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ServiciosComunalesController::createAction',  '_route' => 'servicioscomunales_create',);
            }
            not_servicioscomunales_create:

            // servicioscomunales_new
            if ($pathinfo === '/servicioscomunales/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_servicioscomunales_new;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ServiciosComunalesController::newAction',  '_route' => 'servicioscomunales_new',);
            }
            not_servicioscomunales_new:

            // servicioscomunales_show
            if (preg_match('#^/servicioscomunales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_servicioscomunales_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicioscomunales_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ServiciosComunalesController::showAction',));
            }
            not_servicioscomunales_show:

            // servicioscomunales_edit
            if (preg_match('#^/servicioscomunales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_servicioscomunales_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicioscomunales_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ServiciosComunalesController::editAction',));
            }
            not_servicioscomunales_edit:

            // servicioscomunales_update
            if (preg_match('#^/servicioscomunales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_servicioscomunales_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicioscomunales_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ServiciosComunalesController::updateAction',));
            }
            not_servicioscomunales_update:

            // servicioscomunales_delete
            if (preg_match('#^/servicioscomunales/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_servicioscomunales_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicioscomunales_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\ServiciosComunalesController::deleteAction',));
            }
            not_servicioscomunales_delete:

        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/telefonias')) {
                // telefonias
                if (rtrim($pathinfo, '/') === '/telefonias') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_telefonias;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'telefonias');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TelefoniasController::indexAction',  '_route' => 'telefonias',);
                }
                not_telefonias:

                // telefonias_create
                if ($pathinfo === '/telefonias/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_telefonias_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TelefoniasController::createAction',  '_route' => 'telefonias_create',);
                }
                not_telefonias_create:

                // telefonias_new
                if ($pathinfo === '/telefonias/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_telefonias_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TelefoniasController::newAction',  '_route' => 'telefonias_new',);
                }
                not_telefonias_new:

                // telefonias_show
                if (preg_match('#^/telefonias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_telefonias_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefonias_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TelefoniasController::showAction',));
                }
                not_telefonias_show:

                // telefonias_edit
                if (preg_match('#^/telefonias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_telefonias_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefonias_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TelefoniasController::editAction',));
                }
                not_telefonias_edit:

                // telefonias_update
                if (preg_match('#^/telefonias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_telefonias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefonias_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TelefoniasController::updateAction',));
                }
                not_telefonias_update:

                // telefonias_delete
                if (preg_match('#^/telefonias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_telefonias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'telefonias_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TelefoniasController::deleteAction',));
                }
                not_telefonias_delete:

            }

            if (0 === strpos($pathinfo, '/tipo')) {
                if (0 === strpos($pathinfo, '/tipoparedes')) {
                    // tipoparedes
                    if (rtrim($pathinfo, '/') === '/tipoparedes') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoparedes;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tipoparedes');
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoParedesController::indexAction',  '_route' => 'tipoparedes',);
                    }
                    not_tipoparedes:

                    // tipoparedes_create
                    if ($pathinfo === '/tipoparedes/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_tipoparedes_create;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoParedesController::createAction',  '_route' => 'tipoparedes_create',);
                    }
                    not_tipoparedes_create:

                    // tipoparedes_new
                    if ($pathinfo === '/tipoparedes/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoparedes_new;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoParedesController::newAction',  '_route' => 'tipoparedes_new',);
                    }
                    not_tipoparedes_new:

                    // tipoparedes_show
                    if (preg_match('#^/tipoparedes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoparedes_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoparedes_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoParedesController::showAction',));
                    }
                    not_tipoparedes_show:

                    // tipoparedes_edit
                    if (preg_match('#^/tipoparedes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoparedes_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoparedes_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoParedesController::editAction',));
                    }
                    not_tipoparedes_edit:

                    // tipoparedes_update
                    if (preg_match('#^/tipoparedes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_tipoparedes_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoparedes_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoParedesController::updateAction',));
                    }
                    not_tipoparedes_update:

                    // tipoparedes_delete
                    if (preg_match('#^/tipoparedes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_tipoparedes_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoparedes_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoParedesController::deleteAction',));
                    }
                    not_tipoparedes_delete:

                }

                if (0 === strpos($pathinfo, '/tipotechos')) {
                    // tipotechos
                    if (rtrim($pathinfo, '/') === '/tipotechos') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipotechos;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tipotechos');
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoTechosController::indexAction',  '_route' => 'tipotechos',);
                    }
                    not_tipotechos:

                    // tipotechos_create
                    if ($pathinfo === '/tipotechos/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_tipotechos_create;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoTechosController::createAction',  '_route' => 'tipotechos_create',);
                    }
                    not_tipotechos_create:

                    // tipotechos_new
                    if ($pathinfo === '/tipotechos/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipotechos_new;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoTechosController::newAction',  '_route' => 'tipotechos_new',);
                    }
                    not_tipotechos_new:

                    // tipotechos_show
                    if (preg_match('#^/tipotechos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipotechos_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipotechos_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoTechosController::showAction',));
                    }
                    not_tipotechos_show:

                    // tipotechos_edit
                    if (preg_match('#^/tipotechos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipotechos_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipotechos_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoTechosController::editAction',));
                    }
                    not_tipotechos_edit:

                    // tipotechos_update
                    if (preg_match('#^/tipotechos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_tipotechos_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipotechos_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoTechosController::updateAction',));
                    }
                    not_tipotechos_update:

                    // tipotechos_delete
                    if (preg_match('#^/tipotechos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_tipotechos_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipotechos_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoTechosController::deleteAction',));
                    }
                    not_tipotechos_delete:

                }

                if (0 === strpos($pathinfo, '/tipoviviendas')) {
                    // tipoviviendas
                    if (rtrim($pathinfo, '/') === '/tipoviviendas') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoviviendas;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tipoviviendas');
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoViviendasController::indexAction',  '_route' => 'tipoviviendas',);
                    }
                    not_tipoviviendas:

                    // tipoviviendas_create
                    if ($pathinfo === '/tipoviviendas/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_tipoviviendas_create;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoViviendasController::createAction',  '_route' => 'tipoviviendas_create',);
                    }
                    not_tipoviviendas_create:

                    // tipoviviendas_new
                    if ($pathinfo === '/tipoviviendas/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoviviendas_new;
                        }

                        return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoViviendasController::newAction',  '_route' => 'tipoviviendas_new',);
                    }
                    not_tipoviviendas_new:

                    // tipoviviendas_show
                    if (preg_match('#^/tipoviviendas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoviviendas_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoviviendas_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoViviendasController::showAction',));
                    }
                    not_tipoviviendas_show:

                    // tipoviviendas_edit
                    if (preg_match('#^/tipoviviendas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_tipoviviendas_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoviviendas_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoViviendasController::editAction',));
                    }
                    not_tipoviviendas_edit:

                    // tipoviviendas_update
                    if (preg_match('#^/tipoviviendas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_tipoviviendas_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoviviendas_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoViviendasController::updateAction',));
                    }
                    not_tipoviviendas_update:

                    // tipoviviendas_delete
                    if (preg_match('#^/tipoviviendas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_tipoviviendas_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoviviendas_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TipoViviendasController::deleteAction',));
                    }
                    not_tipoviviendas_delete:

                }

            }

            if (0 === strpos($pathinfo, '/transportes')) {
                // transportes
                if (rtrim($pathinfo, '/') === '/transportes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_transportes;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'transportes');
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TransportesController::indexAction',  '_route' => 'transportes',);
                }
                not_transportes:

                // transportes_create
                if ($pathinfo === '/transportes/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_transportes_create;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TransportesController::createAction',  '_route' => 'transportes_create',);
                }
                not_transportes_create:

                // transportes_new
                if ($pathinfo === '/transportes/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_transportes_new;
                    }

                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TransportesController::newAction',  '_route' => 'transportes_new',);
                }
                not_transportes_new:

                // transportes_show
                if (preg_match('#^/transportes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_transportes_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transportes_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TransportesController::showAction',));
                }
                not_transportes_show:

                // transportes_edit
                if (preg_match('#^/transportes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_transportes_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transportes_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TransportesController::editAction',));
                }
                not_transportes_edit:

                // transportes_update
                if (preg_match('#^/transportes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_transportes_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transportes_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TransportesController::updateAction',));
                }
                not_transportes_update:

                // transportes_delete
                if (preg_match('#^/transportes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_transportes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transportes_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\TransportesController::deleteAction',));
                }
                not_transportes_delete:

            }

        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios
            if (rtrim($pathinfo, '/') === '/usuarios') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuarios');
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\UsuariosController::indexAction',  '_route' => 'usuarios',);
            }
            not_usuarios:

            // usuarios_create
            if ($pathinfo === '/usuarios/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuarios_create;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\UsuariosController::createAction',  '_route' => 'usuarios_create',);
            }
            not_usuarios_create:

            // usuarios_new
            if ($pathinfo === '/usuarios/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_new;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\UsuariosController::newAction',  '_route' => 'usuarios_new',);
            }
            not_usuarios_new:

            // usuarios_show
            if (preg_match('#^/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\UsuariosController::showAction',));
            }
            not_usuarios_show:

            // usuarios_edit
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuarios_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\UsuariosController::editAction',));
            }
            not_usuarios_edit:

            // usuarios_update
            if (preg_match('#^/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_usuarios_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\UsuariosController::updateAction',));
            }
            not_usuarios_update:

            // usuarios_delete
            if (preg_match('#^/usuarios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuarios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\UsuariosController::deleteAction',));
            }
            not_usuarios_delete:

        }

        if (0 === strpos($pathinfo, '/vocerias')) {
            // vocerias
            if (rtrim($pathinfo, '/') === '/vocerias') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vocerias;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vocerias');
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\VoceriasController::indexAction',  '_route' => 'vocerias',);
            }
            not_vocerias:

            // vocerias_create
            if ($pathinfo === '/vocerias/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_vocerias_create;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\VoceriasController::createAction',  '_route' => 'vocerias_create',);
            }
            not_vocerias_create:

            // vocerias_new
            if ($pathinfo === '/vocerias/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vocerias_new;
                }

                return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\VoceriasController::newAction',  '_route' => 'vocerias_new',);
            }
            not_vocerias_new:

            // vocerias_show
            if (preg_match('#^/vocerias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vocerias_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vocerias_show')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\VoceriasController::showAction',));
            }
            not_vocerias_show:

            // vocerias_edit
            if (preg_match('#^/vocerias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vocerias_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vocerias_edit')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\VoceriasController::editAction',));
            }
            not_vocerias_edit:

            // vocerias_update
            if (preg_match('#^/vocerias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_vocerias_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vocerias_update')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\VoceriasController::updateAction',));
            }
            not_vocerias_update:

            // vocerias_delete
            if (preg_match('#^/vocerias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_vocerias_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vocerias_delete')), array (  '_controller' => 'Censo\\CensoBundle\\Controller\\VoceriasController::deleteAction',));
            }
            not_vocerias_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Censo\\CensoBundle\\Controller\\SeguridadController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
