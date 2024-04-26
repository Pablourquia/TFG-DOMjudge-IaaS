<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Metrics_UserProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.metrics.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-http/EventListener/UserProviderListener.php';

        return $container->privates['security.listener.metrics.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(($container->privates['security.user.provider.concrete.domjudge_db_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_DomjudgeDbProviderService')));
    }
}
