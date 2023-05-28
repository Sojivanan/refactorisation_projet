<?php

namespace ContainerDQUWtJA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_FormErrorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.form_error' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/FormErrorNormalizer.php';

        return $container->privates['serializer.normalizer.form_error'] = new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer();
    }
}
