<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the public 'swiftmailer.service' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\SwiftMailer\SwiftMailer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['swiftmailer.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\SwiftMailer\SwiftMailer($container);
    }
}
