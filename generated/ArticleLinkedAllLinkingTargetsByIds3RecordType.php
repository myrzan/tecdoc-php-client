<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing ArticleLinkedAllLinkingTargetsByIds3RecordType
 *
 * 
 * XSD Type: articleLinkedAllLinkingTargetsByIds3Record
 */
class ArticleLinkedAllLinkingTargetsByIds3RecordType extends ArticleLinkedAllLinkingTargetsByIds3RecordSrcType
{

    /**
     * @var int $articleLinkId
     */
    private $articleLinkId = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ImmediateAttributsLinkedElementsRecordType[] $linkedArticleImmediateAttributs
     */
    private $linkedArticleImmediateAttributs = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\AxleByIdRecordType[] $linkedAxles
     */
    private $linkedAxles = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\MarkByIdRecordType[] $linkedMarks
     */
    private $linkedMarks = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleLinkedMotorsByIdRecordType[] $linkedMotors
     */
    private $linkedMotors = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleLinkedVehiclesById2RecordType[] $linkedVehicles
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
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ImmediateAttributsLinkedElementsRecordType $array
     */
    public function addToLinkedArticleImmediateAttributs(\Baumeister\TecDocClient\Generated\ImmediateAttributsLinkedElementsRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\ImmediateAttributsLinkedElementsRecordType[]
     */
    public function getLinkedArticleImmediateAttributs()
    {
        return $this->linkedArticleImmediateAttributs;
    }

    /**
     * Sets a new linkedArticleImmediateAttributs
     *
     * @param \Baumeister\TecDocClient\Generated\ImmediateAttributsLinkedElementsRecordType[] $linkedArticleImmediateAttributs
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
     * @return self
     * @param \Baumeister\TecDocClient\Generated\AxleByIdRecordType $array
     */
    public function addToLinkedAxles(\Baumeister\TecDocClient\Generated\AxleByIdRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\AxleByIdRecordType[]
     */
    public function getLinkedAxles()
    {
        return $this->linkedAxles;
    }

    /**
     * Sets a new linkedAxles
     *
     * @param \Baumeister\TecDocClient\Generated\AxleByIdRecordType[] $linkedAxles
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
     * @return self
     * @param \Baumeister\TecDocClient\Generated\MarkByIdRecordType $array
     */
    public function addToLinkedMarks(\Baumeister\TecDocClient\Generated\MarkByIdRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\MarkByIdRecordType[]
     */
    public function getLinkedMarks()
    {
        return $this->linkedMarks;
    }

    /**
     * Sets a new linkedMarks
     *
     * @param \Baumeister\TecDocClient\Generated\MarkByIdRecordType[] $linkedMarks
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
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleLinkedMotorsByIdRecordType $array
     */
    public function addToLinkedMotors(\Baumeister\TecDocClient\Generated\ArticleLinkedMotorsByIdRecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\ArticleLinkedMotorsByIdRecordType[]
     */
    public function getLinkedMotors()
    {
        return $this->linkedMotors;
    }

    /**
     * Sets a new linkedMotors
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleLinkedMotorsByIdRecordType[] $linkedMotors
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
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleLinkedVehiclesById2RecordType $array
     */
    public function addToLinkedVehicles(\Baumeister\TecDocClient\Generated\ArticleLinkedVehiclesById2RecordType $array)
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
     * @return \Baumeister\TecDocClient\Generated\ArticleLinkedVehiclesById2RecordType[]
     */
    public function getLinkedVehicles()
    {
        return $this->linkedVehicles;
    }

    /**
     * Sets a new linkedVehicles
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleLinkedVehiclesById2RecordType[] $linkedVehicles
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

