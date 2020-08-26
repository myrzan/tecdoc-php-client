<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing MainArticlesRecordType
 *
 * 
 * XSD Type: mainArticlesRecord
 */
class MainArticlesRecordType extends MainArticlesRecordSrcType
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
     * @var string $articleName
     */
    private $articleName = null;

    /**
     * @var string $articleNumber
     */
    private $articleNumber = null;

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
     * Gets as articleName
     *
     * @return string
     */
    public function getArticleName()
    {
        return $this->articleName;
    }

    /**
     * Sets a new articleName
     *
     * @param string $articleName
     * @return self
     */
    public function setArticleName($articleName)
    {
        $this->articleName = $articleName;
        return $this;
    }

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


}

