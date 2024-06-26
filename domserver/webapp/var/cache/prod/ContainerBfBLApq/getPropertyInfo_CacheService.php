<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyInfo_CacheService extends App_KernelProdContainer
{
    /*
     * Gets the private 'property_info.cache' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyListExtractorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyInfoCacheExtractor.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyInfoExtractor.php';

        return $container->privates['property_info.cache'] = new \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor(new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 1 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
        }, 2), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
            yield 1 => ($container->privates['property_info.phpstan_extractor'] ?? ($container->privates['property_info.phpstan_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor()));
            yield 2 => ($container->privates['property_info.php_doc_extractor'] ?? ($container->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 3 => ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 4), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.php_doc_extractor'] ?? ($container->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
            yield 1 => ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1)), ($container->privates['cache.property_info.traceable'] ?? $container->load('getCache_PropertyInfo_TraceableService')));
    }
}
