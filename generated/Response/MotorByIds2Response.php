<?php

namespace Myrzan\TecDocClient\Generated\Response;

use Myrzan\TecDocClient\Generated\Record\MotorByIds2;

/**
 * Class representing MotorByIds2Response
 *
 * 
 * XSD Type: motorByIds2Response
 */
class MotorByIds2Response 
{

    /**
     * @var MotorByIds2[] $data
     */
    private $data = null;

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $statusText
     */
    private $statusText = null;

    /**
     * Adds as array
     *
     * @param MotorByIds2 $array
     * @return self
     */
    public function addToData(MotorByIds2 $array)
    {
        $this->data[] = $array;
        return $this;
    }

    /**
     * isset data
     *
     * @param int|string $index
     * @return bool
     */
    public function issetData($index)
    {
        return isset($this->data[$index]);
    }

    /**
     * unset data
     *
     * @param int|string $index
     * @return void
     */
    public function unsetData($index)
    {
        unset($this->data[$index]);
    }

    /**
     * Gets as data
     *
     * @return MotorByIds2[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param MotorByIds2[] $data
     * @return self
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param int $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusText
     *
     * @return string
     */
    public function getStatusText()
    {
        return $this->statusText;
    }

    /**
     * Sets a new statusText
     *
     * @param string $statusText
     * @return self
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;
        return $this;
    }


}

