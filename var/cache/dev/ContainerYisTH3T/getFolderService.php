<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFolderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\SupportCenterBundle\Controller\Folder' shared autowired service.
     *
     * @return \Webkul\UVDesk\SupportCenterBundle\Controller\Folder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Folder.php';

        $container->services['Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder'] = $instance = new \Webkul\UVDesk\SupportCenterBundle\Controller\Folder(($container->services['user.service'] ?? $container->getUser_ServiceService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['uvdesk.core.file_system.service'] ?? $container->getUvdesk_Core_FileSystem_ServiceService()), ($container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\Services\\FileUploadService'] ?? $container->getFileUploadServiceService()));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder', $container));

        return $instance;
    }
}
