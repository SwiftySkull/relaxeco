<?php

namespace Container20u2Ire;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ytbdr1UService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ytbdr1U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ytbdr1U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'qr' => ['privates', 'App\\Repository\\QuotesRepository', 'getQuotesRepositoryService', true],
            'utils' => ['privates', 'App\\Utils\\Utils', 'getUtilsService', true],
        ], [
            'em' => '?',
            'qr' => 'App\\Repository\\QuotesRepository',
            'utils' => 'App\\Utils\\Utils',
        ]);
    }
}
