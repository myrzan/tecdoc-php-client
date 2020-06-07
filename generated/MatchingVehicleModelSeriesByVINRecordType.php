<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MatchingVehicleModelSeriesByVINRecordType
 *
 * 
 * XSD Type: matchingVehicleModelSeriesByVINRecord
 */
class MatchingVehicleModelSeriesByVINRecordType extends MatchingVehicleModelSeriesByVINRecordSrcType
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
     * @var string $modelName
     */
    private $modelName = null;

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


}

