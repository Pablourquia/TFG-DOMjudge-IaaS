<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_61a254LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.61a254L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.61a254L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authorizationChecker' => ['services', '.container.private.security.authorization_checker', 'get_Container_Private_Security_AuthorizationCheckerService', false],
        ], [
            'authorizationChecker' => '?',
        ]);
    }
}
