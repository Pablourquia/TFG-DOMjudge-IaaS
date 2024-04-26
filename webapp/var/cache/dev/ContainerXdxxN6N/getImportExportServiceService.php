<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportExportServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\ImportExportService' shared autowired service.
     *
     * @return \App\Service\ImportExportService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/ImportExportService.php';

        $a = ($container->privates['App\\Service\\ScoreboardService'] ?? $container->getScoreboardServiceService());

        if (isset($container->privates['App\\Service\\ImportExportService'])) {
            return $container->privates['App\\Service\\ImportExportService'];
        }
        $b = ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService());

        if (isset($container->privates['App\\Service\\ImportExportService'])) {
            return $container->privates['App\\Service\\ImportExportService'];
        }
        $c = ($container->privates['App\\Service\\EventLogService'] ?? $container->getEventLogServiceService());

        if (isset($container->privates['App\\Service\\ImportExportService'])) {
            return $container->privates['App\\Service\\ImportExportService'];
        }

        return $container->privates['App\\Service\\ImportExportService'] = new \App\Service\ImportExportService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), $a, $b, ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), $c, ($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()));
    }
}