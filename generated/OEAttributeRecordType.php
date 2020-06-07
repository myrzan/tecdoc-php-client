<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing OEAttributeRecordType
 *
 * 
 * XSD Type: OEAttributeRecord
 */
class OEAttributeRecordType
{

    /**
     * @var string $key
     */
    private $key = null;

    /**
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * @param string $key
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

