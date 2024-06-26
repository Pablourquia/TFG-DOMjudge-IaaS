<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHashPasswordSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Doctrine\HashPasswordSubscriber' shared autowired service.
     *
     * @return \App\Doctrine\HashPasswordSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/src/Doctrine/HashPasswordSubscriber.php';

        return $container->privates['App\\Doctrine\\HashPasswordSubscriber'] = new \App\Doctrine\HashPasswordSubscriber(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));
    }
}
