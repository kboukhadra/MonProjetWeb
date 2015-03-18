<?php

/**
 * les parametre d'ajout de messsage
 * @param type $code
 * @param type $type
 * @param type $lib
 * 
 */
function addMessage($code,$type,$lib){
    $_SESSION['messages'][]=array("code"=>$code,
        "type"=>$type,
        "lib"=>$lib,
    );
}

/**
 * 
 * afficher les 
 */
function afficheMessage(){
    if(!empty($_SESSION['messages']) AND isset($_SESSION['messages']) ){;

        foreach($_SESSION['messages'] as $message){

            echo $message['lib'];

        }
    }
}