<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing VehicleByIdRecordType
 *
 * 
 * XSD Type: vehicleByIdRecord
 */
class VehicleByIdRecordType extends VehicleByIdRecordSrcType
{

    /**
     * @var string $axisConfiguration
     */
    private $axisConfiguration = null;

    /**
     * @var string $brakeSystem
     */
    private $brakeSystem = null;

    /**
     * @var int $carId
     */
    private $carId = null;

    /**
     * @var int $ccmTech
     */
    private $ccmTech = null;

    /**
     * @var string $constructionType
     */
    private $constructionType = null;

    /**
     * @var int $cylinder
     */
    private $cylinder = null;

    /**
     * @var int $cylinderCapacityCcm
     */
    private $cylinderCapacityCcm = null;

    /**
     * @var int $cylinderCapacityLiter
     */
    private $cylinderCapacityLiter = null;

    /**
     * @var string $fuelType
     */
    private $fuelType = null;

    /**
     * @var string $fuelTypeProcess
     */
    private $fuelTypeProcess = null;

    /**
     * @var string $impulsionType
     */
    private $impulsionType = null;

    /**
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var string $manuName
     */
    private $manuName = null;

    /**
     * @var int $modId
     */
    private $modId = null;

    /**
     * @var string $modelName
     */
    private $modelName = null;

    /**
     * @var string $motorType
     */
    private $motorType = null;

    /**
     * @var int $powerHpFrom
     */
    private $powerHpFrom = null;

    /**
     * @var int $powerHpTo
     */
    private $powerHpTo = null;

    /**
     * @var int $powerKwFrom
     */
    private $powerKwFrom = null;

    /**
     * @var int $powerKwTo
     */
    private $powerKwTo = null;

    /**
     * @var int $tonnage
     */
    private $tonnage = null;

    /**
     * @var string $typeName
     */
    private $typeName = null;

    /**
     * @var int $typeNumber
     */
    private $typeNumber = null;

    /**
     * @var int $valves
     */
    private $valves = null;

    /**
     * @var int $yearOfConstrFrom
     */
    private $yearOfConstrFrom = null;

    /**
     * @var int $yearOfConstrTo
     */
    private $yearOfConstrTo = null;

    /**
     * The TecRMI Type Id (if available)
     *
     * @var int $rmiTypeId
     */
    private $rmiTypeId = null;

    /**
     * Gets as axisConfiguration
     *
     * @return string
     */
    public function getAxisConfiguration()
    {
        return $this->axisConfiguration;
    }

    /**
     * Sets a new axisConfiguration
     *
     * @param string $axisConfiguration
     * @return self
     */
    public function setAxisConfiguration($axisConfiguration)
    {
        $this->axisConfiguration = $axisConfiguration;
        return $this;
    }

    /**
     * Gets as brakeSystem
     *
     * @return string
     */
    public function getBrakeSystem()
    {
        return $this->brakeSystem;
    }

