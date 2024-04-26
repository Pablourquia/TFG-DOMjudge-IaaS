<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExternalSourceWarningsFilterTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\ExternalSourceWarningsFilterType' shared autowired service.
     *
     * @return \App\Form\Type\ExternalSourceWarningsFilterType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/ExternalSourceWarningsFilterType.php';

        $a = ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService'));

        if (isset($container->privates['App\\Form\\Type\\ExternalSourceWarningsFilterType'])) {
            return $container->privates['App\\Form\\Type\\ExternalSourceWarningsFilterType'];
        }

        return $container->privates['App\\Form\\Type\\ExternalSourceWarningsFilterType'] = new \App\Form\Type\ExternalSourceWarningsFilterType($a);
    }
}
