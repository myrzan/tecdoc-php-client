<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing LinkedArticlesRecordType
 *
 * 
 * XSD Type: linkedArticlesRecord
 */
class LinkedArticlesRecordType extends LinkedArticlesRecordSrcType
{

    /**
     * @var string $articleAddName
     */
    private $articleAddName = null;

    /**
     * @var int $articleId
     */
    private $articleId = null;

    /**
     * @var int $articleLinkId
     */
    private $articleLinkId = null;

    /**
     * @var string $articleNo
     */
    private $articleNo = null;

    /**
     * @var int $genericArticleId
     */
    private $genericArticleId = null;

    /**
     * @var string $genericArticleName
     */
    private $genericArticleName = null;

    /**
     * Gets as articleAddName
     *
     * @return string
     */
    public function getArticleAddName()
    {
        return $this->articleAddName;
    }

    /**
     * Sets a new articleAddName
     *
     * @param string $articleAddName
     * @return self
     */
    public function setArticleAddName($articleAddName)
    {
        $this->articleAddName = $articleAddName;
        return $this;
    }

    /**
     * Gets as articleId
     *
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Sets a new articleId
     *
     * @param int $articleId
     * @return self
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
        return $this;
    }

    /**
     * Gets as articleLinkId
     *
     * @return int
     */
    public function getArticleLinkId()
    {
        return $this->articleLinkId;
    }

    /**
     * Sets a new articleLinkId
     *
     * @param int $articleLinkId
     * @return self
     */
    public function setArticleLinkId($articleLinkId)
    {
        $this->articleLinkId = $articleLinkId;
        return $this;
    }

    /**
     * Gets as articleNo
     *
     * @return string
     */
    public function getArticleNo()
    {
        return $this->articleNo;
    }

    /**
     * Sets a new articleNo
     *
     * @param string $articleNo
     * @return self
     */
    public function setArticleNo($articleNo)
    {
        $this->articleNo = $articleNo;
        return $this;
    }

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
     * Gets as genericArticleName
     *
     * @return string
     */
    public function getGenericArticleName()
    {
        return $this->genericArticleName;
    }

    /**
     * Sets a new genericArticleName
     *
     * @param string $genericArticleName
     * @return self
     */
    public function setGenericArticleName($genericArticleName)
    {
        $this->genericArticleName = $genericArticleName;
        return $this;
    }


}

