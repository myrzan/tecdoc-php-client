<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ArticleAccessoryList4RecordType
 *
 * 
 * XSD Type: articleAccessoryList4Record
 */
class ArticleAccessoryList4RecordType extends ArticleAccessoryList4RecordSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType[] $accessoryAttributs
     */
    private $accessoryAttributs = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\ArticleAccessoryList3RecordType $accessoryDetails
     */
    private $accessoryDetails = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType $array
     */
    public function addToAccessoryAttributs(\Myrzan\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType $array)
    {
        $this->accessoryAttributs[] = $array;
        return $this;
    }

    /**
     * isset accessoryAttributs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccessoryAttributs($index)
    {
        return isset($this->accessoryAttributs[$index]);
    }

    /**
     * unset accessoryAttributs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccessoryAttributs($index)
    {
        unset($this->accessoryAttributs[$index]);
    }

    /**
     * Gets as accessoryAttributs
     *
     * @return \Myrzan\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType[]
     */
    public function getAccessoryAttributs()
    {
        return $this->accessoryAttributs;
    }

    /**
     * Sets a new accessoryAttributs
     *
     * @param \Myrzan\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType[] $accessoryAttributs
     * @return self
     */
    public function setAccessoryAttributs(array $accessoryAttributs)
    {
        $this->accessoryAttributs = $accessoryAttributs;
        return $this;
    }

    /**
     * Gets as accessoryDetails
     *
     * @return \Myrzan\TecDocClient\Generated\ArticleAccessoryList3RecordType
     */
    public function getAccessoryDetails()
    {
        return $this->accessoryDetails;
    }

    /**
     * Sets a new accessoryDetails
     *
     * @param \Myrzan\TecDocClient\Generated\ArticleAccessoryList3RecordType $accessoryDetails
     * @return self
     */
    public function setAccessoryDetails(\Myrzan\TecDocClient\Generated\ArticleAccessoryList3RecordType $accessoryDetails)
    {
        $this->accessoryDetails = $accessoryDetails;
        return $this;
    }


}

