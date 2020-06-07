<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing VehiclesByKeyNumberPlatesRecordType
 *
 * 
 * XSD Type: vehiclesByKeyNumberPlatesRecord
 */
class VehiclesByKeyNumberPlatesRecordType extends VehiclesByKeyNumberPlatesRecordSrcType
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
     * @var string $country
     */
    private $country = null;

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
     * @var \Baumeister\TecDocClient\Generated\VehicleDetailsType $vehicleDetails
     */
    private $vehicleDetails = null;

    /**
     * @var string $vehicleDocId
     */
    private $vehicleDocId = null;

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
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
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

    /**
     * Gets as vehicleDetails
     *
     * @return \Baumeister\TecDocClient\Generated\VehicleDetailsType
     */
    public function getVehicleDetails()
    {
        return $this->vehicleDetails;
    }

    /**
     * Sets a new vehicleDetails
     *
     * @param \Baumeister\TecDocClient\Generated\VehicleDetailsType $vehicleDetails
     * @return self
     */
    public function setVehicleDetails(\Baumeister\TecDocClient\Generated\VehicleDetailsType $vehicleDetails)
    {
        $this->vehicleDetails = $vehicleDetails;
        return $this;
    }

    /**
     * Gets as vehicleDocId
     *
     * @return string
     */
    public function getVehicleDocId()
    {
        return $this->vehicleDocId;
    }

    /**
     * Sets a new vehicleDocId
     *
     * @param string $vehicleDocId
     * @return self
     */
    public function setVehicleDocId($vehicleDocId)
    {
        $this->vehicleDocId = $vehicleDocId;
        return $this;
    }


}

