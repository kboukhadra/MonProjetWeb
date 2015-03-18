<?php
require('includes/connection.php');
include("includes/blocs/menu.php");
include('includes/function.php') ;


if(isset($_GET['page'])) {
    $maPage=$_GET['page'];

    switch($maPage ) {
        case "home" : include("home.php");
            break;

        case "register" : include("register-nv.php");
            break;

        case "register_traitement_nv" : include("register_traitement_nv.php");
             break;

        case "articleRead" : include("ArticleRead.php");
            break;

        case "ArticleListe" : include("ArticleListe.php");
            break;

        case "EditArticle" : include("EditArticle.php");
            break;

        case "EditArticleTraitement" : include("EditArticleTraitement.php");
            break ;

        case "AjoutArticle" : include("AjoutArticle.php");
            break ;

    }
} else {
    $page="index.php";
}



include('includes/blocs/header.php') ;
afficheMessage();
include('includes/blocs/footer.php') ;








