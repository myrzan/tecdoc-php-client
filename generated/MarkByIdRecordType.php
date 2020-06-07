<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing MarkByIdRecordType
 *
 * 
 * XSD Type: markByIdRecord
 */
class MarkByIdRecordType extends MarkByIdRecordSrcType
{

    /**
     * @var int $linkedCars
     */
    private $linkedCars = null;

    /**
     * @var string $manuName
     */
    private $manuName = null;

    /**
     * @var int $markId
     */
    private $markId = null;

    /**
     * @var string $markName
     */
    private $markName = null;

    /**
     * Gets as linkedCars
     *
     * @return int
     */
    public function getLinkedCars()
    {
        return $this->linkedCars;
    }

    /**
     * Sets a new linkedCars
     *
     * @param int $linkedCars
     * @return self
     */
    public function setLinkedCars($linkedCars)
    {
        $this->linkedCars = $linkedCars;
        return $this;
    }

    /**
     * Gets as manuName
     *
     * @return string
     */
    public function getManuName()
    {
        return $this->manuName;
    }

    /**
     * Sets a new manuName
     *
     * @param string $manuName
     * @return self
     */
    public function setManuName($manuName)
    {
        $this->manuName = $manuName;
        return $this;
    }

    /**
     * Gets as markId
     *
     * @return int
     */
    public function getMarkId()
    {
        return $this->markId;
    }

    /**
     * Sets a new markId
     *
     * @param int $markId
     * @return self
     */
    public function setMarkId($markId)
    {
        $this->markId = $markId;
        return $this;
    }

    /**
     * Gets as markName
     *
     * @return string
     */
    public function getMarkName()
    {
        return $this->markName;
    }

    /**
     * Sets a new markName
     *
     * @param string $markName
     * @return self
     */
    public function setMarkName($markName)
    {
        $this->markName = $markName;
        return $this;
    }


}

