<?php

namespace Container8A80KwM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LF_Tl_MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LF.tl.m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LF.tl.m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'applications' => ['privates', 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection', 'getApplicationCollectionService', true],
            'container' => ['services', 'service_container', 'getServiceContainerService', true],
        ], [
            'applications' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection',
            'container' => '?',
        ]);
    }
}
