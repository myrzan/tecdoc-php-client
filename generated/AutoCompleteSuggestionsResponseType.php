<?php

namespace Baumeister\TecDocClient\Generated;

/**
 * Class representing AutoCompleteSuggestionsResponseType
 *
 * 
 * XSD Type: autoCompleteSuggestionsResponse
 */
class AutoCompleteSuggestionsResponseType extends AutoCompleteSuggestionsResponseSrcType
{

    /**
     * @var string[] $suggestions
     */
    private $suggestions = [
        
    ];

    /**
     * @var int $status
     */
    private $status = null;

    /**
     * @var string $statusText
     */
    private $statusText = null;

    /**
     * Adds as suggestions
     *
     * @return self
     * @param string $suggestions
     */
    public function addToSuggestions($suggestions)
    {
        $this->suggestions[] = $suggestions;
        return $this;
    }

    /**
     * isset suggestions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuggestions($index)
    {
        return isset($this->suggestions[$index]);
    }

    /**
     * unset suggestions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuggestions($index)
    {
        unset($this->suggestions[$index]);
    }

    /**
     * Gets as suggestions
     *
     * @return string[]
     */
    public function getSuggestions()
    {
        return $this->suggestions;
    }

    /**
     * Sets a new suggestions
     *
     * @param string[] $suggestions
     * @return self
     */
    public function setSuggestions(array $suggestions)
    {
        $this->suggestions = $suggestions;
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

