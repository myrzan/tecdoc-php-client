<?php

namespace Myrzan\TecDocClient\Generated\Record;

/**
 * Class representing ReplacedNumbers
 *
 * 
 * XSD Type: replacedNumbersRecord
 */
class ReplacedNumbers 
{

    /**
     * @var int $replaceArticleId
     */
    private $replaceArticleId = null;

    /**
     * @var string $replaceNumber
     */
    private $replaceNumber = null;

    /**
     * Gets as replaceArticleId
     *
     * @return int
     */
    public function getReplaceArticleId()
    {
        return $this->replaceArticleId;
    }

    /**
     * Sets a new replaceArticleId
     *
     * @param int $replaceArticleId
     * @return self
     */
    public function setReplaceArticleId($replaceArticleId)
    {
        $this->replaceArticleId = $replaceArticleId;
        return $this;
    }

    /**
     * Gets as replaceNumber
     *
     * @return string
     */
    public function getReplaceNumber()
    {
        return $this->replaceNumber;
    }

    /**
     * Sets a new replaceNumber
     *
     * @param string $replaceNumber
     * @return self
     */
    public function setReplaceNumber($replaceNumber)
    {
        $this->replaceNumber = $replaceNumber;
        return $this;
    }


}

