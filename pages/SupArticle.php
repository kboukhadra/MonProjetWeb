<?php
 if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    if(isset($_POST['valider'])){
    
    $db->exec("DELETE FROM article WHERE id=".$id." ");
    header('Location: index.php');
   
 
}
    
echo'<form action = "" method="post" >
    <p>tu va supprimer l\'article'.$id.'</p>
<input type = "hidden" name="id">
<input type = "submit" name="valider" value = "Valider">
<input type = "submit" name="annuler" value = "annuler">';
    }
?>