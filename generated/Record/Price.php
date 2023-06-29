<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing Price
 *
 * 
 * XSD Type: PriceRecord
 */
class Price
{

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var string $discountGroup
     */
    private $discountGroup = null;

    /**
     * @var bool $isDiscount
     */
    private $isDiscount = null;

    /**
     * @var float $price
     */
    private $price = null;

    /**
     * @var int $priceCents
     */
    private $priceCents = null;

    /**
     * @var int $kindOfPriceKey
     */
    private $kindOfPriceKey = null;

    /**
     * @var string $kindOfPriceDescription
     */
    private $kindOfPriceDescription = null;

    /**
     * @var int $priceUnitKey
     */
    private $priceUnitKey = null;

    /**
     * @var string $priceUnitDescription
     */
    private $priceUnitDescription = null;

    /**
     * @var string $quantityUnitKey
     */
    private $quantityUnitKey = null;

    /**
     * @var string $quantityUnitDescription
     */
    private $quantityUnitDescription = null;

    /**
     * @var int $validDateFrom
     */
    private $validDateFrom = null;

    /**
     * @var int $validDateTo
     */
    private $validDateTo = null;

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as discountGroup
     *
     * @return string
     */
    public function getDiscountGroup()
    {
        return $this->discountGroup;
    }

    /**
     * Sets a new discountGroup
     *
     * @param string $discountGroup
     * @return self
     */
    public function setDiscountGroup($discountGroup)
    {
        $this->discountGroup = $discountGroup;
        return $this;
    }

    /**
     * Gets as isDiscount
     *
     * @return bool
     */
    public function getIsDiscount()
    {
        return $this->isDiscount;
    }

    /**
     * Sets a new isDiscount
     *
     * @param bool $isDiscount
     * @return self
     */
    public function setIsDiscount($isDiscount)
    {
        $this->isDiscount = $isDiscount;
        return $this;
    }

    /**
     * Gets as price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as priceCents
     *
     * @return int
     */
    public function getPriceCents()
    {
        return $this->priceCents;
    }

    /**
     * Sets a new priceCents
     *
     * @param int $priceCents
     * @return self
     */
    public function setPriceCents($priceCents)
    {
        $this->priceCents = $priceCents;
        return $this;
    }

    /**
     * Gets as kindOfPriceKey
     *
     * @return int
     */
    public function getKindOfPriceKey()
    {
        return $this->kindOfPriceKey;
    }

    /**
     * Sets a new kindOfPriceKey
     *
     * @param int $kindOfPriceKey
     * @return self
     */
    public function setKindOfPriceKey($kindOfPriceKey)
    {
        $this->kindOfPriceKey = $kindOfPriceKey;
        return $this;
    }

    /**
     * Gets as kindOfPriceDescription
     *
     * @return string
     */
    public function getKindOfPriceDescription()
    {
        return $this->kindOfPriceDescription;
    }

    /**
     * Sets a new kindOfPriceDescription
     *
     * @param string $kindOfPriceDescription
     * @return self
     */
    public function setKindOfPriceDescription($kindOfPriceDescription)
    {
        $this->kindOfPriceDescription = $kindOfPriceDescription;
        return $this;
    }

    /**
     * Gets as priceUnitKey
     *
     * @return int
     */
    public function getPriceUnitKey()
    {
        return $this->priceUnitKey;
    }

    /**
     * Sets a new priceUnitKey
     *
     * @param int $priceUnitKey
     * @return self
     */
    public function setPriceUnitKey($priceUnitKey)
    {
        $this->priceUnitKey = $priceUnitKey;
        return $this;
    }

    /**
     * Gets as priceUnitDescription
     *
     * @return string
     */
    public function getPriceUnitDescription()
    {
        return $this->priceUnitDescription;
    }

    /**
     * Sets a new priceUnitDescription
     *
     * @param string $priceUnitDescription
     * @return self
     */
    public function setPriceUnitDescription($priceUnitDescription)
    {
        $this->priceUnitDescription = $priceUnitDescription;
        return $this;
    }

    /**
     * Gets as quantityUnitKey
     *
     * @return string
     */
    public function getQuantityUnitKey()
    {
        return $this->quantityUnitKey;
    }

    /**
     * Sets a new quantityUnitKey
     *
     * @param string $quantityUnitKey
     * @return self
     */
    public function setQuantityUnitKey($quantityUnitKey)
    {
        $this->quantityUnitKey = $quantityUnitKey;
        return $this;
    }

    /**
     * Gets as quantityUnitDescription
     *
     * @return string
     */
    public function getQuantityUnitDescription()
    {
        return $this->quantityUnitDescription;
    }

    /**
     * Sets a new quantityUnitDescription
     *
     * @param string $quantityUnitDescription
     * @return self
     */
    public function setQuantityUnitDescription($quantityUnitDescription)
    {
        $this->quantityUnitDescription = $quantityUnitDescription;
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

