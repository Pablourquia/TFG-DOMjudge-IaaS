<?php

namespace Symfony\Config\JmsSerializer\InstancesConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DefaultContext'.\DIRECTORY_SEPARATOR.'SerializationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DefaultContext'.\DIRECTORY_SEPARATOR.'DeserializationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefaultContextConfig 
{
    private $serialization;
    private $deserialization;
    private $_usedProperties = [];

    /**
     * @return \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\SerializationConfig|$this
     */
    public function serialization($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['serialization'] = true;
            $this->serialization = $value;

            return $this;
        }

        if (!$this->serialization instanceof \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\SerializationConfig) {
            $this->_usedProperties['serialization'] = true;
            $this->serialization = new \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\SerializationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "serialization()" has already been initialized. You cannot pass values the second time you call serialization().');
        }

        return $this->serialization;
    }

    /**
     * @return \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\DeserializationConfig|$this
     */
    public function deserialization($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['deserialization'] = true;
            $this->deserialization = $value;

            return $this;
        }

        if (!$this->deserialization instanceof \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\DeserializationConfig) {
            $this->_usedProperties['deserialization'] = true;
            $this->deserialization = new \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\DeserializationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "deserialization()" has already been initialized. You cannot pass values the second time you call deserialization().');
        }

        return $this->deserialization;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('serialization', $value)) {
            $this->_usedProperties['serialization'] = true;
            $this->serialization = \is_array($value['serialization']) ? new \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\SerializationConfig($value['serialization']) : $value['serialization'];
            unset($value['serialization']);
        }

        if (array_key_exists('deserialization', $value)) {
            $this->_usedProperties['deserialization'] = true;
            $this->deserialization = \is_array($value['deserialization']) ? new \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\DeserializationConfig($value['deserialization']) : $value['deserialization'];
            unset($value['deserialization']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['serialization'])) {
            $output['serialization'] = $this->serialization instanceof \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\SerializationConfig ? $this->serialization->toArray() : $this->serialization;
        }
        if (isset($this->_usedProperties['deserialization'])) {
            $output['deserialization'] = $this->deserialization instanceof \Symfony\Config\JmsSerializer\InstancesConfig\DefaultContext\DeserializationConfig ? $this->deserialization->toArray() : $this->deserialization;
        }

        return $output;
    }

}
