<?php
require('includes/connection.php');
include("includes/blocs/menu.php");
include('includes/function.php') ;


if(isset($_GET['page'])) {
    $maPage=$_GET['page'];

    switch($maPage ) {
        case "home" : include("home.php");
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
            break ;

        case "AjoutArticle" : include("pages/AjoutArticle.php");
            break ;

    }
} else {
    $page="index.php";
}



include('includes/blocs/header.php') ;
afficheMessage();
include('includes/blocs/footer.php') ;








