<!doctype html>
<html lang="en">
  <head>
  	<title>Registrate</title>
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
    
     <!-- Pantalla de inicio, conexion con el inicio,registro y el ingreso -->

        
        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner4.JPG)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-20">
                        <div class="header-hero-content text-center">
                          
                            <div class="header__information">
                <h2 class="form__title">BIENVENIDO</h2>
                      
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header


   
       > <br></br>
       
        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12">
          <form id="contactForm" action="mailto:susejmichellonga@gmail.com" method="post" name="form1">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required data-error="Por favor escribir su nombre">
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Apellido" id="msg_subject" class="form-control" name="msg_subject" required data-error="Por favor escribir su Apellido">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Correo Electronico" required data-error="Por favor escribir su correo">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Nombre de la Direccion" id="budget" class="form-control" name="budget" required data-error="Por favor escribir el nombre de la direccion">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" id="message"  name="message" placeholder="Write Message" rows="4" data-error="Write your message" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button">
                  <button class="btn btn-common" id="submit" type="submit">Submit</button>
                  <div id="msgSubmit" class="h3 hidden"></div> 
                  <div class="clearfix"></div> 
                </div>
              </div>
            </div>            
          </form>
          </div>