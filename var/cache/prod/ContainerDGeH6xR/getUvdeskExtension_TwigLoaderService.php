<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUvdeskExtension_TwigLoaderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'uvdesk_extension.twig_loader' shared service.
     *
     * @return \Twig\Loader\FilesystemLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['uvdesk_extension.twig_loader'] = $instance = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));

        $instance->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/templates'), 'KnpPaginator');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/templates'), '!KnpPaginator');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Resources/views'), 'UVDeskCoreFramework');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Resources/views'), '!UVDeskCoreFramework');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/Resources/views'), 'UVDeskAutomation');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/automation-bundle/Resources/views'), '!UVDeskAutomation');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/extension-framework/Resources/views'), 'UVDeskExtensionFramework');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/extension-framework/Resources/views'), '!UVDeskExtensionFramework');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/mailbox-component/Resources/views'), 'UVDeskMailbox');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/mailbox-component/Resources/views'), '!UVDeskMailbox');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Resources/views'), 'UVDeskSupportCenter');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Resources/views'), '!UVDeskSupportCenter');
        $instance->addPath((\dirname(__DIR__, 4).'/templates'));
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $instance->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        return $instance;
    }
}
