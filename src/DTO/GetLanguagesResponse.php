<?php


namespace Baumeister\TecDocClient\DTO;


class GetLanguagesResponse
{
    use ResponseStatus;

    /**
     * @var LanguagesRecordSeq
     */
    public $data;
}