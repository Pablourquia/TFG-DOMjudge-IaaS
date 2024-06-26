<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Form_Extension_CsrfDisableService extends App_KernelProdContainer
{
    /*
     * Gets the private 'fos_rest.form.extension.csrf_disable' shared service.
     *
     * @return \FOS\RestBundle\Form\Extension\DisableCSRFExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Form/Extension/DisableCSRFExtension.php';

        return $container->privates['fos_rest.form.extension.csrf_disable'] = new \FOS\RestBundle\Form\Extension\DisableCSRFExtension(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), 'ROLE_API', ($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService()));
    }
}
