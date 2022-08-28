<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeamService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Webkul\UVDesk\CoreFrameworkBundle\Controller\Team' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Controller\Team
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team'] = $instance = new \Webkul\UVDesk\CoreFrameworkBundle\Controller\Team(($container->services['user.service'] ?? $container->load('getUser_ServiceService')), ($container->services['translator'] ?? $container->load('getTranslatorService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team', $container));

        return $instance;
    }
}
