<?php

namespace ContainerKfD6xvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Utils\Utils' shared autowired service.
     *
     * @return \App\Utils\Utils
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Utils'.\DIRECTORY_SEPARATOR.'Utils.php';

        return $container->privates['App\\Utils\\Utils'] = new \App\Utils\Utils();
    }
}
