<?php

namespace ContainerMET6elu;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/PurgerLoader.php';

class PurgerLoaderGhostF717e5a extends \Fidry\AliceDataFixtures\Loader\PurgerLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'defaultPurgeMode' => [parent::class, 'defaultPurgeMode', null],
        "\0".parent::class."\0".'loader' => [parent::class, 'loader', null],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null],
        "\0".parent::class."\0".'purgerFactory' => [parent::class, 'purgerFactory', null],
        'defaultPurgeMode' => [parent::class, 'defaultPurgeMode', null],
        'loader' => [parent::class, 'loader', null],
        'logger' => [parent::class, 'logger', null],
        'purgerFactory' => [parent::class, 'purgerFactory', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PurgerLoaderGhostF717e5a', false)) {
    \class_alias(__NAMESPACE__.'\\PurgerLoaderGhostF717e5a', 'PurgerLoaderGhostF717e5a', false);
}
