<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
/**
 * Created by PhpStorm.
 * User: hb
 * Date: 11/03/2015
 * Time: 08:43
 */
function addMessage($code,$type,$lib){
    $_SESSION['messages'][]=array("code"=>$code,
                                "type"=>$type,
                                "lib"=>$lib,
                                );
}

/*echo'<h1 align="center">Bienvenue </h1>';
 echo'<ul>';
foreach($_POST as $key=>$valeur){
    echo'<li>'. $key.' : '.$valeur.'</li>' ;
    echo'</br>';

}
echo'</ul>' ;*/

$uploaddir = 'photo/';// fichier stockage

// chemin relatif
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);


if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
    addMessage(0, "valide", "fichier a été télécharger ok");

}
else {
    addMessage(1, "Error","inscription ok mais photo non uploadé");
}

/*if(empty($_POST['nom']) ){
    addMessage(2,"warning","remplir vos champ");
}
*/
header('Location: register.php');

?>