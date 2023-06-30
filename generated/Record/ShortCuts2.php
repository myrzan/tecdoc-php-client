<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing ShortCuts2
 *
 * 
 * XSD Type: shortCuts2Record
 */
class ShortCuts2 
{

    /**
     * @var int $shortCutId
     */
    private $shortCutId = null;

    /**
     * @var string $shortCutName
     */
    private $shortCutName = null;

    /**
     * Gets as shortCutId
     *
     * @return int
     */
    public function getShortCutId()
    {
        return $this->shortCutId;
    }

    /**
     * Sets a new shortCutId
     *
     * @param int $shortCutId
     * @return self
     */
    public function setShortCutId($shortCutId)
    {
        $this->shortCutId = $shortCutId;
        return $this;
    }

    /**
     * Gets as shortCutName
     *
     * @return string
     */
    public function getShortCutName()
    {
        return $this->shortCutName;
    }

    /**
     * Sets a new shortCutName
     *
     * @param string $shortCutName
     * @return self
     */
    public function setShortCutName($shortCutName)
    {
        $this->shortCutName = $shortCutName;
        return $this;
    }


}

