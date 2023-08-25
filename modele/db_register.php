<?php
require_once("../inc/db_connexion.php");
var_dump($_POST);
if(isset($_POST['envoi'])){
    $lastname=htmlspecialchars($_POST['lastname']);
    $firstname=htmlspecialchars($_POST['firstname']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);
    $phone=htmlspecialchars($_POST['phone']);
    $country=htmlspecialchars($_POST['country']);
    $birthday=htmlspecialchars($_POST['birthday']);
    if(isset($_POST['conditions'])){
        $conditions=htmlspecialchars($_POST['conditions']);
 }else{
    echo 'veuillez cocher la case';
 }
    $password=htmlspecialchars($_POST['password']);
    $social_title=htmlspecialchars($_POST['social_title']);
    $mdpCrypt=password_hash($password,PASSWORD_DEFAULT);
    

    $db = dbConnexion(); //permet la connexion avec la base de données
    //preparation de la requete
    $request = $db->prepare("INSERT INTO user(social_title,firstname,lastname, email, password ,country,phone,birthday,message,conditions) VALUES (?,?,?,?,?,?,?,?,?,?)");
    //execution  de la requete
    try {
        $request->execute(array($social_title, $firstname, $lastname,$email,$mdpCrypt,$country,$phone,$birthday,$message,$conditions));
    } catch (PDOException $e) {
        echo $e->getMessage(); //afficher l'erreur sql genere 
    }
    
}
