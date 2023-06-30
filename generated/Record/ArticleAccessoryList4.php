<?php

namespace Myrzan\TecDocClient\Generated\Record;

use Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing ArticleAccessoryList4
 *
 *
 * XSD Type: articleAccessoryList4Record
 */
class ArticleAccessoryList4
{

    /**
     * @var ArticleAccessoryImmediateAttribute[] $accessoryAttributs
     */
    private $accessoryAttributs = null;

    /**
     * @var ArticleAccessoryList3 $accessoryDetails
     */
    private $accessoryDetails = null;

    /**
     * Adds as array
     *
     * @param ArticleAccessoryImmediateAttribute $array
     * @return self
     */
    public function addToAccessoryAttributs(ArticleAccessoryImmediateAttribute $array)
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
     * @return ArticleAccessoryImmediateAttribute[]
     */
    public function getAccessoryAttributs()
    {
        return $this->accessoryAttributs;
    }

    /**
     * Sets a new accessoryAttributs
     *
     * @param ArticleAccessoryImmediateAttribute[] $accessoryAttributs
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
     * @return ArticleAccessoryList3
     */
    public function getAccessoryDetails()
    {
        return $this->accessoryDetails;
    }

    /**
     * Sets a new accessoryDetails
     *
     * @param ArticleAccessoryList3 $accessoryDetails
     * @return self
     */
    public function setAccessoryDetails(ArticleAccessoryList3 $accessoryDetails)
    {
        $this->accessoryDetails = $accessoryDetails;
        return $this;
    }


}

