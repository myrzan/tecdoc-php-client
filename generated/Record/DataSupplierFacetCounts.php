<?php

namespace Myrzan\TecDocClient\Generated\Record;

use Myrzan\TecDocClient\Generated\Record\DataSupplierFacetCount;

/**
 * Class representing DataSupplierFacetCountsType
 *
 * 
 * XSD Type: DataSupplierFacetCounts
 */
class DataSupplierFacetCounts
{

    /**
     * The total number of facet counts available
     *
     * @var int $total
     */
    private $total = null;

    /**
     * @var DataSupplierFacetCount[] $counts
     */
    private $counts = [
        
    ];

    /**
     * Gets as total
     *
     * The total number of facet counts available
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total number of facet counts available
     *
     * @param int $total
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Adds as counts
     *
     * @param DataSupplierFacetCount $counts
     * @return self
     */
    public function addToCounts(DataSupplierFacetCount $counts)
    {
        $this->counts[] = $counts;
        return $this;
    }

    /**
     * isset counts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCounts($index)
    {
        return isset($this->counts[$index]);
    }

    /**
     * unset counts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCounts($index)
    {
        unset($this->counts[$index]);
    }

    /**
     * Gets as counts
     *
     * @return DataSupplierFacetCount[]
     */
    public function getCounts()
    {
        return $this->counts;
    }

    /**
     * Sets a new counts
     *
     * @param DataSupplierFacetCount[] $counts
     * @return self
     */
    public function setCounts(array $counts)
    {
        $this->counts = $counts;
        return $this;
    }


}

