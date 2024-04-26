<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y8Ozs6EService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.y8Ozs6E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y8Ozs6E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'scoreboardService' => ['privates', 'App\\Service\\ScoreboardService', 'getScoreboardServiceService', true],
            'submissionService' => ['privates', 'App\\Service\\SubmissionService', 'getSubmissionServiceService', true],
        ], [
            'scoreboardService' => 'App\\Service\\ScoreboardService',
            'submissionService' => 'App\\Service\\SubmissionService',
        ]);
    }
}
