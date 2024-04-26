<?php

namespace ContainerBfBLApq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_DebugFirewallService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.command.debug_firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle/Command/DebugFirewallCommand.php';

        $a = ($container->privates['App\\Security\\DOMJudgeIPAuthenticator'] ?? $container->load('getDOMJudgeIPAuthenticatorService'));
        $b = ($container->privates['App\\Security\\DOMJudgeBasicAuthenticator'] ?? $container->load('getDOMJudgeBasicAuthenticatorService'));

        $container->privates['security.command.debug_firewall'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\DebugFirewallCommand($container->parameters['security.firewalls'], ($container->privates['.service_locator.LlG0ewc'] ?? $container->get_ServiceLocator_LlG0ewcService()), ($container->privates['.service_locator.8milwyw'] ?? $container->load('get_ServiceLocator_8milwywService')), ['api' => [0 => $a, 1 => $b], 'metrics' => [0 => $a, 1 => $b], 'main' => [0 => ($container->privates['App\\Security\\DOMJudgeXHeadersAuthenticator'] ?? $container->load('getDOMJudgeXHeadersAuthenticatorService')), 1 => $a, 2 => ($container->privates['security.authenticator.form_login.main'] ?? $container->load('getSecurity_Authenticator_FormLogin_MainService'))]], true);

        $instance->setName('debug:firewall');
        $instance->setDescription('Display information about your security firewall(s)');

        return $instance;
    }
}
