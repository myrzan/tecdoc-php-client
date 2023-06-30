<?php

namespace Myrzan\TecDocClient\Generated\Response;


use Myrzan\TecDocClient\Generated\Record\MatchesByVIN;

/**
 * Class representing VehiclesByVINResponse
 *
 * 
 * XSD Type: vehiclesByVINResponse
 */
class VehiclesByVINResponse
{

    /**
     * @var MatchesByVIN $data
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
     * @return MatchesByVIN
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param MatchesByVIN $data
     * @return self
     */
    public function setData(MatchesByVIN $data)
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

