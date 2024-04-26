<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScoreboardController3Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Team\ScoreboardController' shared autowired service.
     *
     * @return \App\Controller\Team\ScoreboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Team/ScoreboardController.php';

        $container->services['App\\Controller\\Team\\ScoreboardController'] = $instance = new \App\Controller\Team\ScoreboardController(($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->privates['App\\Service\\ScoreboardService'] ?? $container->load('getScoreboardServiceService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.MbiTQcK'] ?? $container->load('get_ServiceLocator_MbiTQcKService'))->withContext('App\\Controller\\Team\\ScoreboardController', $container));

        return $instance;
    }
}
