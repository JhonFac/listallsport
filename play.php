<!DOCTYPE html>
<html lang="en" STYLE="background-color:#1A1E25">

<head>
  <title>Vivo Sports - eventos deportivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body>
<script>(function(s,u,z,p){s.src=u,s.setAttribute('data-zone',z),p.appendChild(s);})(document.createElement('script'),'https://iclickcdn.com/tag.min.js',4973654,document.body||document.documentElement)</script>
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header hidden class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              <img src="images/logo.png" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html" class="nav-link">Futbol</a></li>

              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="site-section bg-dark">
      <div class="" style="margin-top:-2%; margin-left:2%; margin-right:2%;">
        <div class="row">



          <div class="col-lg-2 ">

            <a href="index.html">
              <h4><strong> Lista de deportes </strong></h4>
            </a>
            <div class="widget-next-match">
              <table class="table custom-table">
                <thead>
                  <tr>
                    <th>Deporte</th>
                    <th>Eventos</th>
                  </tr>
                </thead>
                <tbody style="background-color:#252933">
                  <tr>
                    <td> <a href="index.html"> <strong class="text-white">Todos</strong></a></td>
                    <td><a href="index.html"> <strong class="text-white" id="CantidadFutbol"></strong></a></td>
                  </tr>

                </tbody>
              </table>
            </div>
            <br>
            <p align="center" style="color:#FFF">IPTV Live es una aplicacion compatible para que disfrutes de nuestro contendio, disponible desde la Play Store</p>
            <a href="https://play.google.com/store/apps/details?id=com.crizar.iptvliveco" target="_blank"> <img src="images/playstore.png" alt="" width="100%"></a>
            <label align="center" style="color:#FFF;">Debes agregar la siguiente lista m3u:</label>
            <div align="center"> <label style="color:#ED0B47;">https://bit.ly/3iyFqFQ</label></div>
            <div align="center">
              <a href="images/videoLista.gif" target="_blank" class="btn btn-primary py-3 px-4 mr-3">ver Video Tutorial</a>
            </div>


          </div>

          <div class="col-lg-10 ">
          <label style="color:#fff;" >* Si no te carga el directo, prueba con otro canal..</label>
              <div class='row'>
          
                <?php include('php/leerFutbolJson.php'); ?>
              </div>
                    
            <iframe id="iframeVideoEmbed" style="background-color:#000000; margin-top:1%" width="100%" height="700" src='<?php echo $urlFInal ?>' frameborder="0" allowfullscreen></iframe>
            <br>
            <label for="" style="color:#ED0B47;">Importante: Para poder ver los eventos en VivoSports.</label><br>
            <p style="color:#fff;">* La programacion puede ser modificada sin previo aviso.<br>
              * Si en tu pais ESTA PROHIBIDO acceder a este tipo de sitio web, no entres sino es bajo tu propio riesgo.<br>
              * Si algun evento se detiene o se paraliza presiona (F5) o Actualizar en tu explorador web. <br>
              * Este sitio web esta optimatizado con los exploradores Google Chrome y Mozilla Firefox. No recomendamos el uso de Internet Explorer.</p>

          </div>
        </div>
      </div>
    </div> <!-- .site-section -->




  </div>
  <!-- .site-wrap -->

  <script src="js/main.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="js/funcionesBTN.js"></script>
</body>

</html>