<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_RenderDocsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'nelmio_api_doc.render_docs' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Render\RenderOpenApi
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle/Render/RenderOpenApi.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle/Render/OpenApiRenderer.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle/Render/Json/JsonOpenApiRenderer.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle/Render/Yaml/YamlOpenApiRenderer.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle/Render/Html/HtmlOpenApiRenderer.php';

        return $container->services['nelmio_api_doc.render_docs'] = new \Nelmio\ApiDocBundle\Render\RenderOpenApi(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'default' => ['services', 'nelmio_api_doc.generator.default', 'getNelmioApiDoc_Generator_DefaultService', true],
        ], [
            'default' => '?',
        ]), new \Nelmio\ApiDocBundle\Render\Json\JsonOpenApiRenderer(), new \Nelmio\ApiDocBundle\Render\Yaml\YamlOpenApiRenderer(), new \Nelmio\ApiDocBundle\Render\Html\HtmlOpenApiRenderer(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService())));
    }
}
