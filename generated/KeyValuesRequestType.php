<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing KeyValuesRequestType
 *
 * 
 * XSD Type: keyValuesRequest
 */
class KeyValuesRequestType extends KeyValuesRequestSrcType
{

    /**
     * @var int $keyTableId
     */
    private $keyTableId = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var int $provider
     */
    private $provider = null;

    /**
     * Gets as keyTableId
     *
     * @return int
     */
    public function getKeyTableId()
    {
        return $this->keyTableId;
    }

    /**
     * Sets a new keyTableId
     *
     * @param int $keyTableId
     * @return self
     */
    public function setKeyTableId($keyTableId)
    {
        $this->keyTableId = $keyTableId;
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

