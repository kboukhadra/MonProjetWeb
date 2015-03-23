<?php

if ($articles) {
    $nbRows = count($articles);
// on affiche l'article 
    ?>
    <h2>Liste des articles (<?php echo (int) $nbRows; ?>)</h2>
    <ul>
        <?php foreach ($articles as $article) { ?>
            <li id="<?php echo $article->id; ?>">
                <a href="index.php?page=articleRead&id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a>
                 <a href="index.php?page=AjoutArticle&id=<?php echo $article->id; ?>">edit</a>
                - <a href="index.php?page=SupArticle&id=<?php echo $article->id; ?>">delete</a>
            </li>
        <?php
    }
    ?>
    </ul>
        <?php
// sinon on affiche un message d'erreur
    } else {
        ?>
        <h2>Aucun article avec cet identifiant.</h2>
        <?php
    }
    ?>
<p><a href="index.php?page=AjoutArticle">Ajouter un article</a></p>

