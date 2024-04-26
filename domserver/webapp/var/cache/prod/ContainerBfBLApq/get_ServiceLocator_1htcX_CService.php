<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1htcX_CService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.1htcX.C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1htcX.C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contest' => ['privates', '.errored..service_locator.1htcX.C.App\\Entity\\Contest', NULL, 'Cannot autowire service ".service_locator.1htcX.C": it references class "App\\Entity\\Contest" but no such service exists.'],
            'run' => ['privates', '.errored..service_locator.1htcX.C.App\\Entity\\JudgingRun', NULL, 'Cannot autowire service ".service_locator.1htcX.C": it references class "App\\Entity\\JudgingRun" but no such service exists.'],
            'submission' => ['privates', '.errored..service_locator.1htcX.C.App\\Entity\\Submission', NULL, 'Cannot autowire service ".service_locator.1htcX.C": it references class "App\\Entity\\Submission" but no such service exists.'],
        ], [
            'contest' => 'App\\Entity\\Contest',
            'run' => 'App\\Entity\\JudgingRun',
            'submission' => 'App\\Entity\\Submission',
        ]);
    }
}
