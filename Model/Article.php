<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Article is a BO Handle Articles
 *
 * @author hb
 */
class Article {
    public $id ;
    public $title ;
    public $content ;
    
    /**
     * fonction constructeur
     * @param type $id
     * @param type $title
     * @param type $content
     */
    public function __construct($id, $title, $content) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    
    public function display (){
        
        echo "votre article a un titre ".$this->title;
        echo"</br>" ;
        echo " le contenu est :" ;
        echo"</br>";
        echo $this->content ;
        }
        
        
        function getId() {
            return $this->id;
        }

        function getTitle() {
            return $this->title;
        }

        function getContent() {
            return $this->content;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setTitle($title) {
            $this->title = $title;
        }

        function setContent($content) {
            $this->content = $content;
        }

  
        
}
