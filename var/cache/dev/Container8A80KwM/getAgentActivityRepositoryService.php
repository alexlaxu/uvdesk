<?php

namespace Container8A80KwM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAgentActivityRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Webkul\UVDesk\CoreFrameworkBundle\Repository\AgentActivityRepository' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Repository\AgentActivityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Repository/AgentActivityRepository.php';

        return $container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\Repository\\AgentActivityRepository'] = new \Webkul\UVDesk\CoreFrameworkBundle\Repository\AgentActivityRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
