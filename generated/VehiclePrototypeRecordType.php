<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing VehiclePrototypeRecordType
 *
 * 
 * XSD Type: vehiclePrototypeRecord
 */
class VehiclePrototypeRecordType extends VehiclePrototypeRecordSrcType
{

    /**
     * @var string $prototype
     */
    private $prototype = null;

    /**
     * Gets as prototype
     *
     * @return string
     */
    public function getPrototype()
    {
        return $this->prototype;
    }

    /**
     * Sets a new prototype
     *
     * @param string $prototype
     * @return self
     */
    public function setPrototype($prototype)
    {
        $this->prototype = $prototype;
        return $this;
    }


}

