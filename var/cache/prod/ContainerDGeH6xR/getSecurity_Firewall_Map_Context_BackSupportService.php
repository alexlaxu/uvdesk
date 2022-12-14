<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_BackSupportService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.firewall.map.context.back_support' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        return $container->privates['security.firewall.map.context.back_support'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? $container->load('getSecurity_ContextListener_0Service'));
            yield 2 => ($container->privates['security.authentication.listener.form.back_support'] ?? $container->load('getSecurity_Authentication_Listener_Form_BackSupportService'));
            yield 3 => ($container->privates['security.authentication.listener.anonymous.back_support'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_BackSupportService'));
            yield 4 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $b, 'back_support', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $b, 'helpdesk_member_handle_login', false), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, ($container->privates['security.event_dispatcher.back_support'] ?? $container->load('getSecurity_EventDispatcher_BackSupportService')), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'helpdesk_member_handle_logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('back_support', 'security.user_checker', '.security.request_matcher.jrF4Gab', true, false, 'user.provider', 'back_support', 'security.authentication.form_entry_point.back_support', NULL, NULL, [0 => 'form_login', 1 => 'anonymous'], NULL));
    }
}
