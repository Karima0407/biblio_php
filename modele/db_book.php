<?php
require_once("../inc/db_connexion.php");
var_dump($_POST);
if (isset($_POST['envoi'])) {
   $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $publication = htmlspecialchars($_POST['publication']);
    $stock = htmlspecialchars($_POST['stock']);
   
    $db = dbConnexion(); //permet la connexion avec la base de données
    //preparation de la requete
    $request = $db->prepare("INSERT INTO book(title,author,publication, stock) VALUES (?,?,?,?)");
    //execution  de la requete
    try {
        $request->execute(array($title, $author, $publication, $stock));
    } catch (PDOException $e) {
        echo $e->getMessage(); //afficher l'erreur sql genere 
    }

}