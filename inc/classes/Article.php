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
     * Initialise les objets créés par la classe article.
     * Appelée automatiquement lorsque l'on va instancier
     * des nouveaux objets.
     *
     * En écrivant $_monArgument = "", je rend cet argument OPTIONNEL.
     * C'est à dire que je peux ne pas l'envoyer quand je créé un nouvel
     * objet.
     *
     *
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
     * Il faut que cette fonction :
     * prenne la date dans la propriété "date" de l'objet,
     * puis qu'elle la traduise en français
     * Et enfin, qu'elle renvoie cette valeur.
     *
     * on part de 2017-07-13 pour avoir 13/07/2017
     *
     * @return string la date traduite en français.
     */
    public function getDateFr() {

        // 1e possibilité :
        // Utiliser les fonctions utilitaires "date" de PHP
        $timestamp = strtotime($this->date);
        $dateFr = date('d/m/Y', $timestamp);

        // 2e possibilité
        // Manipuler la chaine de caractère
        // sulution un peu moins universel
        $date = explode('-', $this->date);
        var_dump($this->date, $date);
        die();
        $dateFr = $date[2] . '/' . $date[1] . '/' . $date[0];

        // Je retourne ma chaine de caractère qui est
        // ma date au format FR
        return $dateFr;
    }

}
