<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrintTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\PrintType' shared autowired service.
     *
     * @return \App\Form\Type\PrintType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/PrintType.php';

        return $container->privates['App\\Form\\Type\\PrintType'] = new \App\Form\Type\PrintType(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}