<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApplicationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\ExtensionFrameworkBundle\Controller\Application' shared autowired service.
     *
     * @return \Webkul\UVDesk\ExtensionFrameworkBundle\Controller\Application
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/extension-framework/Controller/Application.php';

        $container->services['Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application'] = $instance = new \Webkul\UVDesk\ExtensionFrameworkBundle\Controller\Application();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application', $container));

        return $instance;
    }
}
