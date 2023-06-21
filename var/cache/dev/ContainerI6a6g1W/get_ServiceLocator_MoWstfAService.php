<?php

namespace ContainerI6a6g1W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MoWstfAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.moWstfA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.moWstfA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'twig' => ['privates', 'twig', 'getTwigService', true],
        ], [
            'entityManager' => '?',
            'twig' => '?',
        ]);
    }
}
