<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css" media="screen" type="text/css">
    <link rel="stylesheet" href="../assets/css/accueil.css" media="screen" type="text/css">
<title>LOGIN</title>
</head>
<body>
    <div id="container">
        <form action="" method="post">
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>SOYEZ LE BIENVENU!!!</h3>
				</legend>
				<p><B><I>Merci de remplir cette formulaire!</I></B></p>
				<form action="controller/user.objet.php" method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label><B>NOM:</B></label>
							<input type="text" class="form-control" name="name" required>
							<p class="help-block"></p>
						</div>
                        <div class="controls">
							<label><B>Prénoms:</B></label>
							<input type="text" class="form-control" name="lastName" required>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label><B>Contact:</B></label>
							<input type="number" class="form-control" name="contact" required>
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" name="login" class="btn btn-success" style="border-radius:0%">Enregistrer</button>
					</center>
</body>
</html>

