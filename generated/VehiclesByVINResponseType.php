<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VehiclesByVINResponseType
 *
 * 
 * XSD Type: vehiclesByVINResponse
 */
class VehiclesByVINResponseType extends VehiclesByVINResponseSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\MatchesByVINRecordType $data
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
     * Gets as data
     *
     * @return \Myrzan\TecDocClient\Generated\MatchesByVINRecordType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param \Myrzan\TecDocClient\Generated\MatchesByVINRecordType $data
     * @return self
     */
    public function setData(\Myrzan\TecDocClient\Generated\MatchesByVINRecordType $data)
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

