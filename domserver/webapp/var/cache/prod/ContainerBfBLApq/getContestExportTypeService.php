<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContestExportTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\ContestExportType' shared autowired service.
     *
     * @return \App\Form\Type\ContestExportType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/ContestExportType.php';

        return $container->privates['App\\Form\\Type\\ContestExportType'] = new \App\Form\Type\ContestExportType();
    }
}
