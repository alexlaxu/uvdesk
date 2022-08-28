<?php

namespace Container8A80KwM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUvdesk_Automations_PreparedResponsesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'uvdesk.automations.prepared_responses' shared autowired service.
     *
     * @return \Webkul\UVDesk\AutomationBundle\EventListener\PreparedResponseListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/EventListener/PreparedResponseListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/PreparedResponse/Action.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Agent/MailAgent.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Agent/TransferTickets.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Customer/MailCustomer.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/AddNote.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/Delete.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/MailAgent.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/MailCustomer.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/MailGroup.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/MailLastCollaborator.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/MailTeam.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/MarkSpam.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/UpdateAgent.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/UpdateGroup.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/UpdatePriority.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/UpdateStatus.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/UpdateTag.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/UpdateTeam.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/PreparedResponse/Actions/Ticket/UpdateType.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        $container->services['uvdesk.automations.prepared_responses'] = $instance = new \Webkul\UVDesk\AutomationBundle\EventListener\PreparedResponseListener($container, $a);

        $b = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Agent\MailAgent($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Agent\TransferTickets($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Customer\MailCustomer($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\AddNote($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\Delete($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\MailAgent($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\MailCustomer($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\MailGroup($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\MailLastCollaborator($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\MailTeam($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\MarkSpam($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\UpdateAgent($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\UpdateGroup($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\UpdatePriority($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\UpdateStatus($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\UpdateTag($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\UpdateTeam($container, $b, $a));
        $instance->registerPreparedResponseAction(new \Webkul\UVDesk\CoreFrameworkBundle\PreparedResponse\Actions\Ticket\UpdateType($container, $b, $a));

        return $instance;
    }
}
