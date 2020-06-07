<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MarkByIdRequestType
 *
 * 
 * XSD Type: markByIdRequest
 */
class MarkByIdRequestType extends MarkByIdRequestSrcType
{

    /**
     * @var string $country
     */
    private $country = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var bool $linked
     */
    private $linked = null;

    /**
     * @var int $markId
     */
    private $markId = null;

    /**
     * @var int $provider
     */
    private $provider = null;

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * Gets as linked
     *
     * @return bool
     */
    public function getLinked()
    {
        return $this->linked;
    }

    /**
     * Sets a new linked
     *
     * @param bool $linked
     * @return self
     */
    public function setLinked($linked)
    {
        $this->linked = $linked;
        return $this;
    }

    /**
     * Gets as markId
     *
     * @return int
     */
    public function getMarkId()
    {
        return $this->markId;
    }

    /**
     * Sets a new markId
     *
     * @param int $markId
     * @return self
     */
    public function setMarkId($markId)
    {
        $this->markId = $markId;
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

