<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'transport_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/transport/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transport_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/transport/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transport_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/transport',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transport_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/transport',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transport_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/transport',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'conducteur_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/conducteur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'conducteur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/conducteur/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'conducteur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/conducteur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'conducteur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/conducteur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'conducteur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ConducteurController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/conducteur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'camion_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/camion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'camion_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/camion/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'camion_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/camion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'camion_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/camion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'camion_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\CamionController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/camion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\ClientController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'travel_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'transport_suppression' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Travel\\TravelBundle\\Controller\\TransportController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
