<?php
/**
 * Created by PhpStorm.
 * User: hb
 * Date: 16/03/2015
 * Time: 09:54
 */

$id =isset($_GET['id']) ? (int)$_GET['id'] : 0 ;
?>
<h2>Lecture d'un article</h2>

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


