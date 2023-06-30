<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing MiscArticleData
 *
 * 
 * XSD Type: MiscArticleDataRecord
 */
class MiscArticleData
{

    /**
     * @var string $additionalDescription
     */
    private $additionalDescription = null;

    /**
     * @var int $articleStatusId
     */
    private $articleStatusId = null;

    /**
     * @var string $articleStatusDescription
     */
    private $articleStatusDescription = null;

    /**
     * @var int $articleStatusValidFromDate
     */
    private $articleStatusValidFromDate = null;

    /**
     * @var int $quantityPerPackage
     */
    private $quantityPerPackage = null;

    /**
     * @var int $quantityPerPartPerPackage
     */
    private $quantityPerPartPerPackage = null;

    /**
     * @var bool $isSelfServicePacking
     */
    private $isSelfServicePacking = null;

    /**
     * @var bool $hasMandatoryMaterialCertification
     */
    private $hasMandatoryMaterialCertification = null;

    /**
     * @var bool $isRemanufacturedPart
     */
    private $isRemanufacturedPart = null;

    /**
     * @var bool $isAccessory
     */
    private $isAccessory = null;

    /**
     * @var int $batchSize1
     */
    private $batchSize1 = null;

    /**
     * @var int $batchSize2
     */
    private $batchSize2 = null;

    /**
     * Gets as additionalDescription
     *
     * @return string
     */
    public function getAdditionalDescription()
    {
        return $this->additionalDescription;
    }

    /**
     * Sets a new additionalDescription
     *
     * @param string $additionalDescription
     * @return self
     */
    public function setAdditionalDescription($additionalDescription)
    {
        $this->additionalDescription = $additionalDescription;
        return $this;
    }

    /**
     * Gets as articleStatusId
     *
     * @return int
     */
    public function getArticleStatusId()
    {
        return $this->articleStatusId;
    }

    /**
     * Sets a new articleStatusId
     *
     * @param int $articleStatusId
     * @return self
     */
    public function setArticleStatusId($articleStatusId)
    {
        $this->articleStatusId = $articleStatusId;
        return $this;
    }

    /**
     * Gets as articleStatusDescription
     *
     * @return string
     */
    public function getArticleStatusDescription()
    {
        return $this->articleStatusDescription;
    }

    /**
     * Sets a new articleStatusDescription
     *
     * @param string $articleStatusDescription
     * @return self
     */
    public function setArticleStatusDescription($articleStatusDescription)
    {
        $this->articleStatusDescription = $articleStatusDescription;
        return $this;
    }

    /**
     * Gets as articleStatusValidFromDate
     *
     * @return int
     */
    public function getArticleStatusValidFromDate()
    {
        return $this->articleStatusValidFromDate;
    }

    /**
     * Sets a new articleStatusValidFromDate
     *
     * @param int $articleStatusValidFromDate
     * @return self
     */
    public function setArticleStatusValidFromDate($articleStatusValidFromDate)
    {
        $this->articleStatusValidFromDate = $articleStatusValidFromDate;
        return $this;
    }

    /**
     * Gets as quantityPerPackage
     *
     * @return int
     */
    public function getQuantityPerPackage()
    {
        return $this->quantityPerPackage;
    }

    /**
     * Sets a new quantityPerPackage
     *
     * @param int $quantityPerPackage
     * @return self
     */
    public function setQuantityPerPackage($quantityPerPackage)
    {
        $this->quantityPerPackage = $quantityPerPackage;
        return $this;
    }

    /**
     * Gets as quantityPerPartPerPackage
     *
     * @return int
     */
    public function getQuantityPerPartPerPackage()
    {
        return $this->quantityPerPartPerPackage;
    }

    /**
     * Sets a new quantityPerPartPerPackage
     *
     * @param int $quantityPerPartPerPackage
     * @return self
     */
    public function setQuantityPerPartPerPackage($quantityPerPartPerPackage)
    {
        $this->quantityPerPartPerPackage = $quantityPerPartPerPackage;
        return $this;
    }

    /**
     * Gets as isSelfServicePacking
     *
     * @return bool
     */
    public function getIsSelfServicePacking()
    {
        return $this->isSelfServicePacking;
    }

    /**
     * Sets a new isSelfServicePacking
     *
     * @param bool $isSelfServicePacking
     * @return self
     */
    public function setIsSelfServicePacking($isSelfServicePacking)
    {
        $this->isSelfServicePacking = $isSelfServicePacking;
        return $this;
    }

    /**
     * Gets as hasMandatoryMaterialCertification
     *
     * @return bool
     */
    public function getHasMandatoryMaterialCertification()
    {
        return $this->hasMandatoryMaterialCertification;
    }

    /**
     * Sets a new hasMandatoryMaterialCertification
     *
     * @param bool $hasMandatoryMaterialCertification
     * @return self
     */
    public function setHasMandatoryMaterialCertification($hasMandatoryMaterialCertification)
    {
        $this->hasMandatoryMaterialCertification = $hasMandatoryMaterialCertification;
        return $this;
    }

    /**
     * Gets as isRemanufacturedPart
     *
     * @return bool
     */
    public function getIsRemanufacturedPart()
    {
        return $this->isRemanufacturedPart;
    }

    /**
     * Sets a new isRemanufacturedPart
     *
     * @param bool $isRemanufacturedPart
     * @return self
     */
    public function setIsRemanufacturedPart($isRemanufacturedPart)
    {
        $this->isRemanufacturedPart = $isRemanufacturedPart;
        return $this;
    }

    /**
     * Gets as isAccessory
     *
     * @return bool
     */
    public function getIsAccessory()
    {
        return $this->isAccessory;
    }

    /**
     * Sets a new isAccessory
     *
     * @param bool $isAccessory
     * @return self
     */
    public function setIsAccessory($isAccessory)
    {
        $this->isAccessory = $isAccessory;
        return $this;
    }

    /**
     * Gets as batchSize1
     *
     * @return int
     */
    public function getBatchSize1()
    {
        return $this->batchSize1;
    }

    /**
     * Sets a new batchSize1
     *
     * @param int $batchSize1
     * @return self
     */
    public function setBatchSize1($batchSize1)
    {
        $this->batchSize1 = $batchSize1;
        return $this;
    }

    /**
     * Gets as batchSize2
     *
     * @return int
     */
    public function getBatchSize2()
    {
        return $this->batchSize2;
    }

    /**
     * Sets a new batchSize2
     *
     * @param int $batchSize2
     * @return self
     */
    public function setBatchSize2($batchSize2)
    {
        $this->batchSize2 = $batchSize2;
        return $this;
    }


}

