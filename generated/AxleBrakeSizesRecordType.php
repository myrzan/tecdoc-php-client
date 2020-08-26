<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing AxleBrakeSizesRecordType
 *
 * 
 * XSD Type: axleBrakeSizesRecord
 */
class AxleBrakeSizesRecordType extends AxleBrakeSizesRecordSrcType
{

    /**
     * @var string $brakeSize
     */
    private $brakeSize = null;

    /**
     * @var int $brakeSizeId
     */
    private $brakeSizeId = null;

    /**
     * Gets as brakeSize
     *
     * @return string
     */
    public function getBrakeSize()
    {
        return $this->brakeSize;
    }

    /**
     * Sets a new brakeSize
     *
     * @param string $brakeSize
     * @return self
     */
    public function setBrakeSize($brakeSize)
    {
        $this->brakeSize = $brakeSize;
        return $this;
    }

    /**
     * Gets as brakeSizeId
     *
     * @return int
     */
    public function getBrakeSizeId()
    {
        return $this->brakeSizeId;
    }

    /**
     * Sets a new brakeSizeId
     *
     * @param int $brakeSizeId
     * @return self
     */
    public function setBrakeSizeId($brakeSizeId)
    {
        $this->brakeSizeId = $brakeSizeId;
        return $this;
    }


}

