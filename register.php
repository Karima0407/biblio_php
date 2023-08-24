<?php include_once "./inc/header.php"; ?>
<div class="contenu">

    <div class="cadre">
        <button class="cnx">Connexion</button>
    </div>
    <form action="traitement.php" method="POST" enctype="multipart/form-data">
        <div><input type="text" name="email" id="" placeholder="Votre email"></div>
        <div><input type="text" name="pseudo" id="" placeholder="Votre pseudo"></div>
        <div><input type="password" name="password" id="" placeholder="Mot de passe"></div>
        <div><input type="password" name="repass" id="" placeholder="Confirmation mot de passe"></div>
        <div><input type="file" name="image" id=""></div>

        <button class="inscri" name="envoi">Inscription</button>

    </form>



</div>