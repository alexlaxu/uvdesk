<?php

namespace Container8A80KwM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBootstrappingProjectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Webkul\UVDesk\CoreFrameworkBundle\Guides\BootstrappingProject' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Guides\BootstrappingProject
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Guides/BootstrappingProject.php';

        return $container->services['console.command.public_alias.Webkul\\UVDesk\\CoreFrameworkBundle\\Guides\\BootstrappingProject'] = new \Webkul\UVDesk\CoreFrameworkBundle\Guides\BootstrappingProject();
    }
}
