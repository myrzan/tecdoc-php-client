<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing KeyValues
 *
 * 
 * XSD Type: keyValuesRecord
 */
class KeyValues 
{

    /**
     * @var string $keyId
     */
    private $keyId = null;

    /**
     * @var int $keyTableId
     */
    private $keyTableId = null;

    /**
     * @var string $keyValue
     */
    private $keyValue = null;

    /**
     * Gets as keyId
     *
     * @return string
     */
    public function getKeyId()
    {
        return $this->keyId;
    }

    /**
     * Sets a new keyId
     *
     * @param string $keyId
     * @return self
     */
    public function setKeyId($keyId)
    {
        $this->keyId = $keyId;
        return $this;
    }

    /**
     * Gets as keyTableId
     *
     * @return int
     */
    public function getKeyTableId()
    {
        return $this->keyTableId;
    }

    /**
     * Sets a new keyTableId
     *
     * @param int $keyTableId
     * @return self
     */
    public function setKeyTableId($keyTableId)
    {
        $this->keyTableId = $keyTableId;
        return $this;
    }

    /**
     * Gets as keyValue
     *
     * @return string
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }

    /**
     * Sets a new keyValue
     *
     * @param string $keyValue
     * @return self
     */
    public function setKeyValue($keyValue)
    {
        $this->keyValue = $keyValue;
        return $this;
    }


}

