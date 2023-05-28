<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HautelookAliceConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $fixturesPath;
    private $rootDirs;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function fixturesPath(mixed $value): static
    {
        $this->_usedProperties['fixturesPath'] = true;
        $this->fixturesPath = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function rootDirs(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['rootDirs'] = true;
        $this->rootDirs = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'hautelook_alice';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('fixtures_path', $value)) {
            $this->_usedProperties['fixturesPath'] = true;
            $this->fixturesPath = $value['fixtures_path'];
            unset($value['fixtures_path']);
        }

        if (array_key_exists('root_dirs', $value)) {
            $this->_usedProperties['rootDirs'] = true;
            $this->rootDirs = $value['root_dirs'];
            unset($value['root_dirs']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['fixturesPath'])) {
            $output['fixtures_path'] = $this->fixturesPath;
        }
        if (isset($this->_usedProperties['rootDirs'])) {
            $output['root_dirs'] = $this->rootDirs;
        }

        return $output;
    }

}
