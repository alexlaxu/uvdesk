<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocalhostService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\CoreFrameworkBundle\FileSystem\UploadManagers\Localhost' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\FileSystem\UploadManagers\Localhost
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Webkul\\UVDesk\\CoreFrameworkBundle\\FileSystem\\UploadManagers\\Localhost'] = new \Webkul\UVDesk\CoreFrameworkBundle\FileSystem\UploadManagers\Localhost($container, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
