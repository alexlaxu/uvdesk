<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUvdesk_AutomationsService extends App_KernelProdContainer
{
    /*
     * Gets the public 'uvdesk.automations' shared autowired service.
     *
     * @return \Webkul\UVDesk\AutomationBundle\Services\AutomationService
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['uvdesk.automations'] = new \Webkul\UVDesk\AutomationBundle\Services\AutomationService($container, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['translator'] ?? $container->load('getTranslatorService')));
    }
}
