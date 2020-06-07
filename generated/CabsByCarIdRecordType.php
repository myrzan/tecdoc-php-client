<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing CabsByCarIdRecordType
 *
 * 
 * XSD Type: cabsByCarIdRecord
 */
class CabsByCarIdRecordType extends CabsByCarIdRecordSrcType
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

