<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author hb
 */
class Article {
    public $id ;
    private $titre ;
    private $content ;
    
    
    
    public function display (){
        
        echo "votre article a un titre ".$this->titre;
        echo"</br>" ;
        echo " le contenu est :" ;
        echo"</br>";
        echo $this->content ;
        }
}
