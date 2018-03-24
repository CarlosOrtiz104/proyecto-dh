<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pagina final</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font/fonts.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/main.js"></script>

<!--inicio cabecera login-->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!--fin cabecera login-->

<!--Cabecera del footer-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--Fin de cabecera footer-->
</head>
<body>
	<?php require("paquetesUtiles/header.php"); ?>

		<div class="container">
				<div class="row">
						<div class="col-md-12">

								<div class="wrap">
										<p class="form-title">
											<img src="imagen/redbrick.png" width="21%"alt=""><br>
										 Bienvenido!!</p>
										<form class="login">
										<input type="text" placeholder="Username" pattern="^[\w._%-]+@[\w.-]+\.[a-zA-Z]{2,4}$" required/>
										<input type="password" placeholder="Password" required/>
										<input type="submit" value="Iniciar" class="btn btn-success btn-sm" />
										<a class="center-reset"><input type="reset" value="reset" class="btn btn-success btn-sm" /></a>

										<div class="remember-forgot">
												<div class="row">
														<div class="col-md-6">
																<div class="checkbox">
																		<label>
																				<input type="checkbox" />
																				Recuerdame
																		</label>
																</div>
														</div>
														<div class="col-md-6 forgot-pass-content">
																<a href="#" class="forgot-pass">Olvide mi clave</a>
														</div>
														<div class="col-md-6 register">
																<a href="registro.php" class="register">No esta registrado ?</a>
														</div>
												</div>
										</div>
										</form>
								</div>
						</div>
				</div>
		</div>

</body>
</html>
