<?php

namespace Container20u2Ire;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiteratureRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\LiteratureRepository' shared autowired service.
     *
     * @return \App\Repository\LiteratureRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\LiteratureRepository'] = new \App\Repository\LiteratureRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
