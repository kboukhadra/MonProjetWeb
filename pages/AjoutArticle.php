<?php
$id =isset($_GET['id']) ? (int)$_GET['id'] : 0 ;

if(isset($_POST['valider'])){


    if(isset($_POST['id']) AND $_POST['id']>0){
        $id =(int) $_POST['id'];
    }
    // le $id du get
    if($id>0){
        $sql = "UPDATE  article SET title=:title, content=:content WHERE id=".$id;

    }
    else{
        $sql = "INSERT INTO article(title,content) VALUES(:title , :content)";

    }

$statement = $db->prepare($sql);
$statement->bindParam(":title", $_POST['titre']);
$statement->bindParam(":content", $_POST['contenu']);

$result = $statement->execute();

    addMessage(0,"valid","Votre article à été bien inséré ou modifier") ;
    header('Location: index.php') ;
}



// on forge la requete
$sql = "SELECT  * FROM article WHERE id =".$id ;
// on fait passer la requete a PDO
$statement = $db->query($sql); // objet statement
// si il y a un article fech retourne true sinon false
$article = $statement -> fetch()


    ?>
    <p>Ajout article/Edition Aticle</p>
    <form method="post" action="index.php?page=AjoutArticle">
        <p>
            <label for="Titre">Titre:</label>
            <input type="text" name="titre" value="<?php echo $article['title']; ?>  "/>

            <br/>
            <label for="Contenu">Contenu :</label>
            <textarea name="contenu" rows=20 COLS=30 "><?php echo $article['content']; ?></textarea>

            <input type="submit" value="valider" name="valider">

        </p>
    </form>
