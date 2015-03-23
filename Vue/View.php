<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author hb
 */
class View {

    private $template;
    private $params;

    public function __construct($template, $params) {
        $this->template = $template;
        $this->params = $params;
    }

    /**
     * Load a template, hydrate it with the params, and returns its html
     * 
     * @return string Html code of the hydrated view
     */
    public function getHtml() {
        
        // on test l'existence d'un fichier template dans le dossier vues
        if (isset($this->template) && !empty($this->template)) {
           
            // si le template existe on va l'inclure mais pas avec l'include
            if (file_exists("templates/" . $this->template . ".tpl.php")) {
                $html = $this->getIncludeContents();
                
                
                
            } else
                $html = "No file templates/" . $this->template . ".tpl.php has been found.<br/>";
        }
        return $html;
    }

    /**
     * Include a php file and returns its content
     * 
     * @return string
     */
    private function getIncludeContents() {
        // on démarre un nouveau buffer pour éviter de pousser le code 
        ob_start();
        // on redéclare chacune des variables depuis le tableau
        // par exemple si on avait $params['cle'] = valeur
        // on aura maintenant $cle = valeur;
        //on envoie  $view = new View("article.read", array("article" => $article))
        //template ="article.read" et params = array("article" => $article)
      
        foreach ($this->params as $key => $value) {// $this->params est un tableau assoc avec un autre tableau dedans
           
            $$key = $value;
            // le faite de faire cela $$key = $value nous allons obtenenir
            //$article=$value <=> $article=array('id'=>,'title'=> ,'content'=>)
            ///et le trasmettre dans notre vue avec le parametre $article ou $articles suivant 
            //l'instanciation de la vue
                }
       
               // puis on inclut le template
        // pour récupérer le code généré dans une variable,
        include("templates/" . $this->template . ".tpl.php");
        
         
        return ob_get_clean();
    }

}
