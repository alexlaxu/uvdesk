<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigureHelpdeskService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ConfigureHelpdesk' shared autowired service.
     *
     * @return \App\Controller\ConfigureHelpdesk
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ConfigureHelpdesk'] = $instance = new \App\Controller\ConfigureHelpdesk();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\ConfigureHelpdesk', $container));

        return $instance;
    }
}
