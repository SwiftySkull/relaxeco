<?php

namespace Container20u2Ire;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSeancesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\SeancesRepository' shared autowired service.
     *
     * @return \App\Repository\SeancesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\SeancesRepository'] = new \App\Repository\SeancesRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
