<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing MatchingVehicleIdsByVINRecordType
 *
 * 
 * XSD Type: matchingVehicleIdsByVINRecord
 */
class MatchingVehicleIdsByVINRecordType extends MatchingVehicleIdsByVINRecordSrcType
{

    /**
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var int $modelId
     */
    private $modelId = null;

    /**
     * @var int $carId
     */
    private $carId = null;

    /**
     * @var string $vehicleTypeDescription
     */
    private $vehicleTypeDescription = null;

    /**
     * @var string $carName
     */
    private $carName = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\CriteriaRecordType[] $linkageCriteria
     */
    private $linkageCriteria = [
        
    ];

    /**
     * @var \Myrzan\TecDocClient\Generated\RMIQualifierType[] $rmiQualifiers
     */
    private $rmiQualifiers = [
        
    ];

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
     * Gets as vehicleTypeDescription
     *
     * @return string
     */
    public function getVehicleTypeDescription()
    {
        return $this->vehicleTypeDescription;
    }

    /**
     * Sets a new vehicleTypeDescription
     *
     * @param string $vehicleTypeDescription
     * @return self
     */
    public function setVehicleTypeDescription($vehicleTypeDescription)
    {
        $this->vehicleTypeDescription = $vehicleTypeDescription;
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
     * Adds as linkageCriteria
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\CriteriaRecordType $linkageCriteria
     */
    public function addToLinkageCriteria(\Myrzan\TecDocClient\Generated\CriteriaRecordType $linkageCriteria)
    {
        $this->linkageCriteria[] = $linkageCriteria;
        return $this;
    }

    /**
     * isset linkageCriteria
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkageCriteria($index)
    {
        return isset($this->linkageCriteria[$index]);
    }

    /**
     * unset linkageCriteria
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkageCriteria($index)
    {
        unset($this->linkageCriteria[$index]);
    }

    /**
     * Gets as linkageCriteria
     *
     * @return \Myrzan\TecDocClient\Generated\CriteriaRecordType[]
     */
    public function getLinkageCriteria()
    {
        return $this->linkageCriteria;
    }

    /**
     * Sets a new linkageCriteria
     *
     * @param \Myrzan\TecDocClient\Generated\CriteriaRecordType[] $linkageCriteria
     * @return self
     */
    public function setLinkageCriteria(array $linkageCriteria)
    {
        $this->linkageCriteria = $linkageCriteria;
        return $this;
    }

    /**
     * Adds as rmiQualifiers
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\RMIQualifierType $rmiQualifiers
     */
    public function addToRmiQualifiers(\Myrzan\TecDocClient\Generated\RMIQualifierType $rmiQualifiers)
    {
        $this->rmiQualifiers[] = $rmiQualifiers;
        return $this;
    }

    /**
     * isset rmiQualifiers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRmiQualifiers($index)
    {
        return isset($this->rmiQualifiers[$index]);
    }

    /**
     * unset rmiQualifiers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRmiQualifiers($index)
    {
        unset($this->rmiQualifiers[$index]);
    }

    /**
     * Gets as rmiQualifiers
     *
     * @return \Myrzan\TecDocClient\Generated\RMIQualifierType[]
     */
    public function getRmiQualifiers()
    {
        return $this->rmiQualifiers;
    }

    /**
     * Sets a new rmiQualifiers
     *
     * @param \Myrzan\TecDocClient\Generated\RMIQualifierType[] $rmiQualifiers
     * @return self
     */
    public function setRmiQualifiers(array $rmiQualifiers)
    {
        $this->rmiQualifiers = $rmiQualifiers;
        return $this;
    }


}

