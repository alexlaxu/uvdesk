<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailboxChannelService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\MailboxBundle\Controller\MailboxChannel' shared autowired service.
     *
     * @return \Webkul\UVDesk\MailboxBundle\Controller\MailboxChannel
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/mailbox-component/Controller/MailboxChannel.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/SwiftMailer/SwiftMailer.php';

        $container->services['Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel'] = $instance = new \Webkul\UVDesk\MailboxBundle\Controller\MailboxChannel(($container->services['user.service'] ?? $container->load('getUser_ServiceService')), ($container->privates['Webkul\\UVDesk\\MailboxBundle\\Services\\MailboxService'] ?? $container->load('getMailboxServiceService')), ($container->services['translator'] ?? $container->load('getTranslatorService')), ($container->services['swiftmailer.service'] ?? ($container->services['swiftmailer.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\SwiftMailer\SwiftMailer($container))));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel', $container));

        return $instance;
    }
}
