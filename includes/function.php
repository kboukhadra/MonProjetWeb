<?php
/**
 * Created by PhpStorm.
 * User: hb
 * Date: 12/03/2015
 * Time: 11:30
 */

function addMessage($code,$type,$lib){
    $_SESSION['messages'][]=array("code"=>$code,
        "type"=>$type,
        "lib"=>$lib,
    );
}


function afficheMessage(){
    if(!empty($_SESSION['messages']) AND isset($_SESSION['messages']) ){;

        foreach($_SESSION['messages'] as $message){

            echo $message['lib'];

        }
    }
}