<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBuildExtensionsService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Webkul\UVDesk\ExtensionFrameworkBundle\Console\BuildExtensions' shared autowired service.
     *
     * @return \Webkul\UVDesk\ExtensionFrameworkBundle\Console\BuildExtensions
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/extension-framework/Console/BuildExtensions.php';

        return $container->services['console.command.public_alias.Webkul\\UVDesk\\ExtensionFrameworkBundle\\Console\\BuildExtensions'] = new \Webkul\UVDesk\ExtensionFrameworkBundle\Console\BuildExtensions($container);
    }
}
