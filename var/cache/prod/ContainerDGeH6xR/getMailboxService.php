<?php

namespace ContainerDGeH6xR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailboxService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Webkul\UVDesk\CoreFrameworkBundle\Form\Mailbox' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Form\Mailbox
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\Form\\Mailbox'] = new \Webkul\UVDesk\CoreFrameworkBundle\Form\Mailbox();
    }
}
