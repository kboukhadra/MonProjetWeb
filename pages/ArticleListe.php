<?php


$id =isset($_GET['id']) ? (int)$_GET['id'] : 0 ;
?>
<h2>Lecture de tous article</h2>

<?php
$articles = $repository->getAll();
// on affiche les article en faisant foreach

 foreach($articles as $article){ ?>
    <article id="<?php echo $article->id; ?> ">
        <p><?php echo $article->title; ?>&nbsp&nbsp&nbsp
         <a href="index.php?page=AjoutArticle&id=<?php echo $article->id?> ">Modifier </a>&nbsp&nbsp&nbsp
        <a href="index.php?page=SupArticle&id=<?php echo  $article->id?> ">Suppression </a></p>
        <a href="index.php?page=articleRead&id=<?php echo  $article->id?> ">Lire l'article </a></p>
        <p>******************************************************************************************************************</p>
    </article>
  <?php
  }

?>
