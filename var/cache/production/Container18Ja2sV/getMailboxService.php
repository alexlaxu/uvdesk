<?php

namespace Container18Ja2sV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailboxService extends App_KernelProductionDebugContainer
{
    /**
     * Gets the private 'Webkul\UVDesk\CoreFrameworkBundle\Form\Mailbox' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Form\Mailbox
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Form/Mailbox.php';

        return $container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\Form\\Mailbox'] = new \Webkul\UVDesk\CoreFrameworkBundle\Form\Mailbox();
    }
}
