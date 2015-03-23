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
       $maPage = isset($_GET['page']) ? $_GET['page'] : "";


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
                    
                    break;

                case "register" : include("pages/register-nv.php");
                   
                    break;

                case "register_traitement_nv" : include("pages/register_traitement_nv.php");
                    break;

                case "articleRead" :

                     $entityName = "article";
                     $actionName = "Read";
                    $this->content = $html = $articleController->readAction();
                    break;

                case "articleListe" : 
                    $entityName = "article";
                    $actionName = "Liste";
                    $this->content = $html = $articleController->listeAction();
                    break;

                case "articleEdit" : 
                    $entityName = "article";
                    $actionName = "Edit";
                    $this->content = $html = $articleController->ajoutAction();
                    break;

                

                case "articleAjout" : 
                    $entityName = "article";
                    $actionName = "Ajout";
                    $this->content = $html = $articleController->ajoutAction();
                    break;

                case "articleSup" : 
                    $entityName = "article";
                    $actionName = "Sup";
                    $this->content = $html = $articleController->supAction();
                    break;
                default : include ("index.php");
            }
        }
       
        
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        // III. / IV. On charge les fichiers nécessaires, et on instancie les classes de reco, controller
        // on retravaille la var obtenue pour obtenir un nom de la forme "ArticleController"
        
        $controllerName = ucfirst($entityName . "Controller");//affiche ArticleController
               // on inclut le controller
        include("Controller/" . $controllerName . ".php");
        // on inclut l'entité
       
        $entityName = ucfirst($entityName);// affiche Article
        
       
        include("Model/" . $entityName . ".php");
        // Repo - @todo Utiliser un gestionnaire de repo et les charger
       
        // depuis les actions de controller
        $repoName = ucfirst(strtolower($entityName)) . "Repository";// affiche ArticleRepository
        include("Model/" . $repoName . ".php");!
       
        // on instancie un nouveau repo
        $repo = new $repoName($this->db);
        // on instancie le controller
        $controller = new $controllerName($repo);
        // V. On regarde si l'action de controller existe, puis on la charge
        // on "retravaille la var obtenue pour obtenir un nom de la forme "indexAction"
        $actionName =strtolower($actionName);// affiche liste,ajout,sup
        
       $action = $actionName."Action";
        //comme je gère ajout et update je regarde si $action == editionAction si oui alors $acton ="ajoutAction
        if($action == "editAction" ){
            $action="ajoutAction";
        }
       
        // si la méthode demandée n'existe pas, remettre "index"
        if (!method_exists($controller, $action)) {
            $actionName = "liste";
            $action = "listeAction";
        }
        
        
        // on stock le titre sous la forme "Article - Index"
        $this->title = $entityName . "_" . $actionName;
        // on appelle dynamiquement la méthode de controller
        $this->content = $controller->$action();
        
        
        
    }

    public function showReponse() {
         include('includes/blocs/header.php');
        afficheMessage();
        if(isset($_GET['Controller'])){
            echo $this->content;
        }
        


        include('includes/blocs/footer.php');
    }

}
