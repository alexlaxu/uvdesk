<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiRoutineService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Webkul\UVDesk\ExtensionFrameworkBundle\Application\Routine\ApiRoutine' shared autowired service.
     *
     * @return \Webkul\UVDesk\ExtensionFrameworkBundle\Application\Routine\ApiRoutine
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Webkul\\UVDesk\\ExtensionFrameworkBundle\\Application\\Routine\\ApiRoutine'] = new \Webkul\UVDesk\ExtensionFrameworkBundle\Application\Routine\ApiRoutine(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
