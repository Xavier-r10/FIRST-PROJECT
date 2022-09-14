<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap.css" media="screen" type="text/css">
    <link rel="stylesheet" href="assets/css/login.css" media="screen" type="text/css">
    <title>Se connecter</title>
</head>
<body>
    <div class="left">
    
        <img src="assets/js/logo.jpg" alt="Logo" width=400px height=200px>
        
    </div>
    <div id="container">
        <form action="controller/user.objet.php" method="post">
            <h1>Se<b>_</b>connecter</h1>
            <label for="nom"><h3>Email</h3></label>
            <input type="email" placeholder="Entrer votre adresse email" name="email" required>

            <label for="Mot de passe"><h3>Mot de passe</h3></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN' >
            <h5><a href="Mdpo.php"> Mot<b>_</b>de<b>_</b>passe<b>_</b>oublié<b>_</b>? </a></h5>
            <h5 id="signup"><a href="créerCompte.php"> Créer<b>_</b>un<b>_</b>compte </a></h5><br>
            <h5 id="aide"><a href="AideNC.php"> Aide(?) </a></h5>

        </form>
    </div>
    
</body>
</html>