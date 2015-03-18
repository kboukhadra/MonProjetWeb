<?php


$id =isset($_GET['id']) ? (int)$_GET['id'] : 0 ;
?>
<h2>Modification  d'un article</h2>

<?php
// on forge la requete
$sql = "SELECT  * FROM article WHERE id =".$id ;
// on fait passer la requete a PDO
$statement = $db->query($sql); // objet statement
// si il y a un article fech retourne true sinon false
if($article = $statement -> fetch()) {

// on affiche l'article
    ?>
    <article id="<?php echo $article['id']; ?> ">
        <h2><?php echo $article['title']; ?></h2>

        <p><?php echo nl2br($article['content']); ?></p>
        <p>**************************************************************</p>
    </article>
<?php
}
else {
    echo'<font color="red">aucun article dans le base</font>';
}
?>


<p>Formulaire de modifiaction</p>
<form method="post" action="EditArticleTraitement.php">
    <p>
        <label for="Titre">Titre:</label>
        <input type="text" name="titre" value="<?php echo $article['title']; ?>" />

        <br />
        <label for="Contenu">Contenu :</label>
        <textarea name="contenu" rows=20 COLS=30 "><?php echo nl2br($article['content']) ?></textarea>
        <input type="submit" value ="valider" name="valider">

    </p>
</form>




