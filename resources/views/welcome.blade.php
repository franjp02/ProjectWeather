<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <title>HOME</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/carousel.css" rel="stylesheet">

    <link rel="stylesheet" href="themify-icons/themify-icons.css">
    <link rel="stylesheet" href="css/reloj.css">

    <link href="css/estilos.css" rel="stylesheet">

  </head>
  <body onload="cargarReloj()">
    
     <div class="container">
      <header class=" masthead">
        <nav class="navbar navbar-expand-md navbar-bg rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item">
                <a href="index.html">
                  <img src="img/icon.png" width="40px" >
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="servicios.html">Servicios</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nosotros</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="nosotros.html">El Equipo</a>
                  <a class="dropdown-item" href="nosotros.html">Misión</a>                
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contacto</a>
              </li>
              <li class="nav-item">
                <div id="relojnumerico" class="reloj" onload="cargarReloj()"></div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      
      <main role="main">

        <div id="myCarousel" class="carousel slide rounded mb-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="img/foto1.jpg" alt="First slide">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1 class="tcs"><strong>Informate de nuestros servicios</strong></h1>
                  <p class="tcs">Obtenga un presupuesto inmediato y reserve su servicio de mensajería en solo unos clics</p>
                  <p><a class="btn btn-lg btn-primary" href="servicios.html" target="_blank" role="button">Leer más</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="img/foto2.jpg" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1 class="tcs"><strong>Envío de artículos personales,servicio de paquetería para enviar maletas,transporte de electrónicos al extranjero y ¡mucho más!</strong></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="img/foto3.jpg" alt="Third slide" width="100px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <h2>Servicios</h2>
            <p>ofrece una gran variedad de servicios de paquetería: desde servicios de envíos internacionales de paquetes,vehículos y servicios de mudanzas.</p>
            <p><a class="btn btn-primary" href="servicios.html" target="_blank" role="button">Ver detalles &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <h2>Conócenos</h2>
            <p>Somos una pequeña empresa en continuo crecimiento,</p>
            <p><a class="btn btn-primary" href="nosotros.html" target="_blank" role="button">Leer más &raquo;</a></p>
          </div>
        </div>  
      </main>

      </div>

      <div class="footr">
      <footer>
        <div class="container mt-4">
          <p>&copy; <script>document.write(new Date().getFullYear())</script>Desarrollado por <a>Francisco Jiménez</a> </p>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/reloj.js"></script>
        
  </body>
</html>
