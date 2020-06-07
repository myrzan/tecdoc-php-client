<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticleAccessoryList4RecordType
 *
 * 
 * XSD Type: articleAccessoryList4Record
 */
class ArticleAccessoryList4RecordType extends ArticleAccessoryList4RecordSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType[] $accessoryAttributs
     */
    private $accessoryAttributs = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleAccessoryList3RecordType $accessoryDetails
     */
    private $accessoryDetails = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType $array
     */
    public function addToAccessoryAttributs(\Baumeister\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType[]
     */
    public function getAccessoryAttributs()
    {
        return $this->accessoryAttributs;
    }

    /**
     * Sets a new accessoryAttributs
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleAccessoryImmediateAttributsRecordType[] $accessoryAttributs
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
     * @return \Baumeister\TecDocClient\Generated\ArticleAccessoryList3RecordType
     */
    public function getAccessoryDetails()
    {
        return $this->accessoryDetails;
    }

    /**
     * Sets a new accessoryDetails
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleAccessoryList3RecordType $accessoryDetails
     * @return self
     */
    public function setAccessoryDetails(\Baumeister\TecDocClient\Generated\ArticleAccessoryList3RecordType $accessoryDetails)
    {
        $this->accessoryDetails = $accessoryDetails;
        return $this;
    }


}

