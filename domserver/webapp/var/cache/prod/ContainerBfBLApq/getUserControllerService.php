<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\API\UserController' shared autowired service.
     *
     * @return \App\Controller\API\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Controller/AbstractFOSRestController.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/API/AbstractRestController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/API/UserController.php';

        $container->services['App\\Controller\\API\\UserController'] = $instance = new \App\Controller\API\UserController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')), ($container->privates['App\\Service\\ImportExportService'] ?? $container->load('getImportExportServiceService')));

        $instance->setContainer(($container->privates['.service_locator.yDC6bsl'] ?? $container->load('get_ServiceLocator_YDC6bslService'))->withContext('App\\Controller\\API\\UserController', $container));

        return $instance;
    }
}
