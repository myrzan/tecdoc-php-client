<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing DataSupplierFacetCountType
 *
 * 
 * XSD Type: DataSupplierFacetCount
 */
class DataSupplierFacetCount
{

    /**
     * @var int $dataSupplierId
     */
    private $dataSupplierId = null;

    /**
     * @var int $mfrId
     */
    private $mfrId = null;

    /**
     * @var string $mfrName
     */
    private $mfrName = null;

    /**
     * @var int $count
     */
    private $count = null;

    /**
     * Gets as dataSupplierId
     *
     * @return int
     */
    public function getDataSupplierId()
    {
        return $this->dataSupplierId;
    }

    /**
     * Sets a new dataSupplierId
     *
     * @param int $dataSupplierId
     * @return self
     */
    public function setDataSupplierId($dataSupplierId)
    {
        $this->dataSupplierId = $dataSupplierId;
        return $this;
    }

    /**
     * Gets as mfrId
     *
     * @return int
     */
    public function getMfrId()
    {
        return $this->mfrId;
    }

    /**
     * Sets a new mfrId
     *
     * @param int $mfrId
     * @return self
     */
    public function setMfrId($mfrId)
    {
        $this->mfrId = $mfrId;
        return $this;
    }

    /**
     * Gets as mfrName
     *
     * @return string
     */
    public function getMfrName()
    {
        return $this->mfrName;
    }

    /**
     * Sets a new mfrName
     *
     * @param string $mfrName
     * @return self
     */
    public function setMfrName($mfrName)
    {
        $this->mfrName = $mfrName;
        return $this;
    }

    /**
     * Gets as count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }


}

