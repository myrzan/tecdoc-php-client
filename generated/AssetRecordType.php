<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing AssetRecordType
 *
 * 
 * XSD Type: AssetRecord
 */
class AssetRecordType
{

    /**
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * @var string $typeDescription
     */
    private $typeDescription = null;

    /**
     * @var string $headerDescription
     */
    private $headerDescription = null;

    /**
     * Gets as fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as typeDescription
     *
     * @return string
     */
    public function getTypeDescription()
    {
        return $this->typeDescription;
    }

    /**
     * Sets a new typeDescription
     *
     * @param string $typeDescription
     * @return self
     */
    public function setTypeDescription($typeDescription)
    {
        $this->typeDescription = $typeDescription;
        return $this;
    }

    /**
     * Gets as headerDescription
     *
     * @return string
     */
    public function getHeaderDescription()
    {
        return $this->headerDescription;
    }

    /**
     * Sets a new headerDescription
     *
     * @param string $headerDescription
     * @return self
     */
    public function setHeaderDescription($headerDescription)
    {
        $this->headerDescription = $headerDescription;
        return $this;
    }


}

