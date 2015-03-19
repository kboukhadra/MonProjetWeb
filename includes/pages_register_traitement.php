<?php
header('Content-Type: text/html; charset=utf-8');
$uploaddir = 'photo/';// fichier stockage

// chemin relatif
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);


if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
    addMessageRedirect(0, " valide ", " fichier a été télécharger ok ","index.php?page=register");

}
else {
    addMessageRedirect(1, " Error "," inscription ok mais photo non uploadé ","index.php?page=register");
}
?>