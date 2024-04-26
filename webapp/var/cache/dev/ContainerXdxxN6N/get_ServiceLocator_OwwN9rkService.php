<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OwwN9rkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OwwN9rk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OwwN9rk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventLogService' => ['privates', 'App\\Service\\EventLogService', 'getEventLogServiceService', false],
        ], [
            'eventLogService' => 'App\\Service\\EventLogService',
        ]);
    }
}