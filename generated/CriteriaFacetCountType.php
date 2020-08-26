<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing CriteriaFacetCountType
 *
 * 
 * XSD Type: CriteriaFacetCount
 */
class CriteriaFacetCountType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\CriteriaInfoType $criteria
     */
    private $criteria = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\CriteriaValueCountsType[] $criteriaValueCounts
     */
    private $criteriaValueCounts = [
        
    ];

    /**
     * Gets as criteria
     *
     * @return \Myrzan\TecDocClient\Generated\CriteriaInfoType
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Sets a new criteria
     *
     * @param \Myrzan\TecDocClient\Generated\CriteriaInfoType $criteria
     * @return self
     */
    public function setCriteria(\Myrzan\TecDocClient\Generated\CriteriaInfoType $criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Adds as criteriaValueCounts
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\CriteriaValueCountsType $criteriaValueCounts
     */
    public function addToCriteriaValueCounts(\Myrzan\TecDocClient\Generated\CriteriaValueCountsType $criteriaValueCounts)
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
     * @return \Myrzan\TecDocClient\Generated\CriteriaValueCountsType[]
     */
    public function getCriteriaValueCounts()
    {
        return $this->criteriaValueCounts;
    }

    /**
     * Sets a new criteriaValueCounts
     *
     * @param \Myrzan\TecDocClient\Generated\CriteriaValueCountsType[] $criteriaValueCounts
     * @return self
     */
    public function setCriteriaValueCounts(array $criteriaValueCounts)
    {
        $this->criteriaValueCounts = $criteriaValueCounts;
        return $this;
    }


}

