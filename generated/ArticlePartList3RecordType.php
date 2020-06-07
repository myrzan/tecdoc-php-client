<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticlePartList3RecordType
 *
 * 
 * XSD Type: articlePartList3Record
 */
class ArticlePartList3RecordType extends ArticlePartList3RecordSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticlePartListAttributsRecordType[] $partlistAttributs
     */
    private $partlistAttributs = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticlePartList2RecordType $partlistDetails
     */
    private $partlistDetails = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticlePartListAttributsRecordType $array
     */
    public function addToPartlistAttributs(\Baumeister\TecDocClient\Generated\ArticlePartListAttributsRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\ArticlePartListAttributsRecordType[]
     */
    public function getPartlistAttributs()
    {
        return $this->partlistAttributs;
    }

    /**
     * Sets a new partlistAttributs
     *
     * @param \Baumeister\TecDocClient\Generated\ArticlePartListAttributsRecordType[] $partlistAttributs
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
     * @return \Baumeister\TecDocClient\Generated\ArticlePartList2RecordType
     */
    public function getPartlistDetails()
    {
        return $this->partlistDetails;
    }

    /**
     * Sets a new partlistDetails
     *
     * @param \Baumeister\TecDocClient\Generated\ArticlePartList2RecordType $partlistDetails
     * @return self
     */
    public function setPartlistDetails(\Baumeister\TecDocClient\Generated\ArticlePartList2RecordType $partlistDetails)
    {
        $this->partlistDetails = $partlistDetails;
        return $this;
    }


}

