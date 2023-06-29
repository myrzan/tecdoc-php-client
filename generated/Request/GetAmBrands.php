<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing AmBrands
 *
 * 
 * XSD Type: amBrandsRequest
 */
class GetAmBrands
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var int $provider
     */
    private $provider = null;

    /**
     * Gets as articleCountry
     *
     * @return string
     */
    public function getArticleCountry()
    {
        return $this->articleCountry;
    }

    /**
     * Sets a new articleCountry
     *
     * @param string $articleCountry
     * @return self
     */
    public function setArticleCountry($articleCountry)
    {
        $this->articleCountry = $articleCountry;
        return $this;
    }

    /**
     * Gets as lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Gets as provider
     *
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * @param int $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }


}

