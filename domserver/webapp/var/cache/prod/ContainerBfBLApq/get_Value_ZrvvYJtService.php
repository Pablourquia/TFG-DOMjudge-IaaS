<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Value_ZrvvYJtService extends App_KernelProdContainer
{
    /*
     * Gets the private '.value.zrvvYJt' shared service.
     *
     * @return \mixed
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.value.zrvvYJt'] = \current([0 => \dirname(__DIR__, 4)]);
    }
}