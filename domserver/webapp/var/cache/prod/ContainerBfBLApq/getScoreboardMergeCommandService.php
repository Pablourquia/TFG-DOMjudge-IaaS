<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScoreboardMergeCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.App\Command\ScoreboardMergeCommand' shared autowired service.
     *
     * @return \App\Command\ScoreboardMergeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/ScoreboardMergeCommand.php';

        return $container->services['console.command.public_alias.App\\Command\\ScoreboardMergeCommand'] = new \App\Command\ScoreboardMergeCommand(($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), ($container->privates['.sentry.traceable.http_client'] ?? $container->load('get_Sentry_Traceable_HttpClientService')), ($container->privates['App\\Service\\ScoreboardService'] ?? $container->load('getScoreboardServiceService')), ($container->services['router'] ?? $container->getRouterService()), \dirname(__DIR__, 4));
    }
}