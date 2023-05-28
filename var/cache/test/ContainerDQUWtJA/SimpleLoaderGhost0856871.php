<?php

namespace ContainerDQUWtJA;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/SimpleLoader.php';

class SimpleLoaderGhost0856871 extends \Fidry\AliceDataFixtures\Loader\SimpleLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'filesLoader' => [parent::class, 'filesLoader', null],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null],
        'filesLoader' => [parent::class, 'filesLoader', null],
        'logger' => [parent::class, 'logger', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SimpleLoaderGhost0856871', false)) {
    \class_alias(__NAMESPACE__.'\\SimpleLoaderGhost0856871', 'SimpleLoaderGhost0856871', false);
}
