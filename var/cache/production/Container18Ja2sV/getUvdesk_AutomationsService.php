<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUvdesk_AutomationsService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the public 'uvdesk.automations' shared autowired service.
     *
     * @return \Webkul\UVDesk\AutomationBundle\Services\AutomationService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/Services/AutomationService.php';

        return $container->services['uvdesk.automations'] = new \Webkul\UVDesk\AutomationBundle\Services\AutomationService($container, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->services['translator'] ?? $container->load('getTranslatorService')));
    }
}