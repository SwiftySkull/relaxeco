<?php

namespace Container20u2Ire;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Utils\Utils' shared autowired service.
     *
     * @return \App\Utils\Utils
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Utils\\Utils'] = new \App\Utils\Utils();
    }
}