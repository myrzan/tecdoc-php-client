<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing SearchQueryMatchType
 *
 * 
 * XSD Type: SearchQueryMatch
 */
class SearchQueryMatchType
{

    /**
     * ArticleNumber, OENumber, TradeNumber, ComparableNumber, ReplacesNumber, ReplacedByNumber, EANNumber, CriteriaNumber
     *
     * @var string $matchType
     */
    private $matchType = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var string $match
     */
    private $match = null;

    /**
     * @var int $mfrId
     */
    private $mfrId = null;

    /**
     * @var string $mfrName
     */
    private $mfrName = null;

    /**
     * Gets as matchType
     *
     * ArticleNumber, OENumber, TradeNumber, ComparableNumber, ReplacesNumber, ReplacedByNumber, EANNumber, CriteriaNumber
     *
     * @return string
     */
    public function getMatchType()
    {
        return $this->matchType;
    }

    /**
     * Sets a new matchType
     *
     * ArticleNumber, OENumber, TradeNumber, ComparableNumber, ReplacesNumber, ReplacedByNumber, EANNumber, CriteriaNumber
     *
     * @param string $matchType
     * @return self
     */
    public function setMatchType($matchType)
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as match
     *
     * @return string
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Sets a new match
     *
     * @param string $match
     * @return self
     */
    public function setMatch($match)
    {
        $this->match = $match;
        return $this;
    }

    /**
     * Gets as mfrId
     *
     * @return int
     */
    public function getMfrId()
    {
        return $this->mfrId;
    }

    /**
     * Sets a new mfrId
     *
     * @param int $mfrId
     * @return self
     */
    public function setMfrId($mfrId)
    {
        $this->mfrId = $mfrId;
        return $this;
    }

    /**
     * Gets as mfrName
     *
     * @return string
     */
    public function getMfrName()
    {
        return $this->mfrName;
    }

    /**
     * Sets a new mfrName
     *
     * @param string $mfrName
     * @return self
     */
    public function setMfrName($mfrName)
    {
        $this->mfrName = $mfrName;
        return $this;
    }


}

