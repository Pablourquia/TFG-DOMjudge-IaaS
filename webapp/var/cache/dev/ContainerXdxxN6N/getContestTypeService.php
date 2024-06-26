<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContestTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\ContestType' shared autowired service.
     *
     * @return \App\Form\Type\ContestType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/AbstractExternalIdEntityType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/ContestType.php';

        $a = ($container->privates['App\\Service\\EventLogService'] ?? $container->getEventLogServiceService());

        if (isset($container->privates['App\\Form\\Type\\ContestType'])) {
            return $container->privates['App\\Form\\Type\\ContestType'];
        }
        $b = ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService());

        if (isset($container->privates['App\\Form\\Type\\ContestType'])) {
            return $container->privates['App\\Form\\Type\\ContestType'];
        }

        return $container->privates['App\\Form\\Type\\ContestType'] = new \App\Form\Type\ContestType($a, $b);
    }
}
