<?php

if ($article) {
    
// on affiche l'article 
?>
<h1>Lecture d'un article</h1>

<article id="<?php echo $article->id; ?>">
    <h3>Titre :<u><?php echo $article->title; ?></u></h3>
	<p>Contenu :<?php echo nl2br($article->content); ?></p>
</article>

<?php 
// sinon on affiche un message d'erreur
} else {
	echo "<h2>Aucun article avec cet identifiant.</h2>";
}
