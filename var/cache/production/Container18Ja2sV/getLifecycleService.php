<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLifecycleService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the private 'Webkul\UVDesk\CoreFrameworkBundle\EventListener\Doctrine\Lifecycle' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\EventListener\Doctrine\Lifecycle
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/EventListener/Doctrine/Lifecycle.php';

        return $container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\EventListener\\Doctrine\\Lifecycle'] = new \Webkul\UVDesk\CoreFrameworkBundle\EventListener\Doctrine\Lifecycle($container);
    }
}
