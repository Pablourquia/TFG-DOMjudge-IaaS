<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClarificationController3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Team\ClarificationController' shared autowired service.
     *
     * @return \App\Controller\Team\ClarificationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Team/ClarificationController.php';

        $container->services['App\\Controller\\Team\\ClarificationController'] = $instance = new \App\Controller\Team\ClarificationController(($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->getEventLogServiceService()), ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));

        $instance->setContainer(($container->privates['.service_locator.9hK1Zku'] ?? $container->load('get_ServiceLocator_9hK1ZkuService'))->withContext('App\\Controller\\Team\\ClarificationController', $container));

        return $instance;
    }
}
