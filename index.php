<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>