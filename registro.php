<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Pagina final</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="font/fonts.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	</head>
	<body>
	  <header>
			<div class="menu_bar">
				<a href="#" class="bt-menu"><span class="icon-menu"></span>Menu</a>
			</div>
			<nav>
				<ul>
					<li><a href="#"><span class="icon-home"></span>Inicio</a></li>
					<li><a href="#"><span class="icon-pen"></span>Trabajos</a></li>
					<li class="submenu">
						<a href="#"><span class="icon-rocket"></span>Proyectos<span class="caret icon-arrow-down6"></span></a>
						<ul class="children">
							<li><a href="#">Dato sub menu<span class="icon-quill"></span></a></li>
							<li><a href="#">Dato sub menu 2<span class="icon-quill"></span></a></li>
							<li><a href="#">Dato sub menu 3<span class="icon-quill"></span></a></li>
						</ul>
					</li>
					<li><a href="#"><span class="icon-tree"></span>Servicios</a></li>
					<li><a href="#"><span class="icon-mobile"></span>Contacto</a></li>
	        <li><a href="login.php"><span class="icon-compass"></span>Login</a></li>
				</ul>
			</nav>

	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">

	                <div class="wrap">
	                    <p class="form-title">
												<img src="imagen/redbrick.png" width="21%"alt=""><br>
	                     Ingrese sus datos para el registro</p>
	                    <form class="login">
												<input type="text" placeholder="Nombre" required/>
												<input type="text" placeholder="Apellido" required/>
	                    	<input type="text" placeholder="Email" pattern="^[\w._%-]+@[\w.-]+\.[a-zA-Z]{2,4}$" required/>
	                    	<input type="password" placeholder="Password" required/>
												<input type="password" placeholder="Re ingrese Password" required/>
												<div class="remember-forgot">
		                        <div class="row">
		                            <div class="col-md-12">
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
		                        </div>
		                    	</div>
													<input type="submit" class="btn btn-success btn-sm"></button>
	                    		<a class="center-reset"><input type="reset" value="reset" class="btn btn-success btn-sm" /></a>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
			<div><!--SCRIPTS-->
				<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
				<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			</div>
		</header>
	</body>
</html>
