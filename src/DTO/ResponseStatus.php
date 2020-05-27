<?php


namespace Baumeister\TecDocClient\DTO;


trait ResponseStatus
{
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $statusText;
}