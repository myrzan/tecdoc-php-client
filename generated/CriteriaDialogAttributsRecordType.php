<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing CriteriaDialogAttributsRecordType
 *
 * 
 * XSD Type: criteriaDialogAttributsRecord
 */
class CriteriaDialogAttributsRecordType extends CriteriaDialogAttributsRecordSrcType
{

    /**
     * @var \Baumeister\TecDocClient\Generated\ArticleLinkPairType[] $articleLinkIds
     */
    private $articleLinkIds = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\AttributeValueType[] $attributeValues
     */
    private $attributeValues = null;

    /**
     * @var \Baumeister\TecDocClient\Generated\AttributeType[] $attributes
     */
    private $attributes = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\ArticleLinkPairType $array
     */
    public function addToArticleLinkIds(\Baumeister\TecDocClient\Generated\ArticleLinkPairType $array)
    {
        $this->articleLinkIds[] = $array;
        return $this;
    }

    /**
     * isset articleLinkIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArticleLinkIds($index)
    {
        return isset($this->articleLinkIds[$index]);
    }

    /**
     * unset articleLinkIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArticleLinkIds($index)
    {
        unset($this->articleLinkIds[$index]);
    }

    /**
     * Gets as articleLinkIds
     *
     * @return \Baumeister\TecDocClient\Generated\ArticleLinkPairType[]
     */
    public function getArticleLinkIds()
    {
        return $this->articleLinkIds;
    }

    /**
     * Sets a new articleLinkIds
     *
     * @param \Baumeister\TecDocClient\Generated\ArticleLinkPairType[] $articleLinkIds
     * @return self
     */
    public function setArticleLinkIds(array $articleLinkIds)
    {
        $this->articleLinkIds = $articleLinkIds;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\AttributeValueType $array
     */
    public function addToAttributeValues(\Baumeister\TecDocClient\Generated\AttributeValueType $array)
    {
        $this->attributeValues[] = $array;
        return $this;
    }

    /**
     * isset attributeValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeValues($index)
    {
        return isset($this->attributeValues[$index]);
    }

    /**
     * unset attributeValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeValues($index)
    {
        unset($this->attributeValues[$index]);
    }

    /**
     * Gets as attributeValues
     *
     * @return \Baumeister\TecDocClient\Generated\AttributeValueType[]
     */
    public function getAttributeValues()
    {
        return $this->attributeValues;
    }

    /**
     * Sets a new attributeValues
     *
     * @param \Baumeister\TecDocClient\Generated\AttributeValueType[] $attributeValues
     * @return self
     */
    public function setAttributeValues(array $attributeValues)
    {
        $this->attributeValues = $attributeValues;
        return $this;
    }

    /**
     * Adds as array
     *
     * @return self
     * @param \Baumeister\TecDocClient\Generated\AttributeType $array
     */
    public function addToAttributes(\Baumeister\TecDocClient\Generated\AttributeType $array)
    {
        $this->attributes[] = $array;
        return $this;
    }

    /**
     * isset attributes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributes($index)
    {
        return isset($this->attributes[$index]);
    }

    /**
     * unset attributes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributes($index)
    {
        unset($this->attributes[$index]);
    }

    /**
     * Gets as attributes
     *
     * @return \Baumeister\TecDocClient\Generated\AttributeType[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Sets a new attributes
     *
     * @param \Baumeister\TecDocClient\Generated\AttributeType[] $attributes
     * @return self
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }


}

