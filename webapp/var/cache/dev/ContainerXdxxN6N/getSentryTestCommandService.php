<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSentryTestCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Sentry\SentryBundle\Command\SentryTestCommand' shared service.
     *
     * @return \Sentry\SentryBundle\Command\SentryTestCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/sentry/sentry-symfony/src/Command/SentryTestCommand.php';

        $container->privates['Sentry\\SentryBundle\\Command\\SentryTestCommand'] = $instance = new \Sentry\SentryBundle\Command\SentryTestCommand();

        $instance->setName('sentry:test');

        return $instance;
    }
}
