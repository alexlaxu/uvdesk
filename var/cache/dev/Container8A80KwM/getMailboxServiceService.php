<?php

namespace Container8A80KwM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailboxServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Webkul\UVDesk\MailboxBundle\Services\MailboxService' shared autowired service.
     *
     * @return \Webkul\UVDesk\MailboxBundle\Services\MailboxService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/mailbox-component/Services/MailboxService.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/SwiftMailer/SwiftMailer.php';

        return $container->privates['Webkul\\UVDesk\\MailboxBundle\\Services\\MailboxService'] = new \Webkul\UVDesk\MailboxBundle\Services\MailboxService($container, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['swiftmailer.service'] ?? ($container->services['swiftmailer.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\SwiftMailer\SwiftMailer($container))));
    }
}
