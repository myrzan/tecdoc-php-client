<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing SortType
 *
 * 
 * XSD Type: Sort
 */
class SortType
{

    /**
     * Valid Values for getArticles: score, mfrName, articleNumber, articleCreatedOn, linkageCreatedOn, linkageSortNum; Valid Values for getOEArticlesByVIN: mfrName, articleNumber, genericArticleName
     *
     * @var string $field
     */
    private $field = null;

    /**
     * Valid Values: asc (for ascending), desc (for descending)
     *
     * @var string $direction
     */
    private $direction = null;

    /**
     * Gets as field
     *
     * Valid Values for getArticles: score, mfrName, articleNumber, articleCreatedOn, linkageCreatedOn, linkageSortNum; Valid Values for getOEArticlesByVIN: mfrName, articleNumber, genericArticleName
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * Valid Values for getArticles: score, mfrName, articleNumber, articleCreatedOn, linkageCreatedOn, linkageSortNum; Valid Values for getOEArticlesByVIN: mfrName, articleNumber, genericArticleName
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Gets as direction
     *
     * Valid Values: asc (for ascending), desc (for descending)
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Sets a new direction
     *
     * Valid Values: asc (for ascending), desc (for descending)
     *
     * @param string $direction
     * @return self
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
        return $this;
    }


}

