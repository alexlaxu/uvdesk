<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_Mailer_Mailer9381_TransportService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'swiftmailer.mailer.mailer_9381.transport' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SmtpAgent.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/InputByteStream.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Filterable.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/AbstractFilterableInputStream.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/ReplacementFilterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Authenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/LoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/PlainAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/NTLMAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/DependencyInjection/SmtpTransportConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

        $a = new \Swift_Transport_Esmtp_AuthHandler([0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator(), 3 => new \Swift_Transport_Esmtp_Auth_NTLMAuthenticator()]);
        $a->setUsername('support@telenet.com.np');
        $a->setPassword('TGF4bWFuMDA3Kg==');
        $a->setAuthMode('login');

        $container->services['swiftmailer.mailer.mailer_9381.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), [0 => $a], new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost('mail.telenet.com.np');
        $instance->setPort(587);
        $instance->setEncryption('tls');
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        $instance->registerPlugin(($container->services['swiftmailer.mailer.mailer_9381.plugin.messagelogger'] ?? ($container->services['swiftmailer.mailer.mailer_9381.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService())))->configure($instance);

        return $instance;
    }
}
