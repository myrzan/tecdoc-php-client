<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing Manufacturers2RecordType
 *
 * 
 * XSD Type: manufacturers2Record
 */
class Manufacturers2RecordType extends Manufacturers2RecordSrcType
{

    /**
     * @var int $favorFlag
     */
    private $favorFlag = null;

    /**
     * @var string $linkingTargetTypes
     */
    private $linkingTargetTypes = null;

    /**
     * @var int $manuId
     */
    private $manuId = null;

    /**
     * @var string $manuName
     */
    private $manuName = null;

    /**
     * Gets as favorFlag
     *
     * @return int
     */
    public function getFavorFlag()
    {
        return $this->favorFlag;
    }

    /**
     * Sets a new favorFlag
     *
     * @param int $favorFlag
     * @return self
     */
    public function setFavorFlag($favorFlag)
    {
        $this->favorFlag = $favorFlag;
        return $this;
    }

    /**
     * Gets as linkingTargetTypes
     *
     * @return string
     */
    public function getLinkingTargetTypes()
    {
        return $this->linkingTargetTypes;
    }

    /**
     * Sets a new linkingTargetTypes
     *
     * @param string $linkingTargetTypes
     * @return self
     */
    public function setLinkingTargetTypes($linkingTargetTypes)
    {
        $this->linkingTargetTypes = $linkingTargetTypes;
        return $this;
    }

    /**
     * Gets as manuId
     *
     * @return int
     */
    public function getManuId()
    {
        return $this->manuId;
    }

    /**
     * Sets a new manuId
     *
     * @param int $manuId
     * @return self
     */
    public function setManuId($manuId)
    {
        $this->manuId = $manuId;
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


}

