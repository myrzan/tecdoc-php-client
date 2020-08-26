<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing GenericArticleRecordType
 *
 * 
 * XSD Type: GenericArticleRecord
 */
class GenericArticleRecordType
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
     * Legacy Pegasus V3, Article Id for the parent Article Record and this Generic Article combination
     *
     * @var int $legacyArticleId
     */
    private $legacyArticleId = null;

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
     * Gets as legacyArticleId
     *
     * Legacy Pegasus V3, Article Id for the parent Article Record and this Generic Article combination
     *
     * @return int
     */
    public function getLegacyArticleId()
    {
        return $this->legacyArticleId;
    }

    /**
     * Sets a new legacyArticleId
     *
     * Legacy Pegasus V3, Article Id for the parent Article Record and this Generic Article combination
     *
     * @param int $legacyArticleId
     * @return self
     */
    public function setLegacyArticleId($legacyArticleId)
    {
        $this->legacyArticleId = $legacyArticleId;
        return $this;
    }


}

