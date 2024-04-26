<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrometheusCollectorRegistryServiceService extends App_KernelProdContainer
{
    /*
     * Gets the public 'prometheus_collector_registry_service' shared service.
     *
     * @return \Prometheus\CollectorRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/endclothing/prometheus_client_php/src/Prometheus/CollectorRegistry.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/endclothing/prometheus_client_php/src/Prometheus/Storage/Adapter.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/endclothing/prometheus_client_php/src/Prometheus/Storage/InMemory.php';

        return $container->services['prometheus_collector_registry_service'] = new \Prometheus\CollectorRegistry(new \Prometheus\Storage\InMemory());
    }
}
