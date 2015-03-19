<?php
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (isset($_POST['valider'])) {
    
    if (isset($_POST['id']) AND $_POST['id'] > 0) {
        
        $id = (int) $_POST['id'];
        if ($id > 0) {
            $repository->Update($id);
            
        }

        // le $id du get
    } else {
        $article = new Article();
        $repository->insert($article);
         
    }
    
    addMessageRedirect(0, "valid","Votre article à été bien inséré ou modifier","index.php?page=ArticleListe");
 
}


$article = $repository->get($id);
?>
<p>Ajout article/Edition Article</p>
<form method="post" action="index.php?page=AjoutArticle">
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
