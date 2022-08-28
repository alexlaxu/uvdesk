<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSavedRepliesService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\CoreFrameworkBundle\Controller\SavedReplies' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Controller\SavedReplies
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/SavedReplies.php';

        $container->services['Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies'] = $instance = new \Webkul\UVDesk\CoreFrameworkBundle\Controller\SavedReplies(($container->services['user.service'] ?? $container->load('getUser_ServiceService')), ($container->services['translator'] ?? $container->load('getTranslatorService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies', $container));

        return $instance;
    }
}
