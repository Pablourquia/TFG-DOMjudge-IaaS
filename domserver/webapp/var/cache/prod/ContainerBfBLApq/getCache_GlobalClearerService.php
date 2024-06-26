<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_GlobalClearerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $container->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($container->services['cache.app'] ?? $container->load('getCache_AppService')), 'cache.system' => ($container->services['cache.system'] ?? $container->load('getCache_SystemService')), 'cache.validator' => ($container->privates['cache.validator.traceable'] ?? $container->load('getCache_Validator_TraceableService')), 'cache.annotations' => ($container->privates['cache.annotations.traceable'] ?? $container->getCache_Annotations_TraceableService()), 'cache.property_info' => ($container->privates['cache.property_info.traceable'] ?? $container->load('getCache_PropertyInfo_TraceableService')), 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool.traceable'] ?? $container->getDoctrine_ResultCachePool_TraceableService()), 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool.traceable'] ?? $container->getDoctrine_SystemCachePool_TraceableService()), 'cache.property_access' => ($container->privates['cache.property_access.traceable'] ?? $container->load('getCache_PropertyAccess_TraceableService')), 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? $container->load('getCache_ValidatorExpressionLanguageService')), 'cache.security_expression_language' => ($container->privates['cache.security_expression_language.traceable'] ?? $container->load('getCache_SecurityExpressionLanguage_TraceableService'))]);
    }
}
