<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing Link
 *
 * 
 * XSD Type: LinkRecord
 */
class Link extends Asset
{

    /**
     * URL
     *
     * @var string $url
     */
    private $url = null;

    /**
     * Link description
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as url
     *
     * URL
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * URL
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as description
     *
     * Link description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Link description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

