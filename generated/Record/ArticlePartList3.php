<?php

namespace Myrzan\TecDocClient\Generated\Record;

use Myrzan\TecDocClient\Generated\Record\ArticlePartList2;

/**
 * Class representing ArticlePartList3
 *
 * 
 * XSD Type: articlePartList3Record
 */
class ArticlePartList3 
{

    /**
     * @var ArticlePartListAttributs[] $partlistAttributs
     */
    private $partlistAttributs = null;

    /**
     * @var ArticlePartList2 $partlistDetails
     */
    private $partlistDetails = null;

    /**
     * Adds as array
     *
     * @param ArticlePartListAttributs $array
     * @return self
     */
    public function addToPartlistAttributs(ArticlePartListAttributs $array)
    {
        $this->partlistAttributs[] = $array;
        return $this;
    }

    /**
     * isset partlistAttributs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartlistAttributs($index)
    {
        return isset($this->partlistAttributs[$index]);
    }

    /**
     * unset partlistAttributs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartlistAttributs($index)
    {
        unset($this->partlistAttributs[$index]);
    }

    /**
     * Gets as partlistAttributs
     *
     * @return ArticlePartListAttributs[]
     */
    public function getPartlistAttributs()
    {
        return $this->partlistAttributs;
    }

    /**
     * Sets a new partlistAttributs
     *
     * @param ArticlePartListAttributs[] $partlistAttributs
     * @return self
     */
    public function setPartlistAttributs(array $partlistAttributs)
    {
        $this->partlistAttributs = $partlistAttributs;
        return $this;
    }

    /**
     * Gets as partlistDetails
     *
     * @return ArticlePartList2
     */
    public function getPartlistDetails()
    {
        return $this->partlistDetails;
    }

    /**
     * Sets a new partlistDetails
     *
     * @param ArticlePartList2 $partlistDetails
     * @return self
     */
    public function setPartlistDetails(ArticlePartList2 $partlistDetails)
    {
        $this->partlistDetails = $partlistDetails;
        return $this;
    }


}

