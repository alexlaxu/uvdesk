<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Webkul\UVDesk\ExtensionFrameworkBundle\Controller\Dashboard' shared autowired service.
     *
     * @return \Webkul\UVDesk\ExtensionFrameworkBundle\Controller\Dashboard
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard'] = $instance = new \Webkul\UVDesk\ExtensionFrameworkBundle\Controller\Dashboard();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard', $container));

        return $instance;
    }
}