<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Generator_DefaultService extends App_KernelProdContainer
{
    /*
     * Gets the public 'nelmio_api_doc.generator.default' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ApiDocGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle/ApiDocGenerator.php';

        $container->services['nelmio_api_doc.generator.default'] = $instance = new \Nelmio\ApiDocBundle\ApiDocGenerator(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['nelmio_api_doc.describers.config'] ?? $container->load('getNelmioApiDoc_Describers_ConfigService'));
            yield 1 => ($container->privates['nelmio_api_doc.describers.config.default'] ?? ($container->privates['nelmio_api_doc.describers.config.default'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber([], true)));
            yield 2 => ($container->privates['nelmio_api_doc.describers.openapi_php.default'] ?? $container->load('getNelmioApiDoc_Describers_OpenapiPhp_DefaultService'));
            yield 3 => ($container->privates['nelmio_api_doc.describers.route.default'] ?? $container->load('getNelmioApiDoc_Describers_Route_DefaultService'));
            yield 4 => ($container->privates['nelmio_api_doc.describers.default'] ?? ($container->privates['nelmio_api_doc.describers.default'] = new \Nelmio\ApiDocBundle\Describer\DefaultDescriber()));
        }, 5), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['nelmio_api_doc.model_describers.self_describing'] ?? ($container->privates['nelmio_api_doc.model_describers.self_describing'] = new \Nelmio\ApiDocBundle\ModelDescriber\SelfDescribingModelDescriber()));
            yield 1 => ($container->privates['nelmio_api_doc.model_describers.enum'] ?? ($container->privates['nelmio_api_doc.model_describers.enum'] = new \Nelmio\ApiDocBundle\ModelDescriber\EnumModelDescriber()));
            yield 2 => ($container->privates['nelmio_api_doc.model_describers.form'] ?? $container->load('getNelmioApiDoc_ModelDescribers_FormService'));
            yield 3 => ($container->privates['nelmio_api_doc.model_describers.jms'] ?? $container->load('getNelmioApiDoc_ModelDescribers_JmsService'));
            yield 4 => ($container->privates['nelmio_api_doc.model_describers.object'] ?? $container->load('getNelmioApiDoc_ModelDescribers_ObjectService'));
            yield 5 => ($container->privates['nelmio_api_doc.model_describers.object_fallback'] ?? ($container->privates['nelmio_api_doc.model_describers.object_fallback'] = new \Nelmio\ApiDocBundle\ModelDescriber\FallbackObjectModelDescriber()));
        }, 6));

        $a = new \Symfony\Bridge\Monolog\Logger('nelmio_api_doc');
        $a->pushProcessor(($container->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($container->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));

        $instance->setAlternativeNames([]);
        $instance->setMediaTypes([0 => 'json']);
        $instance->setLogger($a);

        return $instance;
    }
}
