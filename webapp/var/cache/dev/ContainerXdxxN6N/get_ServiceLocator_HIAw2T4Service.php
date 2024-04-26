<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HIAw2T4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hIAw2T4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hIAw2T4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'balloonService' => ['privates', 'App\\Service\\BalloonService', 'getBalloonServiceService', true],
            'eventLogService' => ['privates', 'App\\Service\\EventLogService', 'getEventLogServiceService', false],
            'scoreboardService' => ['privates', 'App\\Service\\ScoreboardService', 'getScoreboardServiceService', false],
        ], [
            'balloonService' => 'App\\Service\\BalloonService',
            'eventLogService' => 'App\\Service\\EventLogService',
            'scoreboardService' => 'App\\Service\\ScoreboardService',
        ]);
    }
}
