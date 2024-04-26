<?php

namespace ContainerXdxxN6N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosRest_Serializer_FlattenExceptionHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_rest.serializer.flatten_exception_handler' shared autowired service.
     *
     * @return \App\FosRestBundle\FlattenExceptionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Handler/SubscribingHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/FosRestBundle/FlattenExceptionHandler.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Util/ExceptionValueMap.php';

        return $container->services['fos_rest.serializer.flatten_exception_handler'] = new \App\FosRestBundle\FlattenExceptionHandler(new \FOS\RestBundle\Util\ExceptionValueMap(['Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException' => true, 'Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException' => true, 'Symfony\\Component\\HttpKernel\\Exception\\NotAcceptableHttpException' => true, 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException' => true, 'Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException' => true]), true);
    }
}
