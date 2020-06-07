<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MatchesByVINRecordType
 *
 * 
 * XSD Type: matchesByVINRecord
 */
class MatchesByVINRecordType extends MatchesByVINRecordSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\MatchingManufacturersByVINRecordType[] $matchingManufacturers
     */
    private $matchingManufacturers = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\MatchingVehicleModelSeriesByVINRecordType[] $matchingModels
     */
    private $matchingModels = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\MatchingVehicleIdsByVINRecordType[] $matchingVehicles
     */
    private $matchingVehicles = null;

    /**
     * @var int $matchingVehiclesCount
     */
    private $matchingVehiclesCount = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\GetVehiclesByVINDataSourceType[] $dataSource
     */
    private $dataSource = [
        
    ];

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\MatchingManufacturersByVINRecordType $array
     */
    public function addToMatchingManufacturers(\Baumeister\TecDocClient\Generated\MatchingManufacturersByVINRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\MatchingManufacturersByVINRecordType[]
     */
    public function getMatchingManufacturers()
    {
        return $this->matchingManufacturers;
    }

    /**
     * Sets a new matchingManufacturers
     *
     * @param \Baumeister\TecDocClient\Generated\MatchingManufacturersByVINRecordType[] $matchingManufacturers
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
     * @return self
     * @param \Baumeister\TecDocClient\Generated\MatchingVehicleModelSeriesByVINRecordType $array
     */
    public function addToMatchingModels(\Baumeister\TecDocClient\Generated\MatchingVehicleModelSeriesByVINRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\MatchingVehicleModelSeriesByVINRecordType[]
     */
    public function getMatchingModels()
    {
        return $this->matchingModels;
    }

    /**
     * Sets a new matchingModels
     *
     * @param \Baumeister\TecDocClient\Generated\MatchingVehicleModelSeriesByVINRecordType[] $matchingModels
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
     * @return self
     * @param \Baumeister\TecDocClient\Generated\MatchingVehicleIdsByVINRecordType $array
     */
    public function addToMatchingVehicles(\Baumeister\TecDocClient\Generated\MatchingVehicleIdsByVINRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\MatchingVehicleIdsByVINRecordType[]
     */
    public function getMatchingVehicles()
    {
        return $this->matchingVehicles;
    }

    /**
     * Sets a new matchingVehicles
     *
     * @param \Baumeister\TecDocClient\Generated\MatchingVehicleIdsByVINRecordType[] $matchingVehicles
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
     * @return self
     * @param \Baumeister\TecDocClient\Generated\GetVehiclesByVINDataSourceType $dataSource
     */
    public function addToDataSource(\Baumeister\TecDocClient\Generated\GetVehiclesByVINDataSourceType $dataSource)
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
     * @return \Baumeister\TecDocClient\Generated\GetVehiclesByVINDataSourceType[]
     */
    public function getDataSource()
    {
        return $this->dataSource;
    }

    /**
     * Sets a new dataSource
     *
     * @param \Baumeister\TecDocClient\Generated\GetVehiclesByVINDataSourceType[] $dataSource
     * @return self
     */
    public function setDataSource(array $dataSource)
    {
        $this->dataSource = $dataSource;
        return $this;
    }


}

