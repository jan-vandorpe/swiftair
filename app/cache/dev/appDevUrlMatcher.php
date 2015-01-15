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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // scrum_swiftair_homepage
        if (0 === strpos($pathinfo, '/admin/hello') && preg_match('#^/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'scrum_swiftair_homepage')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\DefaultController::indexAction',));
        }

        // scrum_swiftair_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'scrum_swiftair_index');
            }

            return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\IndexController::indexAction',  '_route' => 'scrum_swiftair_index',);
        }

        if (0 === strpos($pathinfo, '/bestellingen')) {
            // bestellingen
            if (rtrim($pathinfo, '/') === '/bestellingen') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bestellingen;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bestellingen');
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\BestellingenController::indexAction',  '_route' => 'bestellingen',);
            }
            not_bestellingen:

            // bestellingen_create
            if ($pathinfo === '/bestellingen/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bestellingen_create;
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\BestellingenController::createAction',  '_route' => 'bestellingen_create',);
            }
            not_bestellingen_create:

            // bestellingen_new
            if ($pathinfo === '/bestellingen/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bestellingen_new;
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\BestellingenController::newAction',  '_route' => 'bestellingen_new',);
            }
            not_bestellingen_new:

            // bestellingen_show
            if (preg_match('#^/bestellingen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bestellingen_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bestellingen_show')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\BestellingenController::showAction',));
            }
            not_bestellingen_show:

            // bestellingen_edit
            if (preg_match('#^/bestellingen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bestellingen_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bestellingen_edit')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\BestellingenController::editAction',));
            }
            not_bestellingen_edit:

            // bestellingen_update
            if (preg_match('#^/bestellingen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_bestellingen_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bestellingen_update')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\BestellingenController::updateAction',));
            }
            not_bestellingen_update:

            // bestellingen_delete
            if (preg_match('#^/bestellingen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_bestellingen_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bestellingen_delete')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\BestellingenController::deleteAction',));
            }
            not_bestellingen_delete:

        }

        if (0 === strpos($pathinfo, '/capaciteiten')) {
            // capaciteiten
            if (rtrim($pathinfo, '/') === '/capaciteiten') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_capaciteiten;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'capaciteiten');
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\CapaciteitenController::indexAction',  '_route' => 'capaciteiten',);
            }
            not_capaciteiten:

            // capaciteiten_create
            if ($pathinfo === '/capaciteiten/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_capaciteiten_create;
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\CapaciteitenController::createAction',  '_route' => 'capaciteiten_create',);
            }
            not_capaciteiten_create:

            // capaciteiten_new
            if ($pathinfo === '/capaciteiten/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_capaciteiten_new;
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\CapaciteitenController::newAction',  '_route' => 'capaciteiten_new',);
            }
            not_capaciteiten_new:

            // capaciteiten_show
            if (preg_match('#^/capaciteiten/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_capaciteiten_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'capaciteiten_show')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\CapaciteitenController::showAction',));
            }
            not_capaciteiten_show:

            // capaciteiten_edit
            if (preg_match('#^/capaciteiten/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_capaciteiten_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'capaciteiten_edit')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\CapaciteitenController::editAction',));
            }
            not_capaciteiten_edit:

            // capaciteiten_update
            if (preg_match('#^/capaciteiten/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_capaciteiten_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'capaciteiten_update')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\CapaciteitenController::updateAction',));
            }
            not_capaciteiten_update:

            // capaciteiten_delete
            if (preg_match('#^/capaciteiten/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_capaciteiten_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'capaciteiten_delete')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\CapaciteitenController::deleteAction',));
            }
            not_capaciteiten_delete:

        }

        if (0 === strpos($pathinfo, '/kla')) {
            if (0 === strpos($pathinfo, '/klanten')) {
                // klanten
                if (rtrim($pathinfo, '/') === '/klanten') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_klanten;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'klanten');
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlantenController::indexAction',  '_route' => 'klanten',);
                }
                not_klanten:

                // klanten_create
                if ($pathinfo === '/klanten/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_klanten_create;
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlantenController::createAction',  '_route' => 'klanten_create',);
                }
                not_klanten_create:

                // klanten_new
                if ($pathinfo === '/klanten/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_klanten_new;
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlantenController::newAction',  '_route' => 'klanten_new',);
                }
                not_klanten_new:

                // klanten_show
                if (preg_match('#^/klanten/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_klanten_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'klanten_show')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlantenController::showAction',));
                }
                not_klanten_show:

                // klanten_edit
                if (preg_match('#^/klanten/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_klanten_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'klanten_edit')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlantenController::editAction',));
                }
                not_klanten_edit:

                // klanten_update
                if (preg_match('#^/klanten/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_klanten_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'klanten_update')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlantenController::updateAction',));
                }
                not_klanten_update:

                // klanten_delete
                if (preg_match('#^/klanten/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_klanten_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'klanten_delete')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlantenController::deleteAction',));
                }
                not_klanten_delete:

            }

            if (0 === strpos($pathinfo, '/klasses')) {
                // klasses
                if (rtrim($pathinfo, '/') === '/klasses') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_klasses;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'klasses');
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlassesController::indexAction',  '_route' => 'klasses',);
                }
                not_klasses:

                // klasses_create
                if ($pathinfo === '/klasses/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_klasses_create;
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlassesController::createAction',  '_route' => 'klasses_create',);
                }
                not_klasses_create:

                // klasses_new
                if ($pathinfo === '/klasses/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_klasses_new;
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlassesController::newAction',  '_route' => 'klasses_new',);
                }
                not_klasses_new:

                // klasses_show
                if (preg_match('#^/klasses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_klasses_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'klasses_show')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlassesController::showAction',));
                }
                not_klasses_show:

                // klasses_edit
                if (preg_match('#^/klasses/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_klasses_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'klasses_edit')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlassesController::editAction',));
                }
                not_klasses_edit:

                // klasses_update
                if (preg_match('#^/klasses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_klasses_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'klasses_update')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlassesController::updateAction',));
                }
                not_klasses_update:

                // klasses_delete
                if (preg_match('#^/klasses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_klasses_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'klasses_delete')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\KlassesController::deleteAction',));
                }
                not_klasses_delete:

            }

        }

        if (0 === strpos($pathinfo, '/prijzen')) {
            // prijzen
            if (rtrim($pathinfo, '/') === '/prijzen') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_prijzen;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'prijzen');
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\PrijzenController::indexAction',  '_route' => 'prijzen',);
            }
            not_prijzen:

            // prijzen_create
            if ($pathinfo === '/prijzen/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_prijzen_create;
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\PrijzenController::createAction',  '_route' => 'prijzen_create',);
            }
            not_prijzen_create:

            // prijzen_new
            if ($pathinfo === '/prijzen/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_prijzen_new;
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\PrijzenController::newAction',  '_route' => 'prijzen_new',);
            }
            not_prijzen_new:

            // prijzen_show
            if (preg_match('#^/prijzen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_prijzen_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prijzen_show')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\PrijzenController::showAction',));
            }
            not_prijzen_show:

            // prijzen_edit
            if (preg_match('#^/prijzen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_prijzen_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prijzen_edit')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\PrijzenController::editAction',));
            }
            not_prijzen_edit:

            // prijzen_update
            if (preg_match('#^/prijzen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_prijzen_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prijzen_update')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\PrijzenController::updateAction',));
            }
            not_prijzen_update:

            // prijzen_delete
            if (preg_match('#^/prijzen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_prijzen_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prijzen_delete')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\PrijzenController::deleteAction',));
            }
            not_prijzen_delete:

        }

        if (0 === strpos($pathinfo, '/tickets')) {
            // tickets
            if (rtrim($pathinfo, '/') === '/tickets') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tickets;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tickets');
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\TicketsController::indexAction',  '_route' => 'tickets',);
            }
            not_tickets:

            // tickets_create
            if ($pathinfo === '/tickets/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tickets_create;
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\TicketsController::createAction',  '_route' => 'tickets_create',);
            }
            not_tickets_create:

            // tickets_new
            if ($pathinfo === '/tickets/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tickets_new;
                }

                return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\TicketsController::newAction',  '_route' => 'tickets_new',);
            }
            not_tickets_new:

            // tickets_show
            if (preg_match('#^/tickets/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tickets_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tickets_show')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\TicketsController::showAction',));
            }
            not_tickets_show:

            // tickets_edit
            if (preg_match('#^/tickets/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tickets_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tickets_edit')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\TicketsController::editAction',));
            }
            not_tickets_edit:

            // tickets_update
            if (preg_match('#^/tickets/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_tickets_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tickets_update')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\TicketsController::updateAction',));
            }
            not_tickets_update:

            // tickets_delete
            if (preg_match('#^/tickets/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tickets_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tickets_delete')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\TicketsController::deleteAction',));
            }
            not_tickets_delete:

        }

        if (0 === strpos($pathinfo, '/vl')) {
            if (0 === strpos($pathinfo, '/vliegtuigen')) {
                // vliegtuigen
                if (rtrim($pathinfo, '/') === '/vliegtuigen') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vliegtuigen;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vliegtuigen');
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VliegtuigenController::indexAction',  '_route' => 'vliegtuigen',);
                }
                not_vliegtuigen:

                // vliegtuigen_create
                if ($pathinfo === '/vliegtuigen/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_vliegtuigen_create;
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VliegtuigenController::createAction',  '_route' => 'vliegtuigen_create',);
                }
                not_vliegtuigen_create:

                // vliegtuigen_new
                if ($pathinfo === '/vliegtuigen/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vliegtuigen_new;
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VliegtuigenController::newAction',  '_route' => 'vliegtuigen_new',);
                }
                not_vliegtuigen_new:

                // vliegtuigen_show
                if (preg_match('#^/vliegtuigen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vliegtuigen_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vliegtuigen_show')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VliegtuigenController::showAction',));
                }
                not_vliegtuigen_show:

                // vliegtuigen_edit
                if (preg_match('#^/vliegtuigen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vliegtuigen_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vliegtuigen_edit')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VliegtuigenController::editAction',));
                }
                not_vliegtuigen_edit:

                // vliegtuigen_update
                if (preg_match('#^/vliegtuigen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_vliegtuigen_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vliegtuigen_update')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VliegtuigenController::updateAction',));
                }
                not_vliegtuigen_update:

                // vliegtuigen_delete
                if (preg_match('#^/vliegtuigen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_vliegtuigen_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vliegtuigen_delete')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VliegtuigenController::deleteAction',));
                }
                not_vliegtuigen_delete:

            }

            if (0 === strpos($pathinfo, '/vluchten')) {
                // vluchten
                if (rtrim($pathinfo, '/') === '/vluchten') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vluchten;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vluchten');
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VluchtenController::indexAction',  '_route' => 'vluchten',);
                }
                not_vluchten:

                // vluchten_create
                if ($pathinfo === '/vluchten/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_vluchten_create;
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VluchtenController::createAction',  '_route' => 'vluchten_create',);
                }
                not_vluchten_create:

                // vluchten_new
                if ($pathinfo === '/vluchten/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vluchten_new;
                    }

                    return array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VluchtenController::newAction',  '_route' => 'vluchten_new',);
                }
                not_vluchten_new:

                // vluchten_show
                if (preg_match('#^/vluchten/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vluchten_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vluchten_show')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VluchtenController::showAction',));
                }
                not_vluchten_show:

                // vluchten_edit
                if (preg_match('#^/vluchten/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_vluchten_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vluchten_edit')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VluchtenController::editAction',));
                }
                not_vluchten_edit:

                // vluchten_update
                if (preg_match('#^/vluchten/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_vluchten_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vluchten_update')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VluchtenController::updateAction',));
                }
                not_vluchten_update:

                // vluchten_delete
                if (preg_match('#^/vluchten/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_vluchten_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vluchten_delete')), array (  '_controller' => 'SCRUM\\SwiftairBundle\\Controller\\VluchtenController::deleteAction',));
                }
                not_vluchten_delete:

            }

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
