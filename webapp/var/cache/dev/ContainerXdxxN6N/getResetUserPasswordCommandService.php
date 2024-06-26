<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetUserPasswordCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.App\Command\ResetUserPasswordCommand' shared autowired service.
     *
     * @return \App\Command\ResetUserPasswordCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/ResetUserPasswordCommand.php';

        return $container->services['console.command.public_alias.App\\Command\\ResetUserPasswordCommand'] = new \App\Command\ResetUserPasswordCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));
    }
}
