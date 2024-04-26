<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportExportControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Jury\ImportExportController' shared autowired service.
     *
     * @return \App\Controller\Jury\ImportExportController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Jury/ImportExportController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ICPCCmsService.php';

        $a = ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService());
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        $container->services['App\\Controller\\Jury\\ImportExportController'] = $instance = new \App\Controller\Jury\ImportExportController(new \App\Service\ICPCCmsService($a, $b, '8.2.3'), ($container->privates['App\\Service\\ImportExportService'] ?? $container->load('getImportExportServiceService')), $b, ($container->privates['App\\Service\\ScoreboardService'] ?? $container->getScoreboardServiceService()), $a, ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->getEventLogServiceService()), ($container->privates['App\\Service\\ImportProblemService'] ?? $container->load('getImportProblemServiceService')), '8.2.3');

        $instance->setContainer(($container->privates['.service_locator.9hK1Zku'] ?? $container->load('get_ServiceLocator_9hK1ZkuService'))->withContext('App\\Controller\\Jury\\ImportExportController', $container));

        return $instance;
    }
}