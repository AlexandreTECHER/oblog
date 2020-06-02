<?php

class Article
{

    public $title;
    public $content;
    public $author;
    public $date;
    public $category;


    function __construct($titleParam = '', $contentParam = '', $authorParam = '', $dateParam = '', $categoryParam = '')
    {
        $this->title = $titleParam;
        $this->content = $contentParam;
        $this->author = $authorParam;
        $this->date = $dateParam;
        $this->category = $categoryParam;
    }


    function getDateFr()
    {

        $timestamp = strtotime($this->date);
        return date('d/m/Y', $timestamp);
    }

}
