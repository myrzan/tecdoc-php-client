<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing MatchesByVIN
 *
 * 
 * XSD Type: matchesByVINRecord
 */
class MatchesByVIN
{

    /**
     * @var MatchingManufacturersByVIN[] $matchingManufacturers
     */
    private $matchingManufacturers = null;

    /**
     * @var MatchingVehicleModelSeriesByVIN[] $matchingModels
     */
    private $matchingModels = null;

    /**
     * @var MatchingVehicleIdsByVIN[] $matchingVehicles
     */
    private $matchingVehicles = null;

    /**
     * @var int $matchingVehiclesCount
     */
    private $matchingVehiclesCount = null;

    /**
     * @var GetVehiclesByVINDataSource[] $dataSource
     */
    private $dataSource = [
        
    ];

    /**
     * Adds as array
     *
     * @param MatchingManufacturersByVIN $array
     * @return self
     */
    public function addToMatchingManufacturers(MatchingManufacturersByVIN $array)
    {
        $this->matchingManufacturers[] = $array;
        return $this;
    }

    /**
     * isset matchingManufacturers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMatchingManufacturers($index)
    {
        return isset($this->matchingManufacturers[$index]);
    }

    /**
     * unset matchingManufacturers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMatchingManufacturers($index)
    {
        unset($this->matchingManufacturers[$index]);
    }

    /**
     * Gets as matchingManufacturers
     *
     * @return MatchingManufacturersByVIN[]
     */
    public function getMatchingManufacturers()
    {
        return $this->matchingManufacturers;
    }

    /**
     * Sets a new matchingManufacturers
     *
     * @param MatchingManufacturersByVIN[] $matchingManufacturers
     * @return self
     */
    public function setMatchingManufacturers(array $matchingManufacturers)
    {
        $this->matchingManufacturers = $matchingManufacturers;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param MatchingVehicleModelSeriesByVIN $array
     * @return self
     */
    public function addToMatchingModels(MatchingVehicleModelSeriesByVIN $array)
    {
        $this->matchingModels[] = $array;
        return $this;
    }

    /**
     * isset matchingModels
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMatchingModels($index)
    {
        return isset($this->matchingModels[$index]);
    }

    /**
     * unset matchingModels
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMatchingModels($index)
    {
        unset($this->matchingModels[$index]);
    }

    /**
     * Gets as matchingModels
     *
     * @return MatchingVehicleModelSeriesByVIN[]
     */
    public function getMatchingModels()
    {
        return $this->matchingModels;
    }

    /**
     * Sets a new matchingModels
     *
     * @param MatchingVehicleModelSeriesByVIN[] $matchingModels
     * @return self
     */
    public function setMatchingModels(array $matchingModels)
    {
        $this->matchingModels = $matchingModels;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param MatchingVehicleIdsByVIN $array
     * @return self
     */
    public function addToMatchingVehicles(MatchingVehicleIdsByVIN $array)
    {
        $this->matchingVehicles[] = $array;
        return $this;
    }

    /**
     * isset matchingVehicles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMatchingVehicles($index)
    {
        return isset($this->matchingVehicles[$index]);
    }

    /**
     * unset matchingVehicles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMatchingVehicles($index)
    {
        unset($this->matchingVehicles[$index]);
    }

    /**
     * Gets as matchingVehicles
     *
     * @return MatchingVehicleIdsByVIN[]
     */
    public function getMatchingVehicles()
    {
        return $this->matchingVehicles;
    }

    /**
     * Sets a new matchingVehicles
     *
     * @param MatchingVehicleIdsByVIN[] $matchingVehicles
     * @return self
     */
    public function setMatchingVehicles(array $matchingVehicles)
    {
        $this->matchingVehicles = $matchingVehicles;
        return $this;
    }

    /**
     * Gets as matchingVehiclesCount
     *
     * @return int
     */
    public function getMatchingVehiclesCount()
    {
        return $this->matchingVehiclesCount;
    }

    /**
     * Sets a new matchingVehiclesCount
     *
     * @param int $matchingVehiclesCount
     * @return self
     */
    public function setMatchingVehiclesCount($matchingVehiclesCount)
    {
        $this->matchingVehiclesCount = $matchingVehiclesCount;
        return $this;
    }

    /**
     * Adds as dataSource
     *
     * @param GetVehiclesByVINDataSource $dataSource
     * @return self
     */
    public function addToDataSource(GetVehiclesByVINDataSource $dataSource)
    {
        $this->dataSource[] = $dataSource;
        return $this;
    }

    /**
     * isset dataSource
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataSource($index)
    {
        return isset($this->dataSource[$index]);
    }

    /**
     * unset dataSource
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataSource($index)
    {
        unset($this->dataSource[$index]);
    }

    /**
     * Gets as dataSource
     *
     * @return GetVehiclesByVINDataSource[]
     */
    public function getDataSource()
    {
        return $this->dataSource;
    }

    /**
     * Sets a new dataSource
     *
     * @param GetVehiclesByVINDataSource[] $dataSource
     * @return self
     */
    public function setDataSource(array $dataSource)
    {
        $this->dataSource = $dataSource;
        return $this;
    }


}

