<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing AutoCompleteSuggestionsRequestType
 *
 * 
 * XSD Type: autoCompleteSuggestionsRequest
 */
class AutoCompleteSuggestionsRequestType extends AutoCompleteSuggestionsRequestSrcType
{

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var string $searchQuery
     */
    private $searchQuery = null;

    /**
     * Gets as provider
     *
     * Your assigned TecDoc Provider Id
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
     * Your assigned TecDoc Provider Id
     *
     * @param int $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
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
     * Gets as searchQuery
     *
     * @return string
     */
    public function getSearchQuery()
    {
        return $this->searchQuery;
    }

    /**
     * Sets a new searchQuery
     *
     * @param string $searchQuery
     * @return self
     */
    public function setSearchQuery($searchQuery)
    {
        $this->searchQuery = $searchQuery;
        return $this;
    }


}

