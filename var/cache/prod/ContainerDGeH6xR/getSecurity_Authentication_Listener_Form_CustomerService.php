<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Form_CustomerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.listener.form.customer' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.listener.form.customer" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.listener.form.customer" service is deprecated, use the new authenticator system instead.');

        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $b = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, []);
        $b->setOptions(['use_referer' => true, 'login_path' => 'helpdesk_customer_login', 'default_target_path' => 'helpdesk_customer_ticket_collection', 'always_use_default_target_path' => true, 'target_path_parameter' => '_target_path']);
        $b->setFirewallName('customer');
        $c = ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService'));

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $a, [], $c);
        $d->setOptions(['login_path' => 'helpdesk_customer_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authentication.listener.form.customer'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService')), ($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), $a, 'customer', $b, $d, ['login_path' => 'helpdesk_customer_login', 'check_path' => 'helpdesk_customer_login', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'enable_csrf' => false, 'post_only' => true, 'form_only' => false], $c, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), NULL);
    }
}
