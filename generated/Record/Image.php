<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing Image
 *
 * 
 * XSD Type: ImageRecord
 */
class Image extends Asset
{

    /**
     * Image URL for the 50x50 Version of the Image
     *
     * @var string $imageURL50
     */
    private $imageURL50 = null;

    /**
     * Image URL for the 100x100 Version of the Image
     *
     * @var string $imageURL100
     */
    private $imageURL100 = null;

    /**
     * Image URL for the 200x200 Version of the Image
     *
     * @var string $imageURL200
     */
    private $imageURL200 = null;

    /**
     * Image URL for the 400x400 Version of the Image
     *
     * @var string $imageURL400
     */
    private $imageURL400 = null;

    /**
     * Image URL for the 800x800 Version of the Image
     *
     * @var string $imageURL800
     */
    private $imageURL800 = null;

    /**
     * Gets as imageURL50
     *
     * Image URL for the 50x50 Version of the Image
     *
     * @return string
     */
    public function getImageURL50()
    {
        return $this->imageURL50;
    }

    /**
     * Sets a new imageURL50
     *
     * Image URL for the 50x50 Version of the Image
     *
     * @param string $imageURL50
     * @return self
     */
    public function setImageURL50($imageURL50)
    {
        $this->imageURL50 = $imageURL50;
        return $this;
    }

    /**
     * Gets as imageURL100
     *
     * Image URL for the 100x100 Version of the Image
     *
     * @return string
     */
    public function getImageURL100()
    {
        return $this->imageURL100;
    }

    /**
     * Sets a new imageURL100
     *
     * Image URL for the 100x100 Version of the Image
     *
     * @param string $imageURL100
     * @return self
     */
    public function setImageURL100($imageURL100)
    {
        $this->imageURL100 = $imageURL100;
        return $this;
    }

    /**
     * Gets as imageURL200
     *
     * Image URL for the 200x200 Version of the Image
     *
     * @return string
     */
    public function getImageURL200()
    {
        return $this->imageURL200;
    }

    /**
     * Sets a new imageURL200
     *
     * Image URL for the 200x200 Version of the Image
     *
     * @param string $imageURL200
     * @return self
     */
    public function setImageURL200($imageURL200)
    {
        $this->imageURL200 = $imageURL200;
        return $this;
    }

    /**
     * Gets as imageURL400
     *
     * Image URL for the 400x400 Version of the Image
     *
     * @return string
     */
    public function getImageURL400()
    {
        return $this->imageURL400;
    }

    /**
     * Sets a new imageURL400
     *
     * Image URL for the 400x400 Version of the Image
     *
     * @param string $imageURL400
     * @return self
     */
    public function setImageURL400($imageURL400)
    {
        $this->imageURL400 = $imageURL400;
        return $this;
    }

    /**
     * Gets as imageURL800
     *
     * Image URL for the 800x800 Version of the Image
     *
     * @return string
     */
    public function getImageURL800()
    {
        return $this->imageURL800;
    }

    /**
     * Sets a new imageURL800
     *
     * Image URL for the 800x800 Version of the Image
     *
     * @param string $imageURL800
     * @return self
     */
    public function setImageURL800($imageURL800)
    {
        $this->imageURL800 = $imageURL800;
        return $this;
    }


}

