<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRemovedIntervalTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\RemovedIntervalType' shared autowired service.
     *
     * @return \App\Form\Type\RemovedIntervalType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/RemovedIntervalType.php';

        return $container->privates['App\\Form\\Type\\RemovedIntervalType'] = new \App\Form\Type\RemovedIntervalType();
    }
}
