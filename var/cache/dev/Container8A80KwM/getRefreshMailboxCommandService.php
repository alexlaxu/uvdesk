<?php

namespace Container8A80KwM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRefreshMailboxCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Webkul\UVDesk\MailboxBundle\Console\RefreshMailboxCommand' shared autowired service.
     *
     * @return \Webkul\UVDesk\MailboxBundle\Console\RefreshMailboxCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/mailbox-component/Console/RefreshMailboxCommand.php';

        return $container->services['console.command.public_alias.Webkul\\UVDesk\\MailboxBundle\\Console\\RefreshMailboxCommand'] = new \Webkul\UVDesk\MailboxBundle\Console\RefreshMailboxCommand($container, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
