<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckDatabaseConfigurationDefaultValuesCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.App\Command\CheckDatabaseConfigurationDefaultValuesCommand' shared autowired service.
     *
     * @return \App\Command\CheckDatabaseConfigurationDefaultValuesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/CheckDatabaseConfigurationDefaultValuesCommand.php';

        return $container->services['console.command.public_alias.App\\Command\\CheckDatabaseConfigurationDefaultValuesCommand'] = new \App\Command\CheckDatabaseConfigurationDefaultValuesCommand(($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()));
    }
}
