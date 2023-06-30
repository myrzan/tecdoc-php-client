<?php

namespace Myrzan\TecDocClient\Generated\Record;

use Myrzan\TecDocClient\Generated\Record\VehiclePrototype;
use Myrzan\TecDocClient\Generated\Record\VehicleRegistrationInfoById;
use Myrzan\TecDocClient\Generated\Record\WheelBasesByCarId;

/**
 * Class representing VehicleByIds4
 *
 * 
 * XSD Type: vehicleByIds4Record
 */
class VehicleByIds4
{

    /**
     * @var AxleByCarId[] $axles
     */
    private $axles = null;

    /**
     * @var CabsByCarId[] $cabs
     */
    private $cabs = null;

    /**
     * @var int $carId
     */
    private $carId = null;

    /**
     * @var KbaNumbersByVehicleId[] $kbaNumbers
     */
    private $kbaNumbers = null;

    /**
     * @var MotorCodesByCarId[] $motorCodes
     */
    private $motorCodes = null;

    /**
     * @var VehiclePrototype[] $protoTypes
     */
    private $protoTypes = null;

    /**
     * @var SecondaryTypesByCarId[] $secondaryTypes
     */
    private $secondaryTypes = null;

    /**
     * @var VehicleById $vehicleDetails
     */
    private $vehicleDetails = null;

    /**
     * @var string $vehicleDocId
     */
    private $vehicleDocId = null;

    /**
     * @var VehicleRegistrationInfoById $vehicleRegistrationInfo
     */
    private $vehicleRegistrationInfo = null;

    /**
     * @var WheelBasesByCarId[] $wheelBases
     */
    private $wheelBases = null;

    /**
     * Adds as array
     *
     * @param AxleByCarId $array
     * @return self
     */
    public function addToAxles(AxleByCarId $array)
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
     * @return AxleByCarId[]
     */
    public function getAxles()
    {
        return $this->axles;
    }

    /**
     * Sets a new axles
     *
     * @param AxleByCarId[] $axles
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
     * @param CabsByCarId $array
     * @return self
     */
    public function addToCabs(CabsByCarId $array)
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
     * @return CabsByCarId[]
     */
    public function getCabs()
    {
        return $this->cabs;
    }

    /**
     * Sets a new cabs
     *
     * @param CabsByCarId[] $cabs
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
     * @param KbaNumbersByVehicleId $array
     * @return self
     */
    public function addToKbaNumbers(KbaNumbersByVehicleId $array)
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
     * @return KbaNumbersByVehicleId[]
     */
    public function getKbaNumbers()
    {
        return $this->kbaNumbers;
    }

    /**
     * Sets a new kbaNumbers
     *
     * @param KbaNumbersByVehicleId[] $kbaNumbers
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
     * @param MotorCodesByCarId $array
     * @return self
     */
    public function addToMotorCodes(MotorCodesByCarId $array)
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
     * @return MotorCodesByCarId[]
     */
    public function getMotorCodes()
    {
        return $this->motorCodes;
    }

    /**
     * Sets a new motorCodes
     *
     * @param MotorCodesByCarId[] $motorCodes
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
     * @param VehiclePrototype $array
     * @return self
     */
    public function addToProtoTypes(VehiclePrototype $array)
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
     * @return VehiclePrototype[]
     */
    public function getProtoTypes()
    {
        return $this->protoTypes;
    }

    /**
     * Sets a new protoTypes
     *
     * @param VehiclePrototype[] $protoTypes
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
     * @param SecondaryTypesByCarId $array
     * @return self
     */
    public function addToSecondaryTypes(SecondaryTypesByCarId $array)
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
     * @return SecondaryTypesByCarId[]
     */
    public function getSecondaryTypes()
    {
        return $this->secondaryTypes;
    }

    /**
     * Sets a new secondaryTypes
     *
     * @param SecondaryTypesByCarId[] $secondaryTypes
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
     * @return VehicleById
     */
    public function getVehicleDetails()
    {
        return $this->vehicleDetails;
    }

    /**
     * Sets a new vehicleDetails
     *
     * @param VehicleById $vehicleDetails
     * @return self
     */
    public function setVehicleDetails(VehicleById $vehicleDetails)
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

    /**
     * Gets as vehicleRegistrationInfo
     *
     * @return VehicleRegistrationInfoById
     */
    public function getVehicleRegistrationInfo()
    {
        return $this->vehicleRegistrationInfo;
    }

    /**
     * Sets a new vehicleRegistrationInfo
     *
     * @param VehicleRegistrationInfoById $vehicleRegistrationInfo
     * @return self
     */
    public function setVehicleRegistrationInfo(VehicleRegistrationInfoById $vehicleRegistrationInfo)
    {
        $this->vehicleRegistrationInfo = $vehicleRegistrationInfo;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param WheelBasesByCarId $array
     * @return self
     */
    public function addToWheelBases(WheelBasesByCarId $array)
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
     * @return WheelBasesByCarId[]
     */
    public function getWheelBases()
    {
        return $this->wheelBases;
    }

    /**
     * Sets a new wheelBases
     *
     * @param WheelBasesByCarId[] $wheelBases
     * @return self
     */
    public function setWheelBases(array $wheelBases)
    {
        $this->wheelBases = $wheelBases;
        return $this;
    }


}

