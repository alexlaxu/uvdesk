<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUser_ProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'user.provider' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Providers\UserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Providers/UserProvider.php';

        return $container->services['user.provider'] = new \Webkul\UVDesk\CoreFrameworkBundle\Providers\UserProvider(($container->privates['security.firewall.map'] ?? $container->getSecurity_Firewall_MapService()), $container, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['recaptcha.service'] ?? $container->getRecaptcha_ServiceService()));
    }
}
