<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing ArticlePricesNormalAustausch
 *
 * 
 * XSD Type: articlePricesNormalAustauschRecord
 */
class ArticlePricesNormalAustausch
{

    /**
     * @var string $currency
     */
    private $currency = null;

    /**
     * @var bool $hasLessDiscount
     */
    private $hasLessDiscount = null;

    /**
     * @var int $price
     */
    private $price = null;

    /**
     * @var int $priceTypeId
     */
    private $priceTypeId = null;

    /**
     * @var string $priceTypeName
     */
    private $priceTypeName = null;

    /**
     * @var int $priceUnitId
     */
    private $priceUnitId = null;

    /**
     * @var string $priceUnitName
     */
    private $priceUnitName = null;

    /**
     * @var string $quantityUnitId
     */
    private $quantityUnitId = null;

    /**
     * @var string $quantityUnitName
     */
    private $quantityUnitName = null;

    /**
     * @var int $validDateFrom
     */
    private $validDateFrom = null;

    /**
     * @var int $validDateTo
     */
    private $validDateTo = null;

    /**
     * Gets as currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as hasLessDiscount
     *
     * @return bool
     */
    public function getHasLessDiscount()
    {
        return $this->hasLessDiscount;
    }

    /**
     * Sets a new hasLessDiscount
     *
     * @param bool $hasLessDiscount
     * @return self
     */
    public function setHasLessDiscount($hasLessDiscount)
    {
        $this->hasLessDiscount = $hasLessDiscount;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param int $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as priceTypeId
     *
     * @return int
     */
    public function getPriceTypeId()
    {
        return $this->priceTypeId;
    }

    /**
     * Sets a new priceTypeId
     *
     * @param int $priceTypeId
     * @return self
     */
    public function setPriceTypeId($priceTypeId)
    {
        $this->priceTypeId = $priceTypeId;
        return $this;
    }

    /**
     * Gets as priceTypeName
     *
     * @return string
     */
    public function getPriceTypeName()
    {
        return $this->priceTypeName;
    }

    /**
     * Sets a new priceTypeName
     *
     * @param string $priceTypeName
     * @return self
     */
    public function setPriceTypeName($priceTypeName)
    {
        $this->priceTypeName = $priceTypeName;
        return $this;
    }

    /**
     * Gets as priceUnitId
     *
     * @return int
     */
    public function getPriceUnitId()
    {
        return $this->priceUnitId;
    }

    /**
     * Sets a new priceUnitId
     *
     * @param int $priceUnitId
     * @return self
     */
    public function setPriceUnitId($priceUnitId)
    {
        $this->priceUnitId = $priceUnitId;
        return $this;
    }

    /**
     * Gets as priceUnitName
     *
     * @return string
     */
    public function getPriceUnitName()
    {
        return $this->priceUnitName;
    }

    /**
     * Sets a new priceUnitName
     *
     * @param string $priceUnitName
     * @return self
     */
    public function setPriceUnitName($priceUnitName)
    {
        $this->priceUnitName = $priceUnitName;
        return $this;
    }

    /**
     * Gets as quantityUnitId
     *
     * @return string
     */
    public function getQuantityUnitId()
    {
        return $this->quantityUnitId;
    }

    /**
     * Sets a new quantityUnitId
     *
     * @param string $quantityUnitId
     * @return self
     */
    public function setQuantityUnitId($quantityUnitId)
    {
        $this->quantityUnitId = $quantityUnitId;
        return $this;
    }

    /**
     * Gets as quantityUnitName
     *
     * @return string
     */
    public function getQuantityUnitName()
    {
        return $this->quantityUnitName;
    }

    /**
     * Sets a new quantityUnitName
     *
     * @param string $quantityUnitName
     * @return self
     */
    public function setQuantityUnitName($quantityUnitName)
    {
        $this->quantityUnitName = $quantityUnitName;
        return $this;
    }

    /**
     * Gets as validDateFrom
     *
     * @return int
     */
    public function getValidDateFrom()
    {
        return $this->validDateFrom;
    }

    /**
     * Sets a new validDateFrom
     *
     * @param int $validDateFrom
     * @return self
     */
    public function setValidDateFrom($validDateFrom)
    {
        $this->validDateFrom = $validDateFrom;
        return $this;
    }

    /**
     * Gets as validDateTo
     *
     * @return int
     */
    public function getValidDateTo()
    {
        return $this->validDateTo;
    }

    /**
     * Sets a new validDateTo
     *
     * @param int $validDateTo
     * @return self
     */
    public function setValidDateTo($validDateTo)
    {
        $this->validDateTo = $validDateTo;
        return $this;
    }


}

