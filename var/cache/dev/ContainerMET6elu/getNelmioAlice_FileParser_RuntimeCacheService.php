<?php

namespace ContainerMET6elu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FileParser_RuntimeCacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.file_parser.runtime_cache' shared service.
     *
     * @return \Nelmio\Alice\Parser\RuntimeCacheParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/RuntimeCacheParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/ParserRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/ChainableParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/Chainable/YamlParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/yaml/Parser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/Chainable/PhpParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/Chainable/JsonParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Alice/FileLocator/KernelFileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FileLocator/DefaultFileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/IncludeProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/IncludeProcessor/DefaultIncludeProcessor.php';

        $a = new \Hautelook\AliceBundle\Alice\FileLocator\KernelFileLocator(new \Nelmio\Alice\FileLocator\DefaultFileLocator(), ($container->services['kernel'] ?? $container->get('kernel', 1)));

        return $container->privates['nelmio_alice.file_parser.runtime_cache'] = new \Nelmio\Alice\Parser\RuntimeCacheParser(new \Nelmio\Alice\Parser\ParserRegistry([0 => new \Nelmio\Alice\Parser\Chainable\YamlParser(new \Symfony\Component\Yaml\Parser()), 1 => new \Nelmio\Alice\Parser\Chainable\PhpParser(), 2 => new \Nelmio\Alice\Parser\Chainable\JsonParser()]), $a, new \Nelmio\Alice\Parser\IncludeProcessor\DefaultIncludeProcessor($a));
    }
}
