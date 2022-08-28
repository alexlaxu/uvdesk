<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_EventDispatcher_BackSupportService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.event_dispatcher.back_support' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['security.event_dispatcher.back_support'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.default.back_support'] ?? $container->load('getSecurity_Logout_Listener_Default_BackSupportService'));
        }, 1 => 'onLogout'], 64);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.session.back_support'] ?? ($container->privates['security.logout.listener.session.back_support'] = new \Symfony\Component\Security\Http\EventListener\SessionLogoutListener()));
        }, 1 => 'onLogout'], 0);
        $instance->addListener('Symfony\\Component\\Security\\Http\\Event\\LogoutEvent', [0 => function () use ($container) {
            return ($container->privates['security.logout.listener.csrf_token_clearing'] ?? $container->load('getSecurity_Logout_Listener_CsrfTokenClearingService'));
        }, 1 => 'onLogout'], 0);

        return $instance;
    }
}
