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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/transport')) {
            // transport_index
            if ('/transport' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_transport_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'transport_index');
                }

                return array (  '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::indexAction',  '_route' => 'transport_index',);
            }
            not_transport_index:

            // transport_new
            if ('/transport/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_transport_new;
                }

                return array (  '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::newAction',  '_route' => 'transport_new',);
            }
            not_transport_new:

            // transport_show
            if (preg_match('#^/transport/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_transport_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transport_show')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::showAction',));
            }
            not_transport_show:

            // transport_edit
            if (preg_match('#^/transport/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_transport_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transport_edit')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::editAction',));
            }
            not_transport_edit:

            // transport_delete
            if (preg_match('#^/transport/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_transport_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transport_delete')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::deleteAction',));
            }
            not_transport_delete:

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/conducteur')) {
                // conducteur_index
                if ('/conducteur' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_conducteur_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'conducteur_index');
                    }

                    return array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::indexAction',  '_route' => 'conducteur_index',);
                }
                not_conducteur_index:

                // conducteur_new
                if ('/conducteur/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_conducteur_new;
                    }

                    return array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::newAction',  '_route' => 'conducteur_new',);
                }
                not_conducteur_new:

                // conducteur_show
                if (preg_match('#^/conducteur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_conducteur_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conducteur_show')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::showAction',));
                }
                not_conducteur_show:

                // conducteur_edit
                if (preg_match('#^/conducteur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_conducteur_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conducteur_edit')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::editAction',));
                }
                not_conducteur_edit:

                // conducteur_delete
                if (preg_match('#^/conducteur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_conducteur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'conducteur_delete')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::deleteAction',));
                }
                not_conducteur_delete:

            }

            elseif (0 === strpos($pathinfo, '/camion')) {
                // camion_index
                if ('/camion' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_camion_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'camion_index');
                    }

                    return array (  '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::indexAction',  '_route' => 'camion_index',);
                }
                not_camion_index:

                // camion_new
                if ('/camion/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_camion_new;
                    }

                    return array (  '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::newAction',  '_route' => 'camion_new',);
                }
                not_camion_new:

                // camion_show
                if (preg_match('#^/camion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_camion_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'camion_show')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::showAction',));
                }
                not_camion_show:

                // camion_edit
                if (preg_match('#^/camion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_camion_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'camion_edit')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::editAction',));
                }
                not_camion_edit:

                // camion_delete
                if (preg_match('#^/camion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_camion_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'camion_delete')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::deleteAction',));
                }
                not_camion_delete:

            }

            elseif (0 === strpos($pathinfo, '/client')) {
                // client_index
                if ('/client' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_client_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'client_index');
                    }

                    return array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::indexAction',  '_route' => 'client_index',);
                }
                not_client_index:

                // client_new
                if ('/client/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_client_new;
                    }

                    return array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
                }
                not_client_new:

                // client_show
                if (preg_match('#^/client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_client_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::showAction',));
                }
                not_client_show:

                // client_edit
                if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_client_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::editAction',));
                }
                not_client_edit:

                // client_delete
                if (preg_match('#^/client/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::deleteAction',));
                }
                not_client_delete:

            }

        }

        // travel_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'travel_homepage');
            }

            return array (  '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::indexAction',  '_route' => 'travel_homepage',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
