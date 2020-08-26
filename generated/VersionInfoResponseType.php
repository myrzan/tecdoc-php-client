<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing VersionInfoResponseType
 *
 * 
 * XSD Type: versionInfoResponse
 */
class VersionInfoResponseType
{

    /**
     * @var int $build
     */
    private $build = null;

    /**
     * @var string $date
     */
    private $date = null;

    /**
     * @var int $major
     */
    private $major = null;

    /**
     * @var int $minor
     */
    private $minor = null;

    /**
     * @var int $revision
     */
    private $revision = null;

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $statusText
     */
    private $statusText = null;

    /**
     * Gets as build
     *
     * @return int
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Sets a new build
     *
     * @param int $build
     * @return self
     */
    public function setBuild($build)
    {
        $this->build = $build;
        return $this;
    }

    /**
     * Gets as date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as major
     *
     * @return int
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * Sets a new major
     *
     * @param int $major
     * @return self
     */
    public function setMajor($major)
    {
        $this->major = $major;
        return $this;
    }

    /**
     * Gets as minor
     *
     * @return int
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * Sets a new minor
     *
     * @param int $minor
     * @return self
     */
    public function setMinor($minor)
    {
        $this->minor = $minor;
        return $this;
    }

    /**
     * Gets as revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Sets a new revision
     *
     * @param int $revision
     * @return self
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;
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

