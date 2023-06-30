<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing Languages
 *
 * 
 * XSD Type: languagesRecord
 */
class Languages 
{

    /**
     * @var string $languageCode
     */
    private $languageCode = null;

    /**
     * @var string $languageName
     */
    private $languageName = null;

    /**
     * Gets as languageCode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Gets as languageName
     *
     * @return string
     */
    public function getLanguageName()
    {
        return $this->languageName;
    }

    /**
     * Sets a new languageName
     *
     * @param string $languageName
     * @return self
     */
    public function setLanguageName($languageName)
    {
        $this->languageName = $languageName;
        return $this;
    }


}

