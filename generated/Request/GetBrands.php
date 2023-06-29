<?php

namespace Myrzan\TecDocClient\Generated\Request;

class GetBrands
{
    private string $articleCountry;
    private string $lang;
    private int $provider;
    private ?int $dataSupplierId;
    private bool $includeAll;
    private bool $includeAddressDetails;
    private bool $includeDataSupplierLogo;

    /**
     * @return string
     */
    public function getArticleCountry(): string
    {
        return $this->articleCountry;
    }

    /**
     * @param string $articleCountry
     * @return GetBrands
     */
    public function setArticleCountry(string $articleCountry): GetBrands
    {
        $this->articleCountry = $articleCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return GetBrands
     */
    public function setLang(string $lang): GetBrands
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return int
     */
    public function getProvider(): int
    {
        return $this->provider;
    }

    /**
     * @param int $provider
     * @return GetBrands
     */
    public function setProvider(int $provider): GetBrands
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDataSupplierId(): ?int
    {
        return $this->dataSupplierId;
    }

    /**
     * @param int|null $dataSupplierId
     * @return GetBrands
     */
    public function setDataSupplierId(?int $dataSupplierId): GetBrands
    {
        $this->dataSupplierId = $dataSupplierId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeAll(): bool
    {
        return $this->includeAll;
    }

    /**
     * @param bool $includeAll
     * @return GetBrands
     */
    public function setIncludeAll(bool $includeAll): GetBrands
    {
        $this->includeAll = $includeAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeAddressDetails(): bool
    {
        return $this->includeAddressDetails;
    }

    /**
     * @param bool $includeAddressDetails
     * @return GetBrands
     */
    public function setIncludeAddressDetails(bool $includeAddressDetails): GetBrands
    {
        $this->includeAddressDetails = $includeAddressDetails;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeDataSupplierLogo(): bool
    {
        return $this->includeDataSupplierLogo;
    }

    /**
     * @param bool $includeDataSupplierLogo
     * @return GetBrands
     */
    public function setIncludeDataSupplierLogo(bool $includeDataSupplierLogo): GetBrands
    {
        $this->includeDataSupplierLogo = $includeDataSupplierLogo;
        return $this;
    }
}