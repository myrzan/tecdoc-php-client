<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing CriteriaDialogAttributsRecordType
 *
 * 
 * XSD Type: criteriaDialogAttributsRecord
 */
class CriteriaDialogAttributsRecordType extends CriteriaDialogAttributsRecordSrcType
{

    /**
     * @var \Myrzan\TecDocClient\Generated\ArticleLinkPairType[] $articleLinkIds
     */
    private $articleLinkIds = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\AttributeValueType[] $attributeValues
     */
    private $attributeValues = null;

    /**
     * @var \Myrzan\TecDocClient\Generated\AttributeType[] $attributes
     */
    private $attributes = null;

    /**
     * Adds as array
     *
     * @return self
     * @param \Myrzan\TecDocClient\Generated\ArticleLinkPairType $array
     */
    public function addToArticleLinkIds(\Myrzan\TecDocClient\Generated\ArticleLinkPairType $array)
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
     * @return \Myrzan\TecDocClient\Generated\ArticleLinkPairType[]
     */
    public function getArticleLinkIds()
    {
        return $this->articleLinkIds;
    }

    /**
     * Sets a new articleLinkIds
     *
     * @param \Myrzan\TecDocClient\Generated\ArticleLinkPairType[] $articleLinkIds
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
     * @param \Myrzan\TecDocClient\Generated\AttributeValueType $array
     */
    public function addToAttributeValues(\Myrzan\TecDocClient\Generated\AttributeValueType $array)
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
     * @return \Myrzan\TecDocClient\Generated\AttributeValueType[]
     */
    public function getAttributeValues()
    {
        return $this->attributeValues;
    }

    /**
     * Sets a new attributeValues
     *
     * @param \Myrzan\TecDocClient\Generated\AttributeValueType[] $attributeValues
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
     * @param \Myrzan\TecDocClient\Generated\AttributeType $array
     */
    public function addToAttributes(\Myrzan\TecDocClient\Generated\AttributeType $array)
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
     * @return \Myrzan\TecDocClient\Generated\AttributeType[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Sets a new attributes
     *
     * @param \Myrzan\TecDocClient\Generated\AttributeType[] $attributes
     * @return self
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }


}

