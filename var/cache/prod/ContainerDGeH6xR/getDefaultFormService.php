<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefaultFormService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Webkul\UVDesk\AutomationBundle\Form\DefaultForm' shared autowired service.
     *
     * @return \Webkul\UVDesk\AutomationBundle\Form\DefaultForm
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Webkul\\UVDesk\\AutomationBundle\\Form\\DefaultForm'] = new \Webkul\UVDesk\AutomationBundle\Form\DefaultForm();
    }
}
