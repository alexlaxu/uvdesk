<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L2hbC8xService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.l2hbC8x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l2hbC8x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'applicationCollection' => ['privates', 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection', 'getApplicationCollectionService', true],
            'event' => ['privates', 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Application\\Routine\\ApiRoutine', 'getApiRoutineService', true],
        ], [
            'applicationCollection' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\ApplicationCollection',
            'event' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Application\\Routine\\ApiRoutine',
        ]);
    }
}
