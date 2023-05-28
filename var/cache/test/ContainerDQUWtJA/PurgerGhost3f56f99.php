<?php

namespace ContainerDQUWtJA;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Purger/Purger.php';

class PurgerGhost3f56f99 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'manager' => [parent::class, 'manager', null],
        "\0".parent::class."\0".'purgeMode' => [parent::class, 'purgeMode', null],
        "\0".parent::class."\0".'purger' => [parent::class, 'purger', null],
        'manager' => [parent::class, 'manager', null],
        'purgeMode' => [parent::class, 'purgeMode', null],
        'purger' => [parent::class, 'purger', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PurgerGhost3f56f99', false)) {
    \class_alias(__NAMESPACE__.'\\PurgerGhost3f56f99', 'PurgerGhost3f56f99', false);
}
