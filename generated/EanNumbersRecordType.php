<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing EanNumbersRecordType
 *
 * 
 * XSD Type: eanNumbersRecord
 */
class EanNumbersRecordType extends EanNumbersRecordSrcType
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

