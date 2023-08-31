<?php 
require_once('../inc/db_connexion.php');
if (isset($_POST['submit'])){
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);

   
    //etablir la connexion avec la bd
    $db=dbConnexion();
    //preparer la requete
    $request=$db->prepare("SELECT * FROM user WHERE email = ?");
    // executer la requete
    try{
        $request->execute(array($email));
        //recuperer le resultat de la requete
        $userInfo=$request->fetch();
        (PDO::FETCH_ASSOC); // pour retoourner un tableau associatif
        // echo '<pre>';
        // print_r($userInfo);
        // echo '<pre>';

        if(empty($userInfo)){
            $_SESSION["error"]='utilisateur inconnu';
            header("Location:connexion.php");
            
        }else{
            // verifier si le mot de passe est correct
            if(password_verify($password,$userInfo['password'])){
                // si l'utilisateur est un admin 
                echo 'bienvenue ';
            }else{
                echo "aah tu fais le malin";
            }
        }

    }catch(PDOException $e){
      $e->getMessage();
    }
}

?>
