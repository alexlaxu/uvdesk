<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustom_Field_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the public 'custom.field.service' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Services\CustomFieldsService
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['user.service'] ?? $container->load('getUser_ServiceService'));

        if (isset($container->services['custom.field.service'])) {
            return $container->services['custom.field.service'];
        }

        return $container->services['custom.field.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\Services\CustomFieldsService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), $container, ($container->services['validation.service'] ?? $container->load('getValidation_ServiceService')), ($container->services['translator'] ?? $container->load('getTranslatorService')), $a);
    }
}
