<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTicket_ServiceService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the public 'ticket.service' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Services\TicketService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Services/TicketService.php';

        $a = ($container->services['custom.field.service'] ?? $container->load('getCustom_Field_ServiceService'));

        if (isset($container->services['ticket.service'])) {
            return $container->services['ticket.service'];
        }
        $b = ($container->services['user.service'] ?? $container->load('getUser_ServiceService'));

        if (isset($container->services['ticket.service'])) {
            return $container->services['ticket.service'];
        }

        return $container->services['ticket.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\Services\TicketService($container, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\Services\\FileUploadService'] ?? $container->load('getFileUploadServiceService')), $a, $b);
    }
}
