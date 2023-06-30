<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing KbaNumbersByVehicleId
 *
 * 
 * XSD Type: kbaNumbersByVehicleIdRecord
 */
class KbaNumbersByVehicleId
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

