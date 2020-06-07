<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MotorByIds2RequestType
 *
 * 
 * XSD Type: motorByIds2Request
 */
class MotorByIds2RequestType extends MotorByIds2RequestSrcType
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
     * @var int[] $motorIds
     */
    private $motorIds = null;

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
     * Adds as array
     *
     * @return self
     * @param int $array
     */
    public function addToMotorIds($array)
    {
        $this->motorIds[] = $array;
        return $this;
    }

    /**
     * isset motorIds
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMotorIds($index)
    {
        return isset($this->motorIds[$index]);
    }

    /**
     * unset motorIds
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMotorIds($index)
    {
        unset($this->motorIds[$index]);
    }

    /**
     * Gets as motorIds
     *
     * @return int[]
     */
    public function getMotorIds()
    {
        return $this->motorIds;
    }

    /**
     * Sets a new motorIds
     *
     * @param int[] $motorIds
     * @return self
     */
    public function setMotorIds(array $motorIds)
    {
        $this->motorIds = $motorIds;
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

