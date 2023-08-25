<!-- 
// require_once('./inc/header.php');
 -->

<body>
    <div class="container">
        <h2>Formulaire de Contact</h2>

        <form action="./modele/db_register.php" method="post">

         <div class="form-group">
                <label>Genre :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="social_title" id="homme" value="homme">
                    <label class="form-check-label" for="homme">Homme</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="social_title" id="femme" value="femme">
                    <label class="form-check-label" for="femme">Femme</label>
                </div>
            </div>
           
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom :</label>
                <input type="text" class="form-control" id="prenom" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mot de passe:</label>
                <input type="password" name="password" id="">
            </div>

             <div class="form-group">
                <label for="pays">Pays :</label>
                <select class="form-control" id="pays" name="country">
                    <option value="france">France</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

             <div class="form-check">
                <label class="form-check-label" for="tel">Tel</label>
                <input class="form-check-input" type="number" id="tel" name="phone">
            </div>

             <div class="form-check">
                <label class="form-check-label" for="tel">Birthday</label>
                <input class="form-check-input" type="date" id="tel" name="birthday">
            </div>

            <div class="form-group">
                <label for="message">Message :</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="message">Conditions:</label>
                <input type="checkbox" id=""name="conditions">
            </div>


            <button type="submit" class="btn btn-primary" name='envoi'>Envoyer</button>
        </form>
    </div>
</body>

</html>