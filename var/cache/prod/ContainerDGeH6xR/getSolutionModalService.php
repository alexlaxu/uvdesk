<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSolutionModalService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Webkul\UVDesk\SupportCenterBundle\Form\SolutionModal' shared autowired service.
     *
     * @return \Webkul\UVDesk\SupportCenterBundle\Form\SolutionModal
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Webkul\\UVDesk\\SupportCenterBundle\\Form\\SolutionModal'] = new \Webkul\UVDesk\SupportCenterBundle\Form\SolutionModal();
    }
}