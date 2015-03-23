<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aricle_Repository
 *
 * @author hb
 */
class ArticleRepository {

    private $db; // type PDO

    function __construct($db) {
        $this->db = $db;
    }

    /**
     * TReturn a Bo Article on a given id
     * @param type $id Id of Article
     * @return mixed  $article or null
     */
    function get($id) {
        // on forge la requete
        $sql = "SELECT  * FROM article WHERE id =" . $id;
        // on fait passer la requete a PDO
        $statement = $this->db->query($sql); // objet statement
        // si il y a un article fech retourne true sinon false

        $statement->setFetchMode(PDO::FETCH_CLASS, "Article"); //Article est le nom de la class
        $article = $statement->fetch();
        return $article;
    }

    function getAll() {
        // on forge la requete
        $sql = "SELECT  * FROM article";
// on fait passer la requete a PDO
        $statement = $this->db->query($sql); // objet statement
// si il y a un article fech retourne true sinon false
        $statement->setFetchMode(PDO::FETCH_CLASS, "Article"); //Article est le nom de la class
        $articles = $statement->fetchAll(); // articles regroupe tout les objet article
        return $articles;
    }

    function delete($id) {
        $sql = "DELETE FROM article WHERE id =" . $id;
        // on fait passer la requete a PDO
        return $this->db->exec($sql); // objet statement
        // si il y a un article fech retourne true sinon false
    }

    function Insert(Article $article) {

        $title = $article->title = $_POST['titre'];
        $content = $article->content = $_POST['contenu'];
        $sql = "INSERT INTO article(title,content) VALUES(:title , :content)";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":content", $content);
        $result = $statement->execute();
    }

    function Update($id) {
        // on forge la requete
        $sql = "UPDATE  article SET title=:title, content=:content WHERE id=" . $id;
        //$_POST['titre'] est issue du formulaire
        $title = $_POST['titre'];
        //$_POST['titcontenure'] est issue du formulaire
        $content = $_POST['contenu'];
        //prepare la requete $db = new PDO($dsn ,$user , $pwd) ;
        $statement = $this->db->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":content", $content);

        $result = $statement->execute();
    }

}
