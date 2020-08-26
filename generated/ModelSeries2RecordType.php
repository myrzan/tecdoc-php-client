<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ModelSeries2RecordType
 *
 * 
 * XSD Type: modelSeries2Record
 */
class ModelSeries2RecordType extends ModelSeries2RecordSrcType
{

    /**
     * @var int $favorFlag
     */
    private $favorFlag = null;

    /**
     * @var int $modelId
     */
    private $modelId = null;

    /**
     * @var string $modelname
     */
    private $modelname = null;

    /**
     * @var int $yearOfConstrFrom
     */
    private $yearOfConstrFrom = null;

    /**
     * @var int $yearOfConstrTo
     */
    private $yearOfConstrTo = null;

    /**
     * Gets as favorFlag
     *
     * @return int
     */
    public function getFavorFlag()
    {
        return $this->favorFlag;
    }

    /**
     * Sets a new favorFlag
     *
     * @param int $favorFlag
     * @return self
     */
    public function setFavorFlag($favorFlag)
    {
        $this->favorFlag = $favorFlag;
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
     * Gets as modelname
     *
     * @return string
     */
    public function getModelname()
    {
        return $this->modelname;
    }

    /**
     * Sets a new modelname
     *
     * @param string $modelname
     * @return self
     */
    public function setModelname($modelname)
    {
        $this->modelname = $modelname;
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


}

