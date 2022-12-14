<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Webkul\UVDesk\CoreFrameworkBundle\Controller\Group' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Controller\Group
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group'] = $instance = new \Webkul\UVDesk\CoreFrameworkBundle\Controller\Group(($container->services['user.service'] ?? $container->load('getUser_ServiceService')), ($container->services['translator'] ?? $container->load('getTranslatorService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group', $container));

        return $instance;
    }
}
