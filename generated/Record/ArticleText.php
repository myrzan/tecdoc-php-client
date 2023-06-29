<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing ArticleText
 *
 * 
 * XSD Type: ArticleTextRecord
 */
class ArticleText
{

    /**
     * @var int $informationTypeKey
     */
    private $informationTypeKey = null;

    /**
     * @var string $informationTypeDescription
     */
    private $informationTypeDescription = null;

    /**
     * @var bool $isImmediateDisplay
     */
    private $isImmediateDisplay = null;

    /**
     * @var string[] $text
     */
    private $text = [
        
    ];

    /**
     * Gets as informationTypeKey
     *
     * @return int
     */
    public function getInformationTypeKey()
    {
        return $this->informationTypeKey;
    }

    /**
     * Sets a new informationTypeKey
     *
     * @param int $informationTypeKey
     * @return self
     */
    public function setInformationTypeKey($informationTypeKey)
    {
        $this->informationTypeKey = $informationTypeKey;
        return $this;
    }

    /**
     * Gets as informationTypeDescription
     *
     * @return string
     */
    public function getInformationTypeDescription()
    {
        return $this->informationTypeDescription;
    }

    /**
     * Sets a new informationTypeDescription
     *
     * @param string $informationTypeDescription
     * @return self
     */
    public function setInformationTypeDescription($informationTypeDescription)
    {
        $this->informationTypeDescription = $informationTypeDescription;
        return $this;
    }

    /**
     * Gets as isImmediateDisplay
     *
     * @return bool
     */
    public function getIsImmediateDisplay()
    {
        return $this->isImmediateDisplay;
    }

    /**
     * Sets a new isImmediateDisplay
     *
     * @param bool $isImmediateDisplay
     * @return self
     */
    public function setIsImmediateDisplay($isImmediateDisplay)
    {
        $this->isImmediateDisplay = $isImmediateDisplay;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param string $text
     */
    public function addToText($text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * @param int|string $index
     * @return bool
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * @param int|string $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * @return string[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param string[] $text
     * @return self
     */
    public function setText(array $text)
    {
        $this->text = $text;
        return $this;
    }


}

