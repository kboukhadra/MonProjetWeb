<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Application
 *
 * @author hb
 */
class Application {

    private $db;
    private $content;
    private $title;

    function __construct($db) {
        $this->db = $db;
    }

    public function handleRequest() {
        $repository = new ArticleRepository($this->db);
        $articleController = new ArticleController($repository);
        // $_GET['page'] contient page=
        $maPage = isset($_GET['page']) ? $_GET['page'] : "articleListe";

        switch ($maPage) {
            case "home" : include("pages/home.php");
                break;

            case "register" : include("pages/register-nv.php");
                break;

            case "register_traitement_nv" : include("pages/register_traitement_nv.php");
                break;

            case "articleRead" :// include("pages/ArticleRead.php");
                $this->content=$html = $articleController->readAction();
                break;

            case "articleListe" : //include("pages/ArticleListe.php");
                $this->content=$html = $articleController->indexAction();
                break;

            case "articleEdit" : //include("pages/EditArticle.php");
                $this->content=$html = $articleController->addAction();
                break;

            case "EditArticleTraitement" : include("pages/EditArticleTraitement.php");
                break;

            case "articleAjout" : //include("pages/AjoutArticle.php");
                $this->content=$html = $articleController->addAction();
                break;

            case "articleSup" : //include ("pages/SupArticle.php");
                $this->content=$html = $articleController->deleteAction();
                break;
            default : include ("index.php");
        }
    }

    public function showReponse() {
        include('includes/blocs/header.php');
        afficheMessage();

        echo $this->content;


        include('includes/blocs/footer.php');
    }

}
