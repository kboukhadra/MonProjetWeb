<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleController
 *
 * @author hb
 */
class ArticleController {

    private $repo;

    public function __construct($repo) {
        $this->repo = $repo;
    }

    /**
     * Index will show every article into a list
     * 
     * @return string HTML code of the content of page
     */
    public function indexAction() {
        // on forge la requete SQL
        $articles = $this->repo->getAll();
        $view = new View("article.index", array("articles" => $articles));

        return $view->getHtml();
    }

    /**
     * Allow the users to read an article on a given id via GET
     * 
     * @return string HTML code of the content of page
     */
    public function readAction() {
        // on récupère l'id de l'article à travers la var GET
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        // on demande l'article au repo
        $article = $this->repo->get($id);
        $view = new View("article.read", array("article" => $article));

        return $view->getHtml();
    }

    public function listeAction() {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        echo'<h2>Lecture de tous article</h2>';
        $articles = $this->repo->getAll();
        $view = new View("article.index", array("articles" => $articles));
        return $view->getHtml();
    }

    public function deleteAction() {
        $article = null;
        $id = null;

        if (isset($_POST['valider'])) {

            $article = $this->repo->delete($_POST['id']);
            addMessageRedirect(25, "valider", "Tu as bien supprimer ton élément", $url = "index.php");
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $view = new View("article.delete", array("article" => $article, "id" => $id));
        return $view->getHtml();
    }

    public function addAction() {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

        // si j'ai validé mon formulaire
        if (isset($_POST['valider'])) {
            
            // si j'ai un id dans le post
            if (isset($_POST['id']) AND $_POST['id'] > 0) {
                
                $id = (int) $_POST['id'];
                if ($id > 0) {// id est sup a zéro je fais un update
                    $this->repo->Update($id);
                    addMessageRedirect(0, "valid", "Votre article à été bien modifié ", "index.php");
                }

                // le $id du get
            } else {// sinon j'ajoute mon article
                $article = new Article();
                $this->repo->insert($article);
            }

            addMessageRedirect(0, "valid", "Votre article à été ajouter", "index.php");
        }


        $article = $this->repo->get($id);
        
        $view = new View("article.ajout", array("article" => $article, "id" => $id));
        return $view->getHtml();
    }

}
