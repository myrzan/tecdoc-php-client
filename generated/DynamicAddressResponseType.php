<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing DynamicAddressResponseType
 *
 * 
 * XSD Type: dynamicAddressResponse
 */
class DynamicAddressResponseType extends DynamicAddressResponseSrcType
{

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $statusText
     */
    private $statusText = null;

    /**
     * @var int $validityHours
     */
    private $validityHours = null;

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

    /**
     * Gets as validityHours
     *
     * @return int
     */
    public function getValidityHours()
    {
        return $this->validityHours;
    }

    /**
     * Sets a new validityHours
     *
     * @param int $validityHours
     * @return self
     */
    public function setValidityHours($validityHours)
    {
        $this->validityHours = $validityHours;
        return $this;
    }


}

