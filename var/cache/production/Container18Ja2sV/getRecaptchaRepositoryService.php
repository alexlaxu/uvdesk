<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecaptchaRepositoryService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the private 'Webkul\UVDesk\CoreFrameworkBundle\Repository\RecaptchaRepository' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Repository\RecaptchaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Repository/RecaptchaRepository.php';

        return $container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\Repository\\RecaptchaRepository'] = new \Webkul\UVDesk\CoreFrameworkBundle\Repository\RecaptchaRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
