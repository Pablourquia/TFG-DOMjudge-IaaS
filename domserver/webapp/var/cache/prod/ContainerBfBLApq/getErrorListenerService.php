<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getErrorListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Sentry\SentryBundle\EventListener\ErrorListener' shared service.
     *
     * @return \Sentry\SentryBundle\EventListener\ErrorListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/sentry/sentry-symfony/src/EventListener/ErrorListener.php';

        return $container->privates['Sentry\\SentryBundle\\EventListener\\ErrorListener'] = new \Sentry\SentryBundle\EventListener\ErrorListener(($container->privates['Sentry\\State\\HubInterface'] ?? $container->getHubInterfaceService()));
    }
}
