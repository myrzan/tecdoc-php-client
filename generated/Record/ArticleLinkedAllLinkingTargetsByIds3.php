<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing ArticleLinkedAllLinkingTargetsByIds3
 *
 * 
 * XSD Type: articleLinkedAllLinkingTargetsByIds3Record
 */
class ArticleLinkedAllLinkingTargetsByIds3 
{

    /**
     * @var int $articleLinkId
     */
    private $articleLinkId = null;

    /**
     * @var ImmediateAttributsLinkedElements[] $linkedArticleImmediateAttributs
     */
    private $linkedArticleImmediateAttributs = null;

    /**
     * @var AxleById[] $linkedAxles
     */
    private $linkedAxles = null;

    /**
     * @var MarkById[] $linkedMarks
     */
    private $linkedMarks = null;

    /**
     * @var ArticleLinkedMotorsById[] $linkedMotors
     */
    private $linkedMotors = null;

    /**
     * @var ArticleLinkedVehiclesById2[] $linkedVehicles
     */
    private $linkedVehicles = null;

    /**
     * @var int $linkingTargetId
     */
    private $linkingTargetId = null;

    /**
     * @var string $linkingTargetType
     */
    private $linkingTargetType = null;

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
     * Adds as array
     *
     * @param ImmediateAttributsLinkedElements $array
     * @return self
     */
    public function addToLinkedArticleImmediateAttributs(ImmediateAttributsLinkedElements $array)
    {
        $this->linkedArticleImmediateAttributs[] = $array;
        return $this;
    }

    /**
     * isset linkedArticleImmediateAttributs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedArticleImmediateAttributs($index)
    {
        return isset($this->linkedArticleImmediateAttributs[$index]);
    }

    /**
     * unset linkedArticleImmediateAttributs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedArticleImmediateAttributs($index)
    {
        unset($this->linkedArticleImmediateAttributs[$index]);
    }

    /**
     * Gets as linkedArticleImmediateAttributs
     *
     * @return ImmediateAttributsLinkedElements[]
     */
    public function getLinkedArticleImmediateAttributs()
    {
        return $this->linkedArticleImmediateAttributs;
    }

    /**
     * Sets a new linkedArticleImmediateAttributs
     *
     * @param ImmediateAttributsLinkedElements[] $linkedArticleImmediateAttributs
     * @return self
     */
    public function setLinkedArticleImmediateAttributs(array $linkedArticleImmediateAttributs)
    {
        $this->linkedArticleImmediateAttributs = $linkedArticleImmediateAttributs;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param AxleById $array
     * @return self
     */
    public function addToLinkedAxles(AxleById $array)
    {
        $this->linkedAxles[] = $array;
        return $this;
    }

    /**
     * isset linkedAxles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedAxles($index)
    {
        return isset($this->linkedAxles[$index]);
    }

    /**
     * unset linkedAxles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedAxles($index)
    {
        unset($this->linkedAxles[$index]);
    }

    /**
     * Gets as linkedAxles
     *
     * @return AxleById[]
     */
    public function getLinkedAxles()
    {
        return $this->linkedAxles;
    }

    /**
     * Sets a new linkedAxles
     *
     * @param AxleById[] $linkedAxles
     * @return self
     */
    public function setLinkedAxles(array $linkedAxles)
    {
        $this->linkedAxles = $linkedAxles;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param MarkById $array
     * @return self
     */
    public function addToLinkedMarks(MarkById $array)
    {
        $this->linkedMarks[] = $array;
        return $this;
    }

    /**
     * isset linkedMarks
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedMarks($index)
    {
        return isset($this->linkedMarks[$index]);
    }

    /**
     * unset linkedMarks
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedMarks($index)
    {
        unset($this->linkedMarks[$index]);
    }

    /**
     * Gets as linkedMarks
     *
     * @return MarkById[]
     */
    public function getLinkedMarks()
    {
        return $this->linkedMarks;
    }

    /**
     * Sets a new linkedMarks
     *
     * @param MarkById[] $linkedMarks
     * @return self
     */
    public function setLinkedMarks(array $linkedMarks)
    {
        $this->linkedMarks = $linkedMarks;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param ArticleLinkedMotorsById $array
     * @return self
     */
    public function addToLinkedMotors(ArticleLinkedMotorsById $array)
    {
        $this->linkedMotors[] = $array;
        return $this;
    }

    /**
     * isset linkedMotors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedMotors($index)
    {
        return isset($this->linkedMotors[$index]);
    }

    /**
     * unset linkedMotors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedMotors($index)
    {
        unset($this->linkedMotors[$index]);
    }

    /**
     * Gets as linkedMotors
     *
     * @return ArticleLinkedMotorsById[]
     */
    public function getLinkedMotors()
    {
        return $this->linkedMotors;
    }

    /**
     * Sets a new linkedMotors
     *
     * @param ArticleLinkedMotorsById[] $linkedMotors
     * @return self
     */
    public function setLinkedMotors(array $linkedMotors)
    {
        $this->linkedMotors = $linkedMotors;
        return $this;
    }

    /**
     * Adds as array
     *
     * @param ArticleLinkedVehiclesById2 $array
     * @return self
     */
    public function addToLinkedVehicles(ArticleLinkedVehiclesById2 $array)
    {
        $this->linkedVehicles[] = $array;
        return $this;
    }

    /**
     * isset linkedVehicles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedVehicles($index)
    {
        return isset($this->linkedVehicles[$index]);
    }

    /**
     * unset linkedVehicles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedVehicles($index)
    {
        unset($this->linkedVehicles[$index]);
    }

    /**
     * Gets as linkedVehicles
     *
     * @return ArticleLinkedVehiclesById2[]
     */
    public function getLinkedVehicles()
    {
        return $this->linkedVehicles;
    }

    /**
     * Sets a new linkedVehicles
     *
     * @param ArticleLinkedVehiclesById2[] $linkedVehicles
     * @return self
     */
    public function setLinkedVehicles(array $linkedVehicles)
    {
        $this->linkedVehicles = $linkedVehicles;
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
     * Gets as linkingTargetType
     *
     * @return string
     */
    public function getLinkingTargetType()
    {
        return $this->linkingTargetType;
    }

    /**
     * Sets a new linkingTargetType
     *
     * @param string $linkingTargetType
     * @return self
     */
    public function setLinkingTargetType($linkingTargetType)
    {
        $this->linkingTargetType = $linkingTargetType;
        return $this;
    }


}

