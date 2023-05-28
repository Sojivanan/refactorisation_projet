<?php

namespace ContainerDQUWtJA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHautelookAlice_LocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'hautelook_alice.locator' shared service.
     *
     * @return \Hautelook\AliceBundle\Locator\EnvironmentlessFilesLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/FixtureLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Locator/EnvironmentlessFilesLocator.php';

        return $container->services['hautelook_alice.locator'] = new \Hautelook\AliceBundle\Locator\EnvironmentlessFilesLocator(($container->privates['hautelook_alice.locator.env_directory'] ?? $container->load('getHautelookAlice_Locator_EnvDirectoryService')));
    }
}
