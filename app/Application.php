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
        /*$repository = new ArticleRepository($this->db);
        $articleController = new ArticleController($repository);*/
        // $_GET['page'] contient page=
        $maPage = isset($_GET['page']) ? $_GET['page'] : "articleListe";


        ///////////////////////////////////////////////////////////////////////////////
        // I. On récupère l'action demandée par l'utilisateur, avec retrocompatibilité
            // Controller et Entité
        $entityName = (isset($_GET['Controller']) ? $_GET['Controller'] : "article");
      
            // on retravaille le nom pour obtenir un nom de la forme "Article"
        $entityName = (strtolower($entityName));
  
            // Action
        $actionName = (isset($_GET['Action']) ? $_GET['Action'] : "index");
        $actionName = ucfirst(strtolower($actionName));

        //////////////////////////////////////////////////////////////////////////////

        $page = (isset($_GET['page']) ? $_GET['page'] : "DEPREC");
        if ($page != "DEPREC") {
            switch ($maPage) {
                case "home" : include("pages/home.php");
                    $entityName = "home";
                   $actionName = "";
                    break;

                case "register" : include("pages/register-nv.php");
                    $entityName = "article";
                    $actionName = "Read";
                    break;

                case "register_traitement_nv" : include("pages/register_traitement_nv.php");
                    break;




                case "articleRead" :// include("pages/ArticleRead.php");

                     $entityName = "article";
                     $actionName = "Read";
                    $this->content = $html = $articleController->readAction();
                    break;

                case "articleListe" : //include("pages/ArticleListe.php");
                    $entityName = "article";
                    $actionName = "Liste";
                    $this->content = $html = $articleController->indexAction();
                    break;

                case "articleEdit" : //include("pages/EditArticle.php");
                    $entityName = "article";
                     $actionName = "Edit";
                    $this->content = $html = $articleController->addAction();
                    break;

                case "EditArticleTraitement" : include("pages/EditArticleTraitement.php");
                    break;

                case "articleAjout" : //include("pages/AjoutArticle.php");
                    $entityName = "article";
                    - $actionName = "Ajout";
                    $this->content = $html = $articleController->addAction();
                    break;

                case "articleSup" : //include ("pages/SupArticle.php");
                    $entityName = "article";
                    $actionName = "Sup";
                    $this->content = $html = $articleController->deleteAction();
                    break;
                default : include ("index.php");
            }
        }
        
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        // III. / IV. On charge les fichiers nécessaires, et on instancie les classes de reco, controller
        // on retravaille la var obtenue pour obtenir un nom de la forme "ArticleController"
        $controllerName = $entityName . "Controller";
        // on inclut le controller
        include("Controller/" . $controllerName . ".php");
        // on inclut l'entité
        $entityName = ucfirst($entityName);
        //echo $entityName;
        include("Model/" . $entityName . ".php");
        // Repo - @todo Utiliser un gestionnaire de repo et les charger
        // depuis les actions de controller
        $repoName = ucfirst(strtolower($entityName)) . "Repository";
        include("Model/" . $repoName . ".php");
        // on instancie un nouveau repo
        $repo = new $repoName($this->db);
        // on instancie le controller
        $controller = new $controllerName($repo);
        // V. On regarde si l'action de controller existe, puis on la charge
        // on retravaille la var obtenue pour obtenir un nom de la forme "indexAction"
        $action = $actionName . "Action";
        // si la méthode demandée n'existe pas, remettre "index"
        if (!method_exists($controller, $action)) {
            $actionName = "index";
            $action = "indexAction";
        }
        
        
        
    }

    public function showReponse() {
        include('includes/blocs/header.php');
        afficheMessage();

        echo $this->content;


        include('includes/blocs/footer.php');
    }

}
