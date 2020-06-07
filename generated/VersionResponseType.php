<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing VersionResponseType
 *
 * 
 * XSD Type: versionResponse
 */
class VersionResponseType extends VersionResponseSrcType
{

    /**
     * The Supplier Data Version. This should be treated as a string and used as-is. Do not try to parse as a date.
     *
     * @var string $supplierDataVersion
     */
    private $supplierDataVersion = null;

    /**
     * The TecDoc Reference Data Version. This should be treated as a string and used as-is. Do not try to parse as a date.
     *
     * @var string $referenceDataVersion
     */
    private $referenceDataVersion = null;

    /**
     * The date the webservice was built. This should be treated as a string and used as-is. The date format is subject to change.
     *
     * @var string $buildDate
     */
    private $buildDate = null;

    /**
     * The internal build version. This should be treated as a string and used as-is.
     *
     * @var string $buildVersion
     */
    private $buildVersion = null;

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $statusText
     */
    private $statusText = null;

    /**
     * Gets as supplierDataVersion
     *
     * The Supplier Data Version. This should be treated as a string and used as-is. Do not try to parse as a date.
     *
     * @return string
     */
    public function getSupplierDataVersion()
    {
        return $this->supplierDataVersion;
    }

    /**
     * Sets a new supplierDataVersion
     *
     * The Supplier Data Version. This should be treated as a string and used as-is. Do not try to parse as a date.
     *
     * @param string $supplierDataVersion
     * @return self
     */
    public function setSupplierDataVersion($supplierDataVersion)
    {
        $this->supplierDataVersion = $supplierDataVersion;
        return $this;
    }

    /**
     * Gets as referenceDataVersion
     *
     * The TecDoc Reference Data Version. This should be treated as a string and used as-is. Do not try to parse as a date.
     *
     * @return string
     */
    public function getReferenceDataVersion()
    {
        return $this->referenceDataVersion;
    }

    /**
     * Sets a new referenceDataVersion
     *
     * The TecDoc Reference Data Version. This should be treated as a string and used as-is. Do not try to parse as a date.
     *
     * @param string $referenceDataVersion
     * @return self
     */
    public function setReferenceDataVersion($referenceDataVersion)
    {
        $this->referenceDataVersion = $referenceDataVersion;
        return $this;
    }

    /**
     * Gets as buildDate
     *
     * The date the webservice was built. This should be treated as a string and used as-is. The date format is subject to change.
     *
     * @return string
     */
    public function getBuildDate()
    {
        return $this->buildDate;
    }

    /**
     * Sets a new buildDate
     *
     * The date the webservice was built. This should be treated as a string and used as-is. The date format is subject to change.
     *
     * @param string $buildDate
     * @return self
     */
    public function setBuildDate($buildDate)
    {
        $this->buildDate = $buildDate;
        return $this;
    }

    /**
     * Gets as buildVersion
     *
     * The internal build version. This should be treated as a string and used as-is.
     *
     * @return string
     */
    public function getBuildVersion()
    {
        return $this->buildVersion;
    }

    /**
     * Sets a new buildVersion
     *
     * The internal build version. This should be treated as a string and used as-is.
     *
     * @param string $buildVersion
     * @return self
     */
    public function setBuildVersion($buildVersion)
    {
        $this->buildVersion = $buildVersion;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param int $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusText
     *
     * @return string
     */
    public function getStatusText()
    {
        return $this->statusText;
    }

    /**
     * Sets a new statusText
     *
     * @param string $statusText
     * @return self
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;
        return $this;
    }


}

