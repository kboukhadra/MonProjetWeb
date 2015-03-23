<?php
// on vérifie si le $_GET['id'] existe si oui il est égale à (int)$_GET['id'] sinon 0
$id =isset($_GET['id']) ? (int)$_GET['id'] : 0 ;
?>


<?php

// on affiche les article en faisant foreach

 foreach($articles as $article){ ?>
    <article id="<?php echo $article->id; ?> ">
        <p><?php echo $article->title; ?>&nbsp&nbsp&nbsp
         <a href="index.php?Controller=article&Action=Ajout&id=<?php echo $article->id?> ">Modifier </a>&nbsp&nbsp&nbsp
        <a href="index.php?Controller=article&Action=Sup&id=<?php echo  $article->id?> ">Suppression </a></p>
        <a href="index.php?Controller=article&Action=Read&id=<?php echo  $article->id?> ">Lire l'article </a></p>
        <p>******************************************************************************************************************</p>
    </article>
  <?php
  }

?>
