<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing PDFRecordType
 *
 * 
 * XSD Type: PDFRecord
 */
class PDFRecordType extends AssetRecordType
{

    /**
     * @var string $url
     */
    private $url = null;

    /**
     * Gets as url
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
     * @param string $url
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}

