<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJudgehostController2Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Jury\JudgehostController' shared autowired service.
     *
     * @return \App\Controller\Jury\JudgehostController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Jury/JudgehostController.php';

        $container->services['App\\Controller\\Jury\\JudgehostController'] = $instance = new \App\Controller\Jury\JudgehostController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')), ($container->services['kernel'] ?? $container->get('kernel', 1)));

        $instance->setContainer(($container->privates['.service_locator.MbiTQcK'] ?? $container->load('get_ServiceLocator_MbiTQcKService'))->withContext('App\\Controller\\Jury\\JudgehostController', $container));

        return $instance;
    }
}
