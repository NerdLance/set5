<?php

namespace ContainerXBmGSch;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6PXgKdLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6PXgKdL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6PXgKdL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ImportController::getJokes' => ['privates', '.service_locator.LRCqY9y', 'get_ServiceLocator_LRCqY9yService', true],
            'App\\Controller\\RateJokeController::index' => ['privates', '.service_locator.LRCqY9y', 'get_ServiceLocator_LRCqY9yService', true],
            'App\\Controller\\SearchController::index' => ['privates', '.service_locator.LRCqY9y', 'get_ServiceLocator_LRCqY9yService', true],
            'App\\Controller\\ViewJokeController::index' => ['privates', '.service_locator.LRCqY9y', 'get_ServiceLocator_LRCqY9yService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ImportController:getJokes' => ['privates', '.service_locator.LRCqY9y', 'get_ServiceLocator_LRCqY9yService', true],
            'App\\Controller\\RateJokeController:index' => ['privates', '.service_locator.LRCqY9y', 'get_ServiceLocator_LRCqY9yService', true],
            'App\\Controller\\SearchController:index' => ['privates', '.service_locator.LRCqY9y', 'get_ServiceLocator_LRCqY9yService', true],
            'App\\Controller\\ViewJokeController:index' => ['privates', '.service_locator.LRCqY9y', 'get_ServiceLocator_LRCqY9yService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ImportController::getJokes' => '?',
            'App\\Controller\\RateJokeController::index' => '?',
            'App\\Controller\\SearchController::index' => '?',
            'App\\Controller\\ViewJokeController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ImportController:getJokes' => '?',
            'App\\Controller\\RateJokeController:index' => '?',
            'App\\Controller\\SearchController:index' => '?',
            'App\\Controller\\ViewJokeController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
