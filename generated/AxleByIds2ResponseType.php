<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing AxleByIds2ResponseType
 *
 * 
 * XSD Type: axleByIds2Response
 */
class AxleByIds2ResponseType extends AxleByIds2ResponseSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\AxleByIds2RecordType[] $data
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
     * @return self
     * @param \Myrzan\TecDocClient\Generated\AxleByIds2RecordType $array
     */
    public function addToData(\Myrzan\TecDocClient\Generated\AxleByIds2RecordType $array)
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
     * @return \Myrzan\TecDocClient\Generated\AxleByIds2RecordType[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param \Myrzan\TecDocClient\Generated\AxleByIds2RecordType[] $data
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

