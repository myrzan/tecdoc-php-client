<?php


namespace Baumeister\TecDocClient\DTO;


class GetArticlesResponse
{
    use ResponseStatus;

    /**
     * @var int
     */
    public $totalMatchingArticles;

    /**
     * @var int
     */
    public $maxAllowedPage;

    /**
     * @var ArticleRecord[]
     */
    public $articles;
}