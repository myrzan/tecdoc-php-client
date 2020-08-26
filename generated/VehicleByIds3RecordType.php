<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VehicleByIds3RecordType
 *
 * 
 * XSD Type: vehicleByIds3Record
 */
class VehicleByIds3RecordType extends VehicleByIds3RecordSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\AxleByCarIdRecordType[] $axles
     */
    private $axles = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\CabsByCarIdRecordType[] $cabs
     */
    private $cabs = null;

    /**
     * @var int $carId
     */
    private $carId = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\KbaNumbersByVehicleIdRecordType[] $kbaNumbers
     */
    private $kbaNumbers = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\MotorCodesByCarIdRecordType[] $motorCodes
     */
    private $motorCodes = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\VehiclePrototypeRecordType[] $protoTypes
     */
    private $protoTypes = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\SecondaryTypesByCarIdRecordType[] $secondaryTypes
     */
    private $secondaryTypes = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\VehicleByIdRecordType $vehicleDetails
     */
    private $vehicleDetails = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\VehicleRegistrationInfoByIdRecordType $vehicleRegistrationInfo
     */
    private $vehicleRegistrationInfo = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\WheelBasesByCarIdRecordType[] $wheelBases
     */
    private $wheelBases = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\AxleByCarIdRecordType $array
     */
    public function addToAxles(\Myrzan\TecDocClient\Generated\AxleByCarIdRecordType $array)
    {
        $this->axles[] = $array;
        return $this;
    }

    /**
     * isset axles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAxles($index)
    {
        return isset($this->axles[$index]);
    }

    /**
     * unset axles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAxles($index)
    {
        unset($this->axles[$index]);
    }

    /**
     * Gets as axles
     *
     * @return \Myrzan\TecDocClient\Generated\AxleByCarIdRecordType[]
     */
    public function getAxles()
    {
        return $this->axles;
    }

    /**
     * Sets a new axles
     *
     * @param \Myrzan\TecDocClient\Generated\AxleByCarIdRecordType[] $axles
     * @return self
     */
    public function setAxles(array $axles)
    {
        $this->axles = $axles;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\CabsByCarIdRecordType $array
     */
    public function addToCabs(\Myrzan\TecDocClient\Generated\CabsByCarIdRecordType $array)
    {
        $this->cabs[] = $array;
        return $this;
    }

    /**
     * isset cabs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCabs($index)
    {
        return isset($this->cabs[$index]);
    }

    /**
     * unset cabs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCabs($index)
    {
        unset($this->cabs[$index]);
    }

    /**
     * Gets as cabs
     *
     * @return \Myrzan\TecDocClient\Generated\CabsByCarIdRecordType[]
     */
    public function getCabs()
    {
        return $this->cabs;
    }

    /**
     * Sets a new cabs
     *
     * @param \Myrzan\TecDocClient\Generated\CabsByCarIdRecordType[] $cabs
     * @return self
     */
    public function setCabs(array $cabs)
    {
        $this->cabs = $cabs;
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
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\KbaNumbersByVehicleIdRecordType $array
     */
    public function addToKbaNumbers(\Myrzan\TecDocClient\Generated\KbaNumbersByVehicleIdRecordType $array)
    {
        $this->kbaNumbers[] = $array;
        return $this;
    }

    /**
     * isset kbaNumbers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKbaNumbers($index)
    {
        return isset($this->kbaNumbers[$index]);
    }

    /**
     * unset kbaNumbers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKbaNumbers($index)
    {
        unset($this->kbaNumbers[$index]);
    }

    /**
     * Gets as kbaNumbers
     *
     * @return \Myrzan\TecDocClient\Generated\KbaNumbersByVehicleIdRecordType[]
     */
    public function getKbaNumbers()
    {
        return $this->kbaNumbers;
    }

    /**
     * Sets a new kbaNumbers
     *
     * @param \Myrzan\TecDocClient\Generated\KbaNumbersByVehicleIdRecordType[] $kbaNumbers
     * @return self
     */
    public function setKbaNumbers(array $kbaNumbers)
    {
        $this->kbaNumbers = $kbaNumbers;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\MotorCodesByCarIdRecordType $array
     */
    public function addToMotorCodes(\Myrzan\TecDocClient\Generated\MotorCodesByCarIdRecordType $array)
    {
        $this->motorCodes[] = $array;
        return $this;
    }

    /**
     * isset motorCodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMotorCodes($index)
    {
        return isset($this->motorCodes[$index]);
    }

    /**
     * unset motorCodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMotorCodes($index)
    {
        unset($this->motorCodes[$index]);
    }

    /**
     * Gets as motorCodes
     *
     * @return \Myrzan\TecDocClient\Generated\MotorCodesByCarIdRecordType[]
     */
    public function getMotorCodes()
    {
        return $this->motorCodes;
    }

    /**
     * Sets a new motorCodes
     *
     * @param \Myrzan\TecDocClient\Generated\MotorCodesByCarIdRecordType[] $motorCodes
     * @return self
     */
    public function setMotorCodes(array $motorCodes)
    {
        $this->motorCodes = $motorCodes;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\VehiclePrototypeRecordType $array
     */
    public function addToProtoTypes(\Myrzan\TecDocClient\Generated\VehiclePrototypeRecordType $array)
    {
        $this->protoTypes[] = $array;
        return $this;
    }

    /**
     * isset protoTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProtoTypes($index)
    {
        return isset($this->protoTypes[$index]);
    }

    /**
     * unset protoTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProtoTypes($index)
    {
        unset($this->protoTypes[$index]);
    }

    /**
     * Gets as protoTypes
     *
     * @return \Myrzan\TecDocClient\Generated\VehiclePrototypeRecordType[]
     */
    public function getProtoTypes()
    {
        return $this->protoTypes;
    }

    /**
     * Sets a new protoTypes
     *
     * @param \Myrzan\TecDocClient\Generated\VehiclePrototypeRecordType[] $protoTypes
     * @return self
     */
    public function setProtoTypes(array $protoTypes)
    {
        $this->protoTypes = $protoTypes;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\SecondaryTypesByCarIdRecordType $array
     */
    public function addToSecondaryTypes(\Myrzan\TecDocClient\Generated\SecondaryTypesByCarIdRecordType $array)
    {
        $this->secondaryTypes[] = $array;
        return $this;
    }

    /**
     * isset secondaryTypes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecondaryTypes($index)
    {
        return isset($this->secondaryTypes[$index]);
    }

    /**
     * unset secondaryTypes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecondaryTypes($index)
    {
        unset($this->secondaryTypes[$index]);
    }

    /**
     * Gets as secondaryTypes
     *
     * @return \Myrzan\TecDocClient\Generated\SecondaryTypesByCarIdRecordType[]
     */
    public function getSecondaryTypes()
    {
        return $this->secondaryTypes;
    }

    /**
     * Sets a new secondaryTypes
     *
     * @param \Myrzan\TecDocClient\Generated\SecondaryTypesByCarIdRecordType[] $secondaryTypes
     * @return self
     */
    public function setSecondaryTypes(array $secondaryTypes)
    {
        $this->secondaryTypes = $secondaryTypes;
        return $this;
    }

    /**
     * Gets as vehicleDetails
     *
     * @return \Myrzan\TecDocClient\Generated\VehicleByIdRecordType
     */
    public function getVehicleDetails()
    {
        return $this->vehicleDetails;
    }

    /**
     * Sets a new vehicleDetails
     *
     * @param \Myrzan\TecDocClient\Generated\VehicleByIdRecordType $vehicleDetails
     * @return self
     */
    public function setVehicleDetails(\Myrzan\TecDocClient\Generated\VehicleByIdRecordType $vehicleDetails)
    {
        $this->vehicleDetails = $vehicleDetails;
        return $this;
    }

    /**
     * Gets as vehicleRegistrationInfo
     *
     * @return \Myrzan\TecDocClient\Generated\VehicleRegistrationInfoByIdRecordType
     */
    public function getVehicleRegistrationInfo()
    {
        return $this->vehicleRegistrationInfo;
    }

    /**
     * Sets a new vehicleRegistrationInfo
     *
     * @param \Myrzan\TecDocClient\Generated\VehicleRegistrationInfoByIdRecordType $vehicleRegistrationInfo
     * @return self
     */
    public function setVehicleRegistrationInfo(\Myrzan\TecDocClient\Generated\VehicleRegistrationInfoByIdRecordType $vehicleRegistrationInfo)
    {
        $this->vehicleRegistrationInfo = $vehicleRegistrationInfo;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\WheelBasesByCarIdRecordType $array
     */
    public function addToWheelBases(\Myrzan\TecDocClient\Generated\WheelBasesByCarIdRecordType $array)
    {
        $this->wheelBases[] = $array;
        return $this;
    }

    /**
     * isset wheelBases
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWheelBases($index)
    {
        return isset($this->wheelBases[$index]);
    }

    /**
     * unset wheelBases
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWheelBases($index)
    {
        unset($this->wheelBases[$index]);
    }

    /**
     * Gets as wheelBases
     *
     * @return \Myrzan\TecDocClient\Generated\WheelBasesByCarIdRecordType[]
     */
    public function getWheelBases()
    {
        return $this->wheelBases;
    }

    /**
     * Sets a new wheelBases
     *
     * @param \Myrzan\TecDocClient\Generated\WheelBasesByCarIdRecordType[] $wheelBases
     * @return self
     */
    public function setWheelBases(array $wheelBases)
    {
        $this->wheelBases = $wheelBases;
        return $this;
    }


}

