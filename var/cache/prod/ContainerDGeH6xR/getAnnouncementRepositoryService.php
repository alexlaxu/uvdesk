<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnouncementRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Webkul\UVDesk\SupportCenterBundle\Repository\AnnouncementRepository' shared autowired service.
     *
     * @return \Webkul\UVDesk\SupportCenterBundle\Repository\AnnouncementRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Webkul\\UVDesk\\SupportCenterBundle\\Repository\\AnnouncementRepository'] = new \Webkul\UVDesk\SupportCenterBundle\Repository\AnnouncementRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
