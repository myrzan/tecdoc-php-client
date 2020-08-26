<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing AssemblyGroupFacetCountsType
 *
 * 
 * XSD Type: AssemblyGroupFacetCounts
 */
class AssemblyGroupFacetCountsType
{

    /**
     * The total number of facet counts available
     *
     * @var int $total
     */
    private $total = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountType[] $counts
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
     * @return self
     * @param \Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountType $counts
     */
    public function addToCounts(\Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountType $counts)
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
     * @return \Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountType[]
     */
    public function getCounts()
    {
        return $this->counts;
    }

    /**
     * Sets a new counts
     *
     * @param \Myrzan\TecDocClient\Generated\AssemblyGroupFacetCountType[] $counts
     * @return self
     */
    public function setCounts(array $counts)
    {
        $this->counts = $counts;
        return $this;
    }


}

