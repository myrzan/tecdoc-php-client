<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing GenericArticleFacetCountType
 *
 * 
 * XSD Type: GenericArticleFacetCount
 */
class GenericArticleFacetCount
{

    /**
     * @var int $genericArticleId
     */
    private $genericArticleId = null;

    /**
     * @var string $genericArticleDescription
     */
    private $genericArticleDescription = null;

    /**
     * @var int $count
     */
    private $count = null;

    /**
     * Gets as genericArticleId
     *
     * @return int
     */
    public function getGenericArticleId()
    {
        return $this->genericArticleId;
    }

    /**
     * Sets a new genericArticleId
     *
     * @param int $genericArticleId
     * @return self
     */
    public function setGenericArticleId($genericArticleId)
    {
        $this->genericArticleId = $genericArticleId;
        return $this;
    }

    /**
     * Gets as genericArticleDescription
     *
     * @return string
     */
    public function getGenericArticleDescription()
    {
        return $this->genericArticleDescription;
    }

    /**
     * Sets a new genericArticleDescription
     *
     * @param string $genericArticleDescription
     * @return self
     */
    public function setGenericArticleDescription($genericArticleDescription)
    {
        $this->genericArticleDescription = $genericArticleDescription;
        return $this;
    }

    /**
     * Gets as count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }


}

