<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../asset/css/bootstrap.css">
<link rel="stylesheet" href="../asset/js/bootstrap.js">
<link rel="stylesheet" href="../asset/css/style.css">
<title>LOGIN</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>

		<div class="col-md-4">
			<!-- login -->
			<fieldset>
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>S'inscrire</h3>
				</legend>
				<form action="controller/user.objet.php" method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label>NOM:</label>
							<input type="text" class="form-control" name="name" required>
							<p class="help-block"></p>
						</div>
                        <div class="controls">
							<label>Prénoms:</label>
							<input type="text" class="form-control" name="lastName" required>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Contact:</label>
							<input type="number" class="form-control" name="contact" required>
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" name="login" class="btn btn-success" style="border-radius:0%">Enregistrer</button>
					</center>
			</fieldset>
			</form>
		</div>
</body>
</html>

