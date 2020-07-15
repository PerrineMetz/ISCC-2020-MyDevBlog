<!DOCTYPE html>

    <link rel="stylesheet" type="text/css" href="index.css" media="screen" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Contact</title>
    </head>

<body>
    
<!--
    <div id="preloader">
        <div class="load-wrapp">
            <div class="load-10">
                <p>Devblog experience</p>
                <p class="txtloading">By Perrine Metz.</p>
                <div class="bar"></div>
            </div>
        </div>
    </div>-->

    <div class="w3-bar w3-black w3-hide-small">
        <a href="#" class="w3-bar-item w3-button w3-right">Connexion</i></a>
        <a href="HTMLPage1.html" class="w3-bar-item w3-button w3-right">Accueil</i></a>
        <a href="#" class="w3-bar-item w3-button w3-right">Articles</i></a>
        <a href="#" class="w3-bar-item w3-button w3-right">Contact</i></a>
    </div>

    <div class="w3-bar w3-black w3-bottom w3-hide-small">
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-right">perrine.metz@jesaispas.com</i></a>
    </div>

    <?php
    session_start();
    ?>
        
    <form action="securite.php" method="post">
        <input type="text" placeholder="Login" name="Login">
            <br>
        
            <input type="text" placeholder="Password" name="password">
            <br>
            <button type="submit" value="Envoyer">Envoyer</button>
        </form>
        </body>
    </html>

    <footer></footer>
    <script src="index.js"></script>
</body>        
</html>