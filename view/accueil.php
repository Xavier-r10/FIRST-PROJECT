<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

