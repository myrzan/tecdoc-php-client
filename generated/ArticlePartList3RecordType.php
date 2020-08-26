<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ArticlePartList3RecordType
 *
 * 
 * XSD Type: articlePartList3Record
 */
class ArticlePartList3RecordType extends ArticlePartList3RecordSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\ArticlePartListAttributsRecordType[] $partlistAttributs
     */
    private $partlistAttributs = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\ArticlePartList2RecordType $partlistDetails
     */
    private $partlistDetails = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\ArticlePartListAttributsRecordType $array
     */
    public function addToPartlistAttributs(\Myrzan\TecDocClient\Generated\ArticlePartListAttributsRecordType $array)
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
     * @return \Myrzan\TecDocClient\Generated\ArticlePartListAttributsRecordType[]
     */
    public function getPartlistAttributs()
    {
        return $this->partlistAttributs;
    }

    /**
     * Sets a new partlistAttributs
     *
     * @param \Myrzan\TecDocClient\Generated\ArticlePartListAttributsRecordType[] $partlistAttributs
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
     * @return \Myrzan\TecDocClient\Generated\ArticlePartList2RecordType
     */
    public function getPartlistDetails()
    {
        return $this->partlistDetails;
    }

    /**
     * Sets a new partlistDetails
     *
     * @param \Myrzan\TecDocClient\Generated\ArticlePartList2RecordType $partlistDetails
     * @return self
     */
    public function setPartlistDetails(\Myrzan\TecDocClient\Generated\ArticlePartList2RecordType $partlistDetails)
    {
        $this->partlistDetails = $partlistDetails;
        return $this;
    }


}

