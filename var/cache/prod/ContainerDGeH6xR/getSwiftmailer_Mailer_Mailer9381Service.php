<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_Mailer_Mailer9381Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'swiftmailer.mailer.mailer_9381' shared service.
     *
     * @return \Swift_Mailer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['swiftmailer.mailer.mailer_9381'] = new \Swift_Mailer(($container->services['swiftmailer.mailer.mailer_9381.transport'] ?? $container->load('getSwiftmailer_Mailer_Mailer9381_TransportService')));
    }
}
