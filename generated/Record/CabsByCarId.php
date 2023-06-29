<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing CabsByCarId
 *
 * 
 * XSD Type: cabsByCarIdRecord
 */
class CabsByCarId 
{

    /**
     * @var string $cabName
     */
    private $cabName = null;

    /**
     * Gets as cabName
     *
     * @return string
     */
    public function getCabName()
    {
        return $this->cabName;
    }

    /**
     * Sets a new cabName
     *
     * @param string $cabName
     * @return self
     */
    public function setCabName($cabName)
    {
        $this->cabName = $cabName;
        return $this;
    }


}

