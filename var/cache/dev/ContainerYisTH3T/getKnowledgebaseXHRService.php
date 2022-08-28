<?php

namespace ContainerYisTH3T;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnowledgebaseXHRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\SupportCenterBundle\Controller\KnowledgebaseXHR' shared autowired service.
     *
     * @return \Webkul\UVDesk\SupportCenterBundle\Controller\KnowledgebaseXHR
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/KnowledgebaseXHR.php';

        $container->services['Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR'] = $instance = new \Webkul\UVDesk\SupportCenterBundle\Controller\KnowledgebaseXHR(($container->services['user.service'] ?? $container->getUser_ServiceService()), ($container->services['translator'] ?? $container->getTranslatorService()));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR', $container));

        return $instance;
    }
}
