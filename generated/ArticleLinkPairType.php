<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing ArticleLinkPairType
 *
 * 
 * XSD Type: articleLinkPair
 */
class ArticleLinkPairType extends ArticleLinkPairSrcType
{

    /**
     * @var int $articleId
     */
    private $articleId = null;

    /**
     * @var int $articleLinkId
     */
    private $articleLinkId = null;

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


}

