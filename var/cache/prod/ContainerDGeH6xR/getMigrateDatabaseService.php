<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMigrateDatabaseService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.App\Console\Wizard\MigrateDatabase' shared autowired service.
     *
     * @return \App\Console\Wizard\MigrateDatabase
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['console.command.public_alias.App\\Console\\Wizard\\MigrateDatabase'] = new \App\Console\Wizard\MigrateDatabase($container, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}