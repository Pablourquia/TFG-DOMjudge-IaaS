<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UO8bUeWService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.UO8bUeW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UO8bUeW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'externalJudgement' => ['privates', '.errored..service_locator.UO8bUeW.App\\Entity\\ExternalJudgement', NULL, 'Cannot autowire service ".service_locator.UO8bUeW": it references class "App\\Entity\\ExternalJudgement" but no such service exists.'],
        ], [
            'externalJudgement' => 'App\\Entity\\ExternalJudgement',
        ]);
    }
}
