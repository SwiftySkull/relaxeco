<?php

namespace Container20u2Ire;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuotesRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\QuotesRepository' shared autowired service.
     *
     * @return \App\Repository\QuotesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\QuotesRepository'] = new \App\Repository\QuotesRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}