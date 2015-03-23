
<p>Ajout article/Edition Article</p>
<form method="post" action="index.php?page=articleAjout">
    <p>
        <label for="Titre">Titre:</label>
        <input type="text" name="titre" value="<?php echo ($id > 0) ? $article->title : ""; ?>  "/>
         <input type="hidden" name="id" value="<?php echo ($id > 0) ? $article->id : ""; ?>  "/>


        <br/>
        <label for="Contenu">Contenu :</label>
        <textarea name="contenu" rows=20 COLS=30 ><?php echo ($id > 0) ? $article->content : ""; ?></textarea>

        <input type="submit" value="valider" name="valider">

    </p>
</form>
