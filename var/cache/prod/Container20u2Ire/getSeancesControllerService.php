<?php

namespace Container20u2Ire;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSeancesControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\SeancesController' shared autowired service.
     *
     * @return \App\Controller\Admin\SeancesController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\SeancesController'] = $instance = new \App\Controller\Admin\SeancesController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\Admin\\SeancesController', $container));

        return $instance;
    }
}
