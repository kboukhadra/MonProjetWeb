<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <title>Mon formulaire d'enregistrement</title>
    <link rel="stylesheet" type="text/css" href="Lestyle.css">
</head>
<body>
<?php
echo'<pre>';
print_r($_SESSION['messages']);
echo'</pre>';

/*
if(!empty($_SESSION['messages']) AND isset($_SESSION['messages']) ){;

    echo '<p> les message est :'.$_SESSION['messages']['lib'].'</p>' ;
}
*/
unset($_SESSION['messages']);
?>
<div class="madivision">
    <form method="post" action="register_traitement.php" enctype="multipart/form-data">
        <h2>formulaire d'enregistrement</h2>
        <label >Civilité  : <select required="required">
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
            <option value="Mademoiselle">Mademoiselle</option>
        </select></label></br></br>
        <label >Nom :<input  type="text" name="nom"   placeholder="Entrez votre nom"></label></br></br>
        <label >Prenom :<input type="text" name="prenom"  placeholder="Entrez votre prenom"></label></br></br>
        <label >Date de Naissance :<input type="date" name="date" required="required"></label></br></br>
        <label >Email  :<input type="email" name="mail" ></label></br></br>
        <label >Login :<input type="text" name="login" ></label></br></br>
        <label >Mot de passe :<input type="password" name="mdp" ></label></br></br>

        <label >Photo :<input type="file" name="photo" ></label></br></br>


        <label >Telephone :<input type="tel" name="telephone"></label></br></br>
        <label >Presentation :<textarea name="presentation" rows="10" cols="20"></textarea></label></br></br>
        <label >Adresse du site :<input type="url" name="url" ></label></br></br>
        <label >Sexe :Masculin <input type="radio" name="genre" ></label>
        <label > Feminin :<input type="radio" name="genre" ></label></br></br>


        <label > S'abonner à la Newsletters :<input type="checkbox" name="lettre" ></label></br></br>
        </br>
        <input type="submit" name="valider">


    </form>

</div>

</body>
</html>