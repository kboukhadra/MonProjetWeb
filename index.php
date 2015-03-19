<?php
session_start();
require('includes/all.php');
include ('Model/Aricle_Repository.php');
$repository = new Aricle_Repository($db);
include('includes/blocs/header.php');

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

        case "articleRead" : include("pages/ArticleRead.php");
            break;

        case "ArticleListe" : include("pages/ArticleListe.php");
            break;

        case "EditArticle" : include("pages/EditArticle.php");
            break;

        case "EditArticleTraitement" : include("pages/EditArticleTraitement.php");
            break;

        case "AjoutArticle" : include("pages/AjoutArticle.php");
            break;

        case "SupArticle" : include ("pages/SupArticle.php");
            break;
        default : include ("index.php");
    }
}
include('includes/blocs/footer.php');








