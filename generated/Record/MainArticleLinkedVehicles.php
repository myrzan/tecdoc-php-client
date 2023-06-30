<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing MainArticleLinkedVehicles
 *
 * 
 * XSD Type: mainArticleLinkedVehiclesRecord
 */
class MainArticleLinkedVehicles 
{

    /**
     * @var int $articleLinkId
     */
    private $articleLinkId = null;

    /**
     * @var int $linkingTargetId
     */
    private $linkingTargetId = null;

    /**
     * @var int $mainArticleId
     */
    private $mainArticleId = null;

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
     * Gets as linkingTargetId
     *
     * @return int
     */
    public function getLinkingTargetId()
    {
        return $this->linkingTargetId;
    }

    /**
     * Sets a new linkingTargetId
     *
     * @param int $linkingTargetId
     * @return self
     */
    public function setLinkingTargetId($linkingTargetId)
    {
        $this->linkingTargetId = $linkingTargetId;
        return $this;
    }

    /**
     * Gets as mainArticleId
     *
     * @return int
     */
    public function getMainArticleId()
    {
        return $this->mainArticleId;
    }

    /**
     * Sets a new mainArticleId
     *
     * @param int $mainArticleId
     * @return self
     */
    public function setMainArticleId($mainArticleId)
    {
        $this->mainArticleId = $mainArticleId;
        return $this;
    }


}

