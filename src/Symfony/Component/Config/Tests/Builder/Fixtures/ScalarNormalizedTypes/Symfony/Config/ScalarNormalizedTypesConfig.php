<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ScalarNormalizedTypes'.\DIRECTORY_SEPARATOR.'ObjectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ScalarNormalizedTypes'.\DIRECTORY_SEPARATOR.'ListObjectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ScalarNormalizedTypes'.\DIRECTORY_SEPARATOR.'KeyedListObjectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ScalarNormalizedTypes'.\DIRECTORY_SEPARATOR.'NestedConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ScalarNormalizedTypesConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $simpleArray;
    private $keyedArray;
    private $object;
    private $listObject;
    private $keyedListObject;
    private $nested;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function simpleArray($value): self
    {
        $this->_usedProperties['simpleArray'] = true;
        $this->simpleArray = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|array $value
     * @return $this
     */
    public function keyedArray(string $name, $value): self
    {
        $this->_usedProperties['keyedArray'] = true;
        $this->keyedArray[$name] = $value;

        return $this;
    }

    /**
     * @return \Symfony\Config\ScalarNormalizedTypes\ObjectConfig|$this
     */
    public function object($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['object'] = true;
            $this->object = $value;

            return $this;
        }

        if (!$this->object instanceof \Symfony\Config\ScalarNormalizedTypes\ObjectConfig) {
            $this->_usedProperties['object'] = true;
            $this->object = new \Symfony\Config\ScalarNormalizedTypes\ObjectConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "object()" has already been initialized. You cannot pass values the second time you call object().');
        }

        return $this->object;
    }

    /**
     * @return \Symfony\Config\ScalarNormalizedTypes\ListObjectConfig|$this
     */
    public function listObject($value = [])
    {
        $this->_usedProperties['listObject'] = true;
        if (!\is_array($value)) {
            $this->listObject[] = $value;

            return $this;
        }

        return $this->listObject[] = new \Symfony\Config\ScalarNormalizedTypes\ListObjectConfig($value);
    }

    /**
     * @return \Symfony\Config\ScalarNormalizedTypes\KeyedListObjectConfig|$this
     */
    public function keyedListObject(string $class, $value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['keyedListObject'] = true;
            $this->keyedListObject[$class] = $value;

            return $this;
        }

        if (!isset($this->keyedListObject[$class]) || !$this->keyedListObject[$class] instanceof \Symfony\Config\ScalarNormalizedTypes\KeyedListObjectConfig) {
            $this->_usedProperties['keyedListObject'] = true;
            $this->keyedListObject[$class] = new \Symfony\Config\ScalarNormalizedTypes\KeyedListObjectConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "keyedListObject()" has already been initialized. You cannot pass values the second time you call keyedListObject().');
        }

        return $this->keyedListObject[$class];
    }

    public function nested(array $value = []): \Symfony\Config\ScalarNormalizedTypes\NestedConfig
    {
        if (null === $this->nested) {
            $this->_usedProperties['nested'] = true;
            $this->nested = new \Symfony\Config\ScalarNormalizedTypes\NestedConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "nested()" has already been initialized. You cannot pass values the second time you call nested().');
        }

        return $this->nested;
    }

    public function getExtensionAlias(): string
    {
        return 'scalar_normalized_types';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('simple_array', $value)) {
            $this->_usedProperties['simpleArray'] = true;
            $this->simpleArray = $value['simple_array'];
            unset($value['simple_array']);
        }

        if (array_key_exists('keyed_array', $value)) {
            $this->_usedProperties['keyedArray'] = true;
            $this->keyedArray = $value['keyed_array'];
            unset($value['keyed_array']);
        }

        if (array_key_exists('object', $value)) {
            $this->_usedProperties['object'] = true;
            $this->object = \is_array($value['object']) ? new \Symfony\Config\ScalarNormalizedTypes\ObjectConfig($value['object']) : $value['object'];
            unset($value['object']);
        }

        if (array_key_exists('list_object', $value)) {
            $this->_usedProperties['listObject'] = true;
            $this->listObject = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\ScalarNormalizedTypes\ListObjectConfig($v) : $v; }, $value['list_object']);
            unset($value['list_object']);
        }

        if (array_key_exists('keyed_list_object', $value)) {
            $this->_usedProperties['keyedListObject'] = true;
            $this->keyedListObject = array_map(function ($v) { return \is_array($v) ? new \Symfony\Config\ScalarNormalizedTypes\KeyedListObjectConfig($v) : $v; }, $value['keyed_list_object']);
            unset($value['keyed_list_object']);
        }

        if (array_key_exists('nested', $value)) {
            $this->_usedProperties['nested'] = true;
            $this->nested = new \Symfony\Config\ScalarNormalizedTypes\NestedConfig($value['nested']);
            unset($value['nested']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['simpleArray'])) {
            $output['simple_array'] = $this->simpleArray;
        }
        if (isset($this->_usedProperties['keyedArray'])) {
            $output['keyed_array'] = $this->keyedArray;
        }
        if (isset($this->_usedProperties['object'])) {
            $output['object'] = $this->object instanceof \Symfony\Config\ScalarNormalizedTypes\ObjectConfig ? $this->object->toArray() : $this->object;
        }
        if (isset($this->_usedProperties['listObject'])) {
            $output['list_object'] = array_map(function ($v) { return $v instanceof \Symfony\Config\ScalarNormalizedTypes\ListObjectConfig ? $v->toArray() : $v; }, $this->listObject);
        }
        if (isset($this->_usedProperties['keyedListObject'])) {
            $output['keyed_list_object'] = array_map(function ($v) { return $v instanceof \Symfony\Config\ScalarNormalizedTypes\KeyedListObjectConfig ? $v->toArray() : $v; }, $this->keyedListObject);
        }
        if (isset($this->_usedProperties['nested'])) {
            $output['nested'] = $this->nested->toArray();
        }

        return $output;
    }

}
