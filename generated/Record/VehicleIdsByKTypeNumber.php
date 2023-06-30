<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing VehicleIdsByKTypeNumber
 *
 * 
 * XSD Type: vehicleIdsByKTypeNumberRecord
 */
class VehicleIdsByKTypeNumber
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
     * The TecDoc k-type number (if applicable)
     *
     * @var int $kTypeNumber
     */
    private $kTypeNumber = null;

    /**
     * The TecDoc n-type number (if applicable)
     *
     * @var int $nTypeNumber
     */
    private $nTypeNumber = null;

    /**
     * The TecRMI Type Id (if available)
     *
     * @var int $rmiTypeId
     */
    private $rmiTypeId = null;

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
     * Gets as kTypeNumber
     *
     * The TecDoc k-type number (if applicable)
     *
     * @return int
     */
    public function getKTypeNumber()
    {
        return $this->kTypeNumber;
    }

    /**
     * Sets a new kTypeNumber
     *
     * The TecDoc k-type number (if applicable)
     *
     * @param int $kTypeNumber
     * @return self
     */
    public function setKTypeNumber($kTypeNumber)
    {
        $this->kTypeNumber = $kTypeNumber;
        return $this;
    }

    /**
     * Gets as nTypeNumber
     *
     * The TecDoc n-type number (if applicable)
     *
     * @return int
     */
    public function getNTypeNumber()
    {
        return $this->nTypeNumber;
    }

    /**
     * Sets a new nTypeNumber
     *
     * The TecDoc n-type number (if applicable)
     *
     * @param int $nTypeNumber
     * @return self
     */
    public function setNTypeNumber($nTypeNumber)
    {
        $this->nTypeNumber = $nTypeNumber;
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

