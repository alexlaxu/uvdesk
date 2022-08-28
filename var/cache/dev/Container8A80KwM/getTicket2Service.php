<?php

namespace Container8A80KwM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTicket2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\SupportCenterBundle\Controller\Ticket' shared autowired service.
     *
     * @return \Webkul\UVDesk\SupportCenterBundle\Controller\Ticket
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Ticket.php';

        $container->services['Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket'] = $instance = new \Webkul\UVDesk\SupportCenterBundle\Controller\Ticket(($container->services['user.service'] ?? $container->getUser_ServiceService()), ($container->services['uvdesk.service'] ?? $container->getUvdesk_ServiceService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['ticket.service'] ?? $container->getTicket_ServiceService()), ($container->services['custom.field.service'] ?? $container->getCustom_Field_ServiceService()), ($container->services['recaptcha.service'] ?? $container->getRecaptcha_ServiceService()), ($container->services['kernel'] ?? $container->get('kernel', 1)));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket', $container));

        return $instance;
    }
}