    /**
     * Sets a new brakeSystem
     *
     * @param string $brakeSystem
     * @return self
     */
    public function setBrakeSystem($brakeSystem)
    {
        $this->brakeSystem = $brakeSystem;
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
     * Gets as ccmTech
     *
     * @return int
     */
    public function getCcmTech()
    {
        return $this->ccmTech;
    }

    /**
     * Sets a new ccmTech
     *
     * @param int $ccmTech
     * @return self
     */
    public function setCcmTech($ccmTech)
    {
        $this->ccmTech = $ccmTech;
        return $this;
    }

    /**
     * Gets as constructionType
     *
     * @return string
     */
    public function getConstructionType()
    {
        return $this->constructionType;
    }

    /**
     * Sets a new constructionType
     *
     * @param string $constructionType
     * @return self
     */
    public function setConstructionType($constructionType)
    {
        $this->constructionType = $constructionType;
        return $this;
    }

    /**
     * Gets as cylinder
     *
     * @return int
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * Sets a new cylinder
     *
     * @param int $cylinder
     * @return self
     */
    public function setCylinder($cylinder)
    {
        $this->cylinder = $cylinder;
        return $this;
    }

    /**
     * Gets as cylinderCapacityCcm
     *
     * @return int
     */
    public function getCylinderCapacityCcm()
    {
        return $this->cylinderCapacityCcm;
    }

    /**
     * Sets a new cylinderCapacityCcm
     *
     * @param int $cylinderCapacityCcm
     * @return self
     */
    public function setCylinderCapacityCcm($cylinderCapacityCcm)
    {
        $this->cylinderCapacityCcm = $cylinderCapacityCcm;
        return $this;
    }

    /**
     * Gets as cylinderCapacityLiter
     *
     * @return int
     */
    public function getCylinderCapacityLiter()
    {
        return $this->cylinderCapacityLiter;
    }

    /**
     * Sets a new cylinderCapacityLiter
     *
     * @param int $cylinderCapacityLiter
     * @return self
     */
    public function setCylinderCapacityLiter($cylinderCapacityLiter)
    {
        $this->cylinderCapacityLiter = $cylinderCapacityLiter;
        return $this;
    }

    /**
     * Gets as fuelType
     *
     * @return string
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Sets a new fuelType
     *
     * @param string $fuelType
     * @return self
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
        return $this;
    }

    /**
     * Gets as fuelTypeProcess
     *
     * @return string
     */
    public function getFuelTypeProcess()
    {
        return $this->fuelTypeProcess;
    }

    /**
     * Sets a new fuelTypeProcess
     *
     * @param string $fuelTypeProcess
     * @return self
     */
    public function setFuelTypeProcess($fuelTypeProcess)
    {
        $this->fuelTypeProcess = $fuelTypeProcess;
        return $this;
    }

    /**
     * Gets as impulsionType
     *
     * @return string
     */
    public function getImpulsionType()
    {
        return $this->impulsionType;
    }

    /**
     * Sets a new impulsionType
     *
     * @param string $impulsionType
     * @return self
     */
    public function setImpulsionType($impulsionType)
    {
        $this->impulsionType = $impulsionType;
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
     * Gets as manuName
     *
     * @return string
     */
    public function getManuName()
    {
        return $this->manuName;
    }

    /**
     * Sets a new manuName
     *
     * @param string $manuName
     * @return self
     */
    public function setManuName($manuName)
    {
        $this->manuName = $manuName;
        return $this;
    }

    /**
     * Gets as modId
     *
     * @return int
     */
    public function getModId()
    {
        return $this->modId;
    }

    /**
     * Sets a new modId
     *
     * @param int $modId
     * @return self
     */
    public function setModId($modId)
    {
        $this->modId = $modId;
        return $this;
    }

    /**
     * Gets as modelName
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Sets a new modelName
     *
     * @param string $modelName
     * @return self
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
        return $this;
    }

    /**
     * Gets as motorType
     *
     * @return string
     */
    public function getMotorType()
    {
        return $this->motorType;
    }

    /**
     * Sets a new motorType
     *
     * @param string $motorType
     * @return self
     */
    public function setMotorType($motorType)
    {
        $this->motorType = $motorType;
        return $this;
    }

    /**
     * Gets as powerHpFrom
     *
     * @return int
     */
    public function getPowerHpFrom()
    {
        return $this->powerHpFrom;
    }

    /**
     * Sets a new powerHpFrom
     *
     * @param int $powerHpFrom
     * @return self
     */
    public function setPowerHpFrom($powerHpFrom)
    {
        $this->powerHpFrom = $powerHpFrom;
        return $this;
    }

    /**
     * Gets as powerHpTo
     *
     * @return int
     */
    public function getPowerHpTo()
    {
        return $this->powerHpTo;
    }

    /**
     * Sets a new powerHpTo
     *
     * @param int $powerHpTo
     * @return self
     */
    public function setPowerHpTo($powerHpTo)
    {
        $this->powerHpTo = $powerHpTo;
        return $this;
    }

    /**
     * Gets as powerKwFrom
     *
     * @return int
     */
    public function getPowerKwFrom()
    {
        return $this->powerKwFrom;
    }

    /**
     * Sets a new powerKwFrom
     *
     * @param int $powerKwFrom
     * @return self
     */
    public function setPowerKwFrom($powerKwFrom)
    {
        $this->powerKwFrom = $powerKwFrom;
        return $this;
    }

    /**
     * Gets as powerKwTo
     *
     * @return int
     */
    public function getPowerKwTo()
    {
        return $this->powerKwTo;
    }

    /**
     * Sets a new powerKwTo
     *
     * @param int $powerKwTo
     * @return self
     */
    public function setPowerKwTo($powerKwTo)
    {
        $this->powerKwTo = $powerKwTo;
        return $this;
    }

    /**
     * Gets as tonnage
     *
     * @return int
     */
    public function getTonnage()
    {
        return $this->tonnage;
    }

    /**
     * Sets a new tonnage
     *
     * @param int $tonnage
     * @return self
     */
    public function setTonnage($tonnage)
    {
        $this->tonnage = $tonnage;
        return $this;
    }

    /**
     * Gets as typeName
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Sets a new typeName
     *
     * @param string $typeName
     * @return self
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * Gets as typeNumber
     *
     * @return int
     */
    public function getTypeNumber()
    {
        return $this->typeNumber;
    }

    /**
     * Sets a new typeNumber
     *
     * @param int $typeNumber
     * @return self
     */
    public function setTypeNumber($typeNumber)
    {
        $this->typeNumber = $typeNumber;
        return $this;
    }

    /**
     * Gets as valves
     *
     * @return int
     */
    public function getValves()
    {
        return $this->valves;
    }

    /**
     * Sets a new valves
     *
     * @param int $valves
     * @return self
     */
    public function setValves($valves)
    {
        $this->valves = $valves;
        return $this;
    }

    /**
     * Gets as yearOfConstrFrom
     *
     * @return int
     */
    public function getYearOfConstrFrom()
    {
        return $this->yearOfConstrFrom;
    }

    /**
     * Sets a new yearOfConstrFrom
     *
     * @param int $yearOfConstrFrom
     * @return self
     */
    public function setYearOfConstrFrom($yearOfConstrFrom)
    {
        $this->yearOfConstrFrom = $yearOfConstrFrom;
        return $this;
    }

    /**
     * Gets as yearOfConstrTo
     *
     * @return int
     */
    public function getYearOfConstrTo()
    {
        return $this->yearOfConstrTo;
    }

    /**
     * Sets a new yearOfConstrTo
     *
     * @param int $yearOfConstrTo
     * @return self
     */
    public function setYearOfConstrTo($yearOfConstrTo)
    {
        $this->yearOfConstrTo = $yearOfConstrTo;
        return $this;
    }

    /**
     * Gets as rmiTypeId
     *
     * The TecRMI Type Id (if available)
     *
     * @return int
     */
    public function getRmiTypeId()
    {
        return $this->rmiTypeId;
    }

    /**
     * Sets a new rmiTypeId
     *
     * The TecRMI Type Id (if available)
     *
     * @param int $rmiTypeId
     * @return self
     */
    public function setRmiTypeId($rmiTypeId)
    {
        $this->rmiTypeId = $rmiTypeId;
        return $this;
    }


}

