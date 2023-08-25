<body>
    <div class="container">
        <h2>Formulaire de Contact</h2>

        <form action="./modele/db_book.php" method="post">

            

            <div class="form-group">
                <label for="nom">Title :</label>
                <input type="text" class="form-control" id="nom" name="title" required>
            </div>
            <div class="form-group">
                <label for="prenom">Author:</label>
                <input type="text" class="form-control" id="prenom" name="author" required>
            </div>

            <div class="form-group">
                <label for="email">publication :</label>
                <input type="date" class="form-control" id="email" name="publication" required>
            </div>
            <div class="form-group">
                <label for="message">Stock:</label>
                <input type="text" name="stock" id="">
            </div>



            <button type="submit" class="btn btn-primary" name='envoi'>Envoyer</button>
        </form>
    </div>
</body>

</html>