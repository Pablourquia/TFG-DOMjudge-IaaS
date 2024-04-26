<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProblemControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\API\ProblemController' shared autowired service.
     *
     * @return \App\Controller\API\ProblemController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Controller/AbstractFOSRestController.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Controller/ControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/API/AbstractRestController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/API/QueryObjectTransformer.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/API/ProblemController.php';

        $container->services['App\\Controller\\API\\ProblemController'] = $instance = new \App\Controller\API\ProblemController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->getEventLogServiceService()), ($container->privates['App\\Service\\ImportProblemService'] ?? $container->load('getImportProblemServiceService')), ($container->privates['App\\Service\\ImportExportService'] ?? $container->load('getImportExportServiceService')));

        $instance->setContainer(($container->privates['.service_locator.7F_Lccs'] ?? $container->load('get_ServiceLocator_7FLccsService'))->withContext('App\\Controller\\API\\ProblemController', $container));

        return $instance;
    }
}
