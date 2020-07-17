<!DOCTYPE html>

    <link rel="stylesheet" type="text/css" href="index.css" media="screen" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <head>
        <meta charset="utf-8"/>
        <title>Connexion</title>
    </head>

<body>

    <div class="w3-bar w3-black w3-hide-small">
        <a href="connexion.php" class="w3-bar-item w3-button w3-right">Connexion</i></a>
        <a href="accueil.php" class="w3-bar-item w3-button w3-right">Accueil</i></a>
        <a href="articles.php" class="w3-bar-item w3-button w3-right">Articles</i></a>
        <a href="contact.php" class="w3-bar-item w3-button w3-right">Contact</i></a>
    </div>

    <?php
    session_start();
    ?>
    <div class ="contenu">
        <h2 class="text">Connexion</h2>

    <form action="securite.php" method="post">
        <input type="text" placeholder="Login" name="Login">
            <br>
        
            <input type="text" placeholder="Password" name="password">
            <br>
            <button type="submit" value="Envoyer">Envoyer</button>
        </form>
        </body>
    </html>

    <footer>
        <div class="w3-bar w3-black w3-bottom w3-hide-small">
            <a href="https://www.instagram.com/perrinemetz/?hl=fr" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
            <a href="https://fr.linkedin.com/in/perrine-metz-4a6445198" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
            <a href="contact.php" class="w3-bar-item w3-button w3-right">perrine.metz@iseg.fr</i></a>
        </div>
    </footer>
  
</body>        
</html>