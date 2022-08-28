<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomer2Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'Webkul\UVDesk\SupportCenterBundle\Controller\Customer' shared autowired service.
     *
     * @return \Webkul\UVDesk\SupportCenterBundle\Controller\Customer
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer'] = $instance = new \Webkul\UVDesk\SupportCenterBundle\Controller\Customer(($container->services['translator'] ?? $container->load('getTranslatorService')), ($container->services['.container.private.security.password_encoder'] ?? $container->load('get_Container_Private_Security_PasswordEncoderService')), ($container->services['uvdesk.core.file_system.service'] ?? $container->load('getUvdesk_Core_FileSystem_ServiceService')), ($container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\Services\\FileUploadService'] ?? $container->load('getFileUploadServiceService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer', $container));

        return $instance;
    }
}