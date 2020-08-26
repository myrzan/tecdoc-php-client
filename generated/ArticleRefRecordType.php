<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ArticleRefRecordType
 *
 * 
 * XSD Type: ArticleRefRecord
 */
class ArticleRefRecordType
{

    /**
     * @var string $articleNumber
     */
    private $articleNumber = null;

    /**
     * @var int $dataSupplierId
     */
    private $dataSupplierId = null;

    /**
     * @var int $mfrId
     */
    private $mfrId = null;

    /**
     * @var string $mfrName
     */
    private $mfrName = null;

    /**
     * @var bool $matchesSearchQuery
     */
    private $matchesSearchQuery = null;

    /**
     * (Optional) Key table value of 'Reference Info' that qualifies how the part is interchangeable. (e.g. 1 - Interchangeable; 2 - Interchangeable, but different scope of supply; 3 - Not directly interchangeable because it is part of a kit; 4 - Not directly interchangeable because it's a kit for the part; 5 - Conditionally interchangeable, may require adjustments; 6 - Supply contains more parts than the OE set; 7 - Supply contains fewer parts than the OE set)
     *
     * @var string $referenceTypeKey
     */
    private $referenceTypeKey = null;

    /**
     * (Optional) Description of 'Reference Info' that qualifies how the part is interchangeable. (e.g. 1 - Interchangeable; 2 - Interchangeable, but different scope of supply; 3 - Not directly interchangeable because it is part of a kit; 4 - Not directly interchangeable because it's a kit for the part; 5 - Conditionally interchangeable, may require adjustments; 6 - Supply contains more parts than the OE set; 7 - Supply contains fewer parts than the OE set)
     *
     * @var string $referenceTypeDescription
     */
    private $referenceTypeDescription = null;

    /**
     * Gets as articleNumber
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * Sets a new articleNumber
     *
     * @param string $articleNumber
     * @return self
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;
        return $this;
    }

    /**
     * Gets as dataSupplierId
     *
     * @return int
     */
    public function getDataSupplierId()
    {
        return $this->dataSupplierId;
    }

    /**
     * Sets a new dataSupplierId
     *
     * @param int $dataSupplierId
     * @return self
     */
    public function setDataSupplierId($dataSupplierId)
    {
        $this->dataSupplierId = $dataSupplierId;
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

    /**
     * Gets as matchesSearchQuery
     *
     * @return bool
     */
    public function getMatchesSearchQuery()
    {
        return $this->matchesSearchQuery;
    }

    /**
     * Sets a new matchesSearchQuery
     *
     * @param bool $matchesSearchQuery
     * @return self
     */
    public function setMatchesSearchQuery($matchesSearchQuery)
    {
        $this->matchesSearchQuery = $matchesSearchQuery;
        return $this;
    }

    /**
     * Gets as referenceTypeKey
     *
     * (Optional) Key table value of 'Reference Info' that qualifies how the part is interchangeable. (e.g. 1 - Interchangeable; 2 - Interchangeable, but different scope of supply; 3 - Not directly interchangeable because it is part of a kit; 4 - Not directly interchangeable because it's a kit for the part; 5 - Conditionally interchangeable, may require adjustments; 6 - Supply contains more parts than the OE set; 7 - Supply contains fewer parts than the OE set)
     *
     * @return string
     */
    public function getReferenceTypeKey()
    {
        return $this->referenceTypeKey;
    }

    /**
     * Sets a new referenceTypeKey
     *
     * (Optional) Key table value of 'Reference Info' that qualifies how the part is interchangeable. (e.g. 1 - Interchangeable; 2 - Interchangeable, but different scope of supply; 3 - Not directly interchangeable because it is part of a kit; 4 - Not directly interchangeable because it's a kit for the part; 5 - Conditionally interchangeable, may require adjustments; 6 - Supply contains more parts than the OE set; 7 - Supply contains fewer parts than the OE set)
     *
     * @param string $referenceTypeKey
     * @return self
     */
    public function setReferenceTypeKey($referenceTypeKey)
    {
        $this->referenceTypeKey = $referenceTypeKey;
        return $this;
    }

    /**
     * Gets as referenceTypeDescription
     *
     * (Optional) Description of 'Reference Info' that qualifies how the part is interchangeable. (e.g. 1 - Interchangeable; 2 - Interchangeable, but different scope of supply; 3 - Not directly interchangeable because it is part of a kit; 4 - Not directly interchangeable because it's a kit for the part; 5 - Conditionally interchangeable, may require adjustments; 6 - Supply contains more parts than the OE set; 7 - Supply contains fewer parts than the OE set)
     *
     * @return string
     */
    public function getReferenceTypeDescription()
    {
        return $this->referenceTypeDescription;
    }

    /**
     * Sets a new referenceTypeDescription
     *
     * (Optional) Description of 'Reference Info' that qualifies how the part is interchangeable. (e.g. 1 - Interchangeable; 2 - Interchangeable, but different scope of supply; 3 - Not directly interchangeable because it is part of a kit; 4 - Not directly interchangeable because it's a kit for the part; 5 - Conditionally interchangeable, may require adjustments; 6 - Supply contains more parts than the OE set; 7 - Supply contains fewer parts than the OE set)
     *
     * @param string $referenceTypeDescription
     * @return self
     */
    public function setReferenceTypeDescription($referenceTypeDescription)
    {
        $this->referenceTypeDescription = $referenceTypeDescription;
        return $this;
    }


}

