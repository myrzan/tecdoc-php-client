<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VehicleIdsByKeyNumberPlates3RecordType
 *
 * 
 * XSD Type: vehicleIdsByKeyNumberPlates3Record
 */
class VehicleIdsByKeyNumberPlates3RecordType extends VehicleIdsByKeyNumberPlates3RecordSrcType
{

    /**
     * @var int $carId
     */
    private $carId = null;

    /**
     * @var string $carName
     */
    private $carName = null;

    /**
     * @var string $firstCountry
     */
    private $firstCountry = null;

    /**
     * @var string $linkingTargetType
     */
    private $linkingTargetType = null;

    /**
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var int $modelId
     */
    private $modelId = null;

    /**
     * Gets as carId
     *
     * @return int
     */
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * Sets a new carId
     *
     * @param int $carId
     * @return self
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;
        return $this;
    }

    /**
     * Gets as carName
     *
     * @return string
     */
    public function getCarName()
    {
        return $this->carName;
    }

    /**
     * Sets a new carName
     *
     * @param string $carName
     * @return self
     */
    public function setCarName($carName)
    {
        $this->carName = $carName;
        return $this;
    }

    /**
     * Gets as firstCountry
     *
     * @return string
     */
    public function getFirstCountry()
    {
        return $this->firstCountry;
    }

    /**
     * Sets a new firstCountry
     *
     * @param string $firstCountry
     * @return self
     */
    public function setFirstCountry($firstCountry)
    {
        $this->firstCountry = $firstCountry;
        return $this;
    }

    /**
     * Gets as linkingTargetType
     *
     * @return string
     */
    public function getLinkingTargetType()
    {
        return $this->linkingTargetType;
    }

    /**
     * Sets a new linkingTargetType
     *
     * @param string $linkingTargetType
     * @return self
     */
    public function setLinkingTargetType($linkingTargetType)
    {
        $this->linkingTargetType = $linkingTargetType;
        return $this;
    }

    /**
     * Gets as manuId
     *
     * @return int
     */
    public function getManuId()
    {
        return $this->manuId;
    }

    /**
     * Sets a new manuId
     *
     * @param int $manuId
     * @return self
     */
    public function setManuId($manuId)
    {
        $this->manuId = $manuId;
        return $this;
    }

    /**
     * Gets as modelId
     *
     * @return int
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Sets a new modelId
     *
     * @param int $modelId
     * @return self
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;
        return $this;
    }


}

