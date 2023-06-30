<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing EanNumbers
 *
 * 
 * XSD Type: eanNumbersRecord
 */
class EanNumbers
{

    /**
     * @var string $eanNumber
     */
    private $eanNumber = null;

    /**
     * Gets as eanNumber
     *
     * @return string
     */
    public function getEanNumber()
    {
        return $this->eanNumber;
    }

    /**
     * Sets a new eanNumber
     *
     * @param string $eanNumber
     * @return self
     */
    public function setEanNumber($eanNumber)
    {
        $this->eanNumber = $eanNumber;
        return $this;
    }


}

