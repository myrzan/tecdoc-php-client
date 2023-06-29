<?php

namespace Myrzan\TecDocClient\Generated\Record;

use Myrzan\TecDocClient\Generated\Record\CriteriaInfo;
use Myrzan\TecDocClient\Generated\Record\CriteriaValueCounts;

/**
 * Class representing CriteriaFacetCountType
 *
 * 
 * XSD Type: CriteriaFacetCount
 */
class CriteriaFacetCount
{

    /**
     * @var CriteriaInfo $criteria
     */
    private $criteria = null;

    /**
     * @var CriteriaValueCounts[] $criteriaValueCounts
     */
    private $criteriaValueCounts = [
        
    ];

    /**
     * Gets as criteria
     *
     * @return CriteriaInfo
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Sets a new criteria
     *
     * @param CriteriaInfo $criteria
     * @return self
     */
    public function setCriteria(CriteriaInfo $criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Adds as criteriaValueCounts
     *
     * @param CriteriaValueCounts $criteriaValueCounts
     *@return self
     */
    public function addToCriteriaValueCounts(CriteriaValueCounts $criteriaValueCounts)
    {
        $this->criteriaValueCounts[] = $criteriaValueCounts;
        return $this;
    }

    /**
     * isset criteriaValueCounts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCriteriaValueCounts($index)
    {
        return isset($this->criteriaValueCounts[$index]);
    }

    /**
     * unset criteriaValueCounts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCriteriaValueCounts($index)
    {
        unset($this->criteriaValueCounts[$index]);
    }

    /**
     * Gets as criteriaValueCounts
     *
     * @return CriteriaValueCounts[]
     */
    public function getCriteriaValueCounts()
    {
        return $this->criteriaValueCounts;
    }

    /**
     * Sets a new criteriaValueCounts
     *
     * @param CriteriaValueCounts[] $criteriaValueCounts
     * @return self
     */
    public function setCriteriaValueCounts(array $criteriaValueCounts)
    {
        $this->criteriaValueCounts = $criteriaValueCounts;
        return $this;
    }


}

