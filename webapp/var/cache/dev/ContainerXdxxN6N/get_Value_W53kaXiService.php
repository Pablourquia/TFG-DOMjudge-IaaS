<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Value_W53kaXiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.value.w53kaXi' shared service.
     *
     * @return \mixed
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.value.w53kaXi'] = \current([0 => (\dirname(__DIR__, 5).'/lib/vendor')]);
    }
}