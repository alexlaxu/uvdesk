<?php

namespace Container8A80KwM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XVrwApVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xVrwApV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xVrwApV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BaseController::base' => ['privates', '.service_locator.R4L7Yfy', 'get_ServiceLocator_R4L7YfyService', true],
            'App\\Controller\\ConfigureHelpdesk::createDefaultSuperUserXHR' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\ConfigureHelpdesk::evaluateSystemRequirements' => ['privates', '.service_locator.g6H.xPr', 'get_ServiceLocator_G6H_XPrService', true],
            'App\\Controller\\ConfigureHelpdesk::migrateDatabaseSchemaXHR' => ['privates', '.service_locator.g6H.xPr', 'get_ServiceLocator_G6H_XPrService', true],
            'App\\Controller\\ConfigureHelpdesk::populateDatabaseEntitiesXHR' => ['privates', '.service_locator.g6H.xPr', 'get_ServiceLocator_G6H_XPrService', true],
            'App\\Controller\\ConfigureHelpdesk::updateConfigurationsXHR' => ['privates', '.service_locator.g6H.xPr', 'get_ServiceLocator_G6H_XPrService', true],
            'App\\Controller\\ConfigureHelpdesk::updateWebsiteConfigurationXHR' => ['privates', '.service_locator.NiNA.Hn', 'get_ServiceLocator_NiNA_HnService', true],
            'App\\Controller\\ConfigureHelpdesk::websiteConfigurationXHR' => ['privates', '.service_locator.NiNA.Hn', 'get_ServiceLocator_NiNA_HnService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::editPrepareResponse' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::getPreparedResponseActionOptionsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowActionOptionsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::workflowsListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::listAgentsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::updateCredentials' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::listCustomersXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templatesxhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::listGroupsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::listPrivilegeXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::getAchievementsXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::savedRepliesXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::updateMailerConfiguration' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::removeMailerConfiguration' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::deleteTeamXHR' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::listTeamsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::loadTicket' => ['privates', '.service_locator.KmruKSe', 'get_ServiceLocator_KmruKSeService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getTicketQuickViewDetailsXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::apiEndpointXHR' => ['privates', '.service_locator.l2hbC8x', 'get_ServiceLocator_L2hbC8xService', true],
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::dashboard' => ['privates', '.service_locator.lwwpcys', 'get_ServiceLocator_LwwpcysService', true],
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applicationsXHR' => ['privates', '.service_locator.LF.tl.m', 'get_ServiceLocator_LF_Tl_MService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncementXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleList' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListByCategory' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::article' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryList' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::listFoldersXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::threadListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketadd' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\BaseController:base' => ['privates', '.service_locator.R4L7Yfy', 'get_ServiceLocator_R4L7YfyService', true],
            'App\\Controller\\ConfigureHelpdesk:createDefaultSuperUserXHR' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'App\\Controller\\ConfigureHelpdesk:evaluateSystemRequirements' => ['privates', '.service_locator.g6H.xPr', 'get_ServiceLocator_G6H_XPrService', true],
            'App\\Controller\\ConfigureHelpdesk:migrateDatabaseSchemaXHR' => ['privates', '.service_locator.g6H.xPr', 'get_ServiceLocator_G6H_XPrService', true],
            'App\\Controller\\ConfigureHelpdesk:populateDatabaseEntitiesXHR' => ['privates', '.service_locator.g6H.xPr', 'get_ServiceLocator_G6H_XPrService', true],
            'App\\Controller\\ConfigureHelpdesk:updateConfigurationsXHR' => ['privates', '.service_locator.g6H.xPr', 'get_ServiceLocator_G6H_XPrService', true],
            'App\\Controller\\ConfigureHelpdesk:updateWebsiteConfigurationXHR' => ['privates', '.service_locator.NiNA.Hn', 'get_ServiceLocator_NiNA_HnService', true],
            'App\\Controller\\ConfigureHelpdesk:websiteConfigurationXHR' => ['privates', '.service_locator.NiNA.Hn', 'get_ServiceLocator_NiNA_HnService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse:editPrepareResponse' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR:getPreparedResponseActionOptionsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR:prepareResponseListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR:getWorkflowActionOptionsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR:workflowsListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR:listAgentsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication:updateCredentials' => ['privates', '.service_locator.gPh6X_L', 'get_ServiceLocator_GPh6XLService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR:listCustomersXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email:templatesxhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR:listGroupsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR:listPrivilegeXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report:getAchievementsXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies:savedRepliesXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies:updateSavedReplies' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer:updateMailerConfiguration' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR:removeMailerConfiguration' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR:deleteTeamXHR' => ['privates', '.service_locator.mzjt3rI', 'get_ServiceLocator_Mzjt3rIService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR:listTeamsXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket:loadTicket' => ['privates', '.service_locator.KmruKSe', 'get_ServiceLocator_KmruKSeService', true],
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR:getTicketQuickViewDetailsXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application:apiEndpointXHR' => ['privates', '.service_locator.l2hbC8x', 'get_ServiceLocator_L2hbC8xService', true],
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application:dashboard' => ['privates', '.service_locator.lwwpcys', 'get_ServiceLocator_LwwpcysService', true],
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard:applicationsXHR' => ['privates', '.service_locator.LF.tl.m', 'get_ServiceLocator_LF_Tl_MService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement:listAnnouncementXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article:ArticleList' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article:ArticleListByCategory' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article:ArticleListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article:article' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category:Category' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category:CategoryList' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category:CategoryListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category:CategoryXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR:listFoldersXHR' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket:threadListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket:ticketListXhr' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket:ticketadd' => ['privates', '.service_locator.zARbZ0I', 'get_ServiceLocator_ZARbZ0IService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\BaseController::base' => '?',
            'App\\Controller\\ConfigureHelpdesk::createDefaultSuperUserXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk::evaluateSystemRequirements' => '?',
            'App\\Controller\\ConfigureHelpdesk::migrateDatabaseSchemaXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk::populateDatabaseEntitiesXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk::updateConfigurationsXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk::updateWebsiteConfigurationXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk::websiteConfigurationXHR' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::editPrepareResponse' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::getPreparedResponseActionOptionsXHR' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseListXhr' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowActionOptionsXHR' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::workflowsListXhr' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::listAgentsXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::updateCredentials' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::listCustomersXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templatesxhr' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::listGroupsXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::listPrivilegeXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::getAchievementsXhr' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::savedRepliesXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::updateMailerConfiguration' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::removeMailerConfiguration' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::deleteTeamXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::listTeamsXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::loadTicket' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getTicketQuickViewDetailsXhr' => '?',
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::apiEndpointXHR' => '?',
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::dashboard' => '?',
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applicationsXHR' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncementXHR' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleList' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListByCategory' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::article' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryList' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::listFoldersXHR' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::threadListXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketListXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketadd' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\BaseController:base' => '?',
            'App\\Controller\\ConfigureHelpdesk:createDefaultSuperUserXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk:evaluateSystemRequirements' => '?',
            'App\\Controller\\ConfigureHelpdesk:migrateDatabaseSchemaXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk:populateDatabaseEntitiesXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk:updateConfigurationsXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk:updateWebsiteConfigurationXHR' => '?',
            'App\\Controller\\ConfigureHelpdesk:websiteConfigurationXHR' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse:editPrepareResponse' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR:getPreparedResponseActionOptionsXHR' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR:prepareResponseListXhr' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR:getWorkflowActionOptionsXHR' => '?',
            'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR:workflowsListXhr' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR:listAgentsXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication:updateCredentials' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR:listCustomersXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email:templatesxhr' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR:listGroupsXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR:listPrivilegeXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report:getAchievementsXhr' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies:savedRepliesXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies:updateSavedReplies' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer:updateMailerConfiguration' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR:removeMailerConfiguration' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR:deleteTeamXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR:listTeamsXHR' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket:loadTicket' => '?',
            'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR:getTicketQuickViewDetailsXhr' => '?',
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application:apiEndpointXHR' => '?',
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application:dashboard' => '?',
            'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard:applicationsXHR' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement:listAnnouncementXHR' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article:ArticleList' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article:ArticleListByCategory' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article:ArticleListXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article:article' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category:Category' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category:CategoryList' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category:CategoryListXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category:CategoryXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR:listFoldersXHR' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket:threadListXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket:ticketListXhr' => '?',
            'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket:ticketadd' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
