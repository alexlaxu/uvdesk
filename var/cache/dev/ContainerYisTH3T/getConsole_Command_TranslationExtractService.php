<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationExtractService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_extract' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';

        $container->privates['console.command.translation_extract'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ColorType.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 11 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Account.php'), 12 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/AccountXHR.php'), 13 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Authentication.php'), 14 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Customer.php'), 15 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/CustomerXHR.php'), 16 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Email.php'), 17 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/EmailSettings.php'), 18 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/EmailSettingsXHR.php'), 19 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Group.php'), 20 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/GroupXHR.php'), 21 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Privilege.php'), 22 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/PrivilegeXHR.php'), 23 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Report.php'), 24 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/SavedReplies.php'), 25 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/SwiftMailer.php'), 26 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/SwiftMailerXHR.php'), 27 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Team.php'), 28 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/TeamXHR.php'), 29 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Theme.php'), 30 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Thread.php'), 31 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Ticket.php'), 32 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/TicketXHR.php'), 33 => (\dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/Controller/Automations/PreparedResponse.php'), 34 => (\dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/Controller/Automations/PreparedResponseXHR.php'), 35 => (\dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/Controller/Automations/Workflow.php'), 36 => (\dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/Controller/Automations/WorkflowXHR.php'), 37 => (\dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/Services/AutomationService.php'), 38 => (\dirname(__DIR__, 4).'/vendor/uvdesk/mailbox-component/Controller/MailboxChannel.php'), 39 => (\dirname(__DIR__, 4).'/vendor/uvdesk/mailbox-component/Controller/MailboxChannelXHR.php'), 40 => (\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Announcement.php'), 41 => (\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Article.php'), 42 => (\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Branding.php'), 43 => (\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Category.php'), 44 => (\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Customer.php'), 45 => (\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Folder.php'), 46 => (\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/KnowledgebaseXHR.php'), 47 => (\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Ticket.php'), 48 => (\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/Website.php'), 49 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Services/ValidationService.php'), 50 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Services/CustomFieldsService.php'), 51 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Dashboard/NavigationTemplate.php'), 52 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Dashboard/HomepageTemplate.php'), 53 => (\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Dashboard/SearchTemplate.php'), 54 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 55 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 56 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 57 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php'), 58 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/src/Helper/Processor.php')], []);

        $instance->setName('translation:extract');
        $instance->setAliases([0 => 'translation:update']);
        $instance->setDescription('Extract missing translations keys from code to translation files.');

        return $instance;
    }
}
