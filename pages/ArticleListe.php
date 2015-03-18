<?php
/**
 * Created by PhpStorm.
 * User: hb
 * Date: 16/03/2015
 * Time: 12:59
 */

$id =isset($_GET['id']) ? (int)$_GET['id'] : 0 ;
?>
<h2>Lecture de tous article</h2>

<?php
// on forge la requete
$sql = "SELECT  * FROM article" ;
// on fait passer la requete a PDO
$statement = $db->query($sql); // objet statement
// si il y a un article fech retourne true sinon false
$articles = $statement -> fetchAll() ;

// on affiche les article

echo'allo' ;
  foreach($articles as $article){ ?>
    <article id="<?php echo $article['id']; ?> ">
        <p><?php echo $article['title']; ?>
         <a href="index.php?page=AjoutArticle&id=<?php echo $article['id']?> ">Modifier </a></p>
        <p>******************************************************************************************************************</p>
    </article>
  <?php
  }



?>
