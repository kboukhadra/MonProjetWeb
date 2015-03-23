<?php
session_start();
require('includes/all.php');
include ('Model/Article_Repository.php');
$repository = new Article_Repository($db);
include('includes/blocs/header.php');
require ('Controler/ArticleController.php');
$articleControl = new ArticleController($repository);

afficheMessage();
// $_GET['page'] contient page=
$maPage = isset($_GET['page']) ? $_GET['page'] : "ArticleListe";
if (isset($_GET['page'])) {


    switch ($maPage) {
        case "home" : include("pages/home.php");
            break;

        case "register" : include("pages/register-nv.php");
            break;

        case "register_traitement_nv" : include("pages/register_traitement_nv.php");
            break;

        case "articleRead" :// include("pages/ArticleRead.php");
            $html = $articleControl->readAction();
            break;

        case "ArticleListe" : //include("pages/ArticleListe.php");
            $html = $articleControl->listeAction();
            break;

        case "EditArticle" : //include("pages/EditArticle.php");
            $html = $articleControl->addAction();
            break;

        case "EditArticleTraitement" : include("pages/EditArticleTraitement.php");
            break;

        case "AjoutArticle" : //include("pages/AjoutArticle.php");
            $html = $articleControl->addAction();
            break;

        case "SupArticle" : //include ("pages/SupArticle.php");
             $html = $articleControl->deleteAction();
            break;
        default : include ("index.php");
    }
    echo $html;
}
        
include('includes/blocs/footer.php');








