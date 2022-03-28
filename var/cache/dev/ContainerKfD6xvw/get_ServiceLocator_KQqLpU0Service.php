<?php

namespace ContainerKfD6xvw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KQqLpU0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kQqLpU0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kQqLpU0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'sr' => ['privates', 'App\\Repository\\SeancesRepository', 'getSeancesRepositoryService', true],
            'utils' => ['privates', 'App\\Utils\\Utils', 'getUtilsService', true],
        ], [
            'em' => '?',
            'sr' => 'App\\Repository\\SeancesRepository',
            'utils' => 'App\\Utils\\Utils',
        ]);
    }
}
