<?php

/**
 * Je défini une classe Article, qui va me permettre de créer des objets
 * représentant les différents articles de mon blog.
 */
class Article {
    public $title;
    public $author;
    public $date;
    public $category;
    public $content;

    /**
     * @param string $_title
     * @param string $_content
     * @param string $_author
     * @param string $_date
     * @param string $_category
     */
    public function __construct($_title = "",
        $_content = "",
        $_author = "",
        $_date = "",
        $_category = ""
        ) {
        $this->title = $_title;
        $this->content = $_content;
        $this->author = $_author;
        $this->date = $_date;
        $this->category = $_category;
    }

    /**
     * @return string 
     */
    public function getDateFr() {

        $timestamp = strtotime($this->date);
        $dateFr = date('d/m/Y', $timestamp);

        return $dateFr;
    }

}
