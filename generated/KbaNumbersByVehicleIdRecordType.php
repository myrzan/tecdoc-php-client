<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing KbaNumbersByVehicleIdRecordType
 *
 * 
 * XSD Type: kbaNumbersByVehicleIdRecord
 */
class KbaNumbersByVehicleIdRecordType extends KbaNumbersByVehicleIdRecordSrcType
{

    /**
     * @var string $kbaNo
     */
    private $kbaNo = null;

    /**
     * Gets as kbaNo
     *
     * @return string
     */
    public function getKbaNo()
    {
        return $this->kbaNo;
    }

    /**
     * Sets a new kbaNo
     *
     * @param string $kbaNo
     * @return self
     */
    public function setKbaNo($kbaNo)
    {
        $this->kbaNo = $kbaNo;
        return $this;
    }


}

