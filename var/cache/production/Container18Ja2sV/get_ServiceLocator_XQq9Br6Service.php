<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XQq9Br6Service extends App_KernelProductionDebugContainer
{
    /**
     * Gets the private '.service_locator.xQq9Br6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xQq9Br6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Framework\\EventDispatcher' => ['services', 'uvdesk.core.event_dispatcher', 'getUvdesk_Core_EventDispatcherService', true],
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'security.event_dispatcher.back_support' => ['privates', 'security.event_dispatcher.back_support', 'getSecurity_EventDispatcher_BackSupportService', true],
            'security.event_dispatcher.customer' => ['privates', 'security.event_dispatcher.customer', 'getSecurity_EventDispatcher_CustomerService', true],
        ], [
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Framework\\EventDispatcher' => '?',
            'event_dispatcher' => '?',
            'security.event_dispatcher.back_support' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
            'security.event_dispatcher.customer' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]);
    }
}
