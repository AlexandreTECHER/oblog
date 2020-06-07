<?php 

class Category {

    public $name;

    /**
     * @param string $_name nom de la catégorie
     */
    public function __construct($_name = ""){
        $this->name = $_name;
    }

} 