<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTimeStringValidatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Validator\Constraints\TimeStringValidator' shared autowired service.
     *
     * @return \App\Validator\Constraints\TimeStringValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Validator/Constraints/TimeStringValidator.php';

        return $container->privates['App\\Validator\\Constraints\\TimeStringValidator'] = new \App\Validator\Constraints\TimeStringValidator();
    }
}
