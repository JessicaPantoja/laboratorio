<!DOCTYPE html>
<html>
<head>
	<!--Meta-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Title-->
	<title>Administrador - visualizando las ciencias</title>

	!--====== ESTILOS ======-->
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/susi.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style22.css">
</head>

<body>
    
	<header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">

                            <a class="navbar-brand" href="index.html">
                               
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                             <!-- union con la carpeta registro, conexion y login -->


                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">

                                    <li class="navbar-btn d-none d-sm-inline-block">
                                        <a class="main-btn" data-scroll-nav="0" href="#home">Inicio</a>
                                    </li>

                                    <li class="fa-solid fa-arrow-right-to-bracket">
                                        <a class="main-btn" data-scroll-nav="0" href="login.php">Ingresar</a>
                                    </li>
                                </ul>
                            </div> 
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" data-scroll-nav="0" href="registro.php">Registrar</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        |
	<!-- Messages -->
		
    	
	
		<form class="form__content" 
		method="POST" 
		action="https://cientificos.mppe.gob.ve/login">
		
		<input type="hidden" name="_token" value="7MR3Bxfd4d7L4gD3WnrNzShOQ4daOc0E71URpHHz" autocomplete="off">		<h2 class="form__icon">
			<i class="fa-solid fa-user-shield"></i>
		</h2>
		<h2 class="form__title">Administrador</h2>
		<div class="form__item form__item--small">
			<label for="email">Correo Eléctronico:</label>
			<input class="form__input" 
					name="email" 
					required 
					type="email" 
					id="email" 
					placeholder="usuario@gmail.com"
					autocomplete="off">
		</div>
		<div class="form__item form__item--small">
			<label for="password">Contraseña:</label>
			<input class="form__input" 
					name="password" 
					required 
					type="password" 
					id="password" 
					placeholder="****"
					minlength="4"
					maxlength="20"
					autocomplete="off">
			<p class="form__eye"><i id="form_eye" class="fa-solid fa-eye"></i></p>
		</div>
		<div class="boxLinkText">
			<a href="https://cientificos.mppe.gob.ve/forget/password" class="linkText">Se me olvidó la contraseña</a>
			<a href="https://cientificos.mppe.gob.ve/login" class="linkText">Volver</a>
		</div>
		<div class="a">
			<input type="hidden" id="role" name="role" value="admin">
		</div>
		<input class="form__send" type="submit" value="Entrar">
	</form>



	<!--Scripts-->
	<script type="module" src="https://cientificos.mppe.gob.ve/js/components/navItemSelected.js"></script>
	<script type="module" src="https://cientificos.mppe.gob.ve/js/components/message.js"></script>
	<script type="module" src="https://cientificos.mppe.gob.ve/js/components/windowsLoad.js"></script>
		<script type="module" src="https://cientificos.mppe.gob.ve/js/form/formEye.js"></script>
	<script type="module" src="https://cientificos.mppe.gob.ve/js/form/form.js"></script>
</body>
</html>