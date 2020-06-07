<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing AmBrandAddressRequestType
 *
 * 
 * XSD Type: amBrandAddressRequest
 */
class AmBrandAddressRequestType extends AmBrandAddressRequestSrcType
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var int $brandNo
     */
    private $brandNo = null;

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
     * Gets as brandNo
     *
     * @return int
     */
    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * Sets a new brandNo
     *
     * @param int $brandNo
     * @return self
     */
    public function setBrandNo($brandNo)
    {
        $this->brandNo = $brandNo;
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

