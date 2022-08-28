<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftMailerXHRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\CoreFrameworkBundle\Controller\SwiftMailerXHR' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Controller\SwiftMailerXHR
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/SwiftMailerXHR.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/SwiftMailer/SwiftMailer.php';

        $container->services['Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR'] = $instance = new \Webkul\UVDesk\CoreFrameworkBundle\Controller\SwiftMailerXHR(($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['swiftmailer.service'] ?? ($container->services['swiftmailer.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\SwiftMailer\SwiftMailer($container))));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR', $container));

        return $instance;
    }
}
