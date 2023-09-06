<?php
//DESACTIVAR TODA NOTIFICACIÓN DE ERROR
error_reporting(0);
// Notificar solamente errores de ejecución
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//DEFINE ME VA PERMITIR USAR TODAS MIS VARIABLES GUARDADAS EN MI ARCHIBO
define("MAX_RESULTS", 15);
//ISSET devolverá false si prueba una variable que ha sido definida como null
     if (isset($_POST['submit']) ){
        $keyword = $_POST['keyword'];
//EMPTY determina si una variable está vacía            
        if (empty($keyword)){
//ARRAY EN ARREGLO O VECTOR
            $response = array(
                  "type" => "error",
                  "message" => "Por favor ingrese la palabra clave."
                );
        } 
    }       
?>

<!doctype html>
<html lang="es">
<!--//////////////////////////////////////////////////////////
                 CABECERA CANAL MAYESOFT
////////////////////////////////////////////////////////////-->
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
        <title>MayeSoft</title>

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
        <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

         <style>
.videos-data-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 1px;
	border-radius: 2px;
}
.response {
	padding: 10px;
	margin-top: 10px;
	border-radius: 2px;
}
.error {
	background: #fdcdcd;
	border: #ecc0c1 1px solid;
}
.success {
	background: #c5f3c3;
	border: #bbe6ba 1px solid;
}
.result-heading {
	margin: 10px 0px;
	padding: 10px 10px 5px 0px;
	border-bottom: #e0dfdf 1px solid;
}
iframe {
	border: 0px;
}
.video-tile {
	display: inline-block;
	margin: 10px 10px 20px 10px;
}
.videoDiv {
	width: 240px;
	height: 150px;
	display: inline-block;
}
.videoTitle {
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
}
.videoDesc {
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
}
.videoInfo {
	width: 240px;
}
</style>
        </head>
<!--//////////////////////////////////////////////////////////
                 CUERPO CANAL MAYESOFT
////////////////////////////////////////////////////////////-->
<body class="main-layout">
   <!--JAVASCRIP BOOTSTRAP-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<header>
   <!-- Fixed navbar -->
   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> 
      <a class="navbar-brand" href="index.php">
         <div class="col-md-12">
            <img src="images/LogotipoEmpresarial.png" alt="#"/>
         </div>
      </a>
   </nav>
</header>

<!-- /////////////////////////////////////////////////
        CONTENIDO DE LA PÁGINA CANAL MAYESOFT
////////////////////////////////////////////////////-->
<div class="container">
   <br><br>
   <hr>
         <div class="row">

    <!-- CONTENIDO -->
   <form id="keywordForm" method="POST" action="">
   <div class="col-12 col-md-12">
      <div class="form-row align-items-center">
        <div class="col-auto">
         Buscar palabra clave: 
        </div>
        <div class="form-row align-items-center">
            <div class="col-auto">
               <input class="form-control mb-2" type="search" id="keyword" name="keyword"  placeholder="Ingrese palabra a buscar">
            </div>
            <div class="col-auto">
               <input class="btn btn-primary mb-2" type="submit" name="submit" value="Busqueda">
          </div>
         </div>
      </div>
   </div>
   </form>

<!--EMPTY determina si una variable está vacía.-->
    <?php if(!empty($response)) { ?>
    <div class="response <?php echo $response["type"]; ?>"> <?php echo $response["message"]; ?> </div>
    <?php }?>
    <?php
//ISSET devolverá false si prueba una variable que ha sido definida como null
            if (isset($_POST['submit']) ){
//EMPTY determina si una variable está vacía.
              if (!empty($keyword)){
			  $apikey = 'AIzaSyCT-FxGY2xK9bGEdtZyezu4-d7b9t_HWBE';
              $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q='.$keyword.'&maxResults='.MAX_RESULTS.'&key='.$apikey;
//CURL_INIT() Inicia una nueva sesión y devuelve el manipulador cURL para el uso de las funciones curl_setopt(), curl_exec(), y curl_close().
                $ch = curl_init();
//CURL_SETOPT() asigna valores para opciones de una sesión CURL identificada por el parámetro ch
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_VERBOSE, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//CURL_EXEC() Ejecuta la sesión cURL que se le pasa como parámetro.
                $response = curl_exec($ch);
//CURL_CLOSE() cierra una sesión CURL y libera todos sus recursos.
                curl_close($ch);
//JSON_DECODE() Devuelve el valor codificado en json en un tipo de PHP apropiado
                $data = json_decode($response);
//JSON_DECODE() se puede traducir cualquier cosa codificada en UTF-8 (salvo resources) de PHP a un string JSON
                $value = json_decode(json_encode($data), true);
            ?>
    <div class="result-heading">SE ENCONTRARON ACERCA DE:  <?php echo MAX_RESULTS; ?> RESULTADOS</div>
    
<!--///////////////////////////////////////////////////////
         IMPRIMIR VIDEOS DE YOUTUBE EN PANTALLA
/////////////////////////////////////////////////////////-->
    <div class="videos-data-container" id="SearchResultsDiv">
              <?php
                for ($i = 0; $i < MAX_RESULTS; $i++) {
                    $videoId = $value['items'][$i]['id']['videoId'];
                    $title = $value['items'][$i]['snippet']['title'];
                    $description = $value['items'][$i]['snippet']['description'];
                    ?>
              <div class="video-tile">
        <div  class="videoDiv">
                  <iframe id="iframe" style="width:100%;height:100%" src="//www.youtube.com/embed/<?php echo $videoId; ?>" data-autoplay-src="//www.youtube.com/embed/<?php echo $videoId; ?>?autoplay=1"></iframe>
                </div>
        <div class="videoInfo">
                  <div class="videoTitle"><b><?php echo $title; ?></b></div>
                  <div class="videoDesc"><?php echo $description; ?></div>
                </div>
      </div>
              <?php 
                    }
                } 
           
            }
            ?>
              
              <!-- Fin Contenido --> 
            </div>
  </div>
          <!-- Fin row --> 
          
        </div>
<!-- Fin container -->
<br><br><br><br><br><br>

<!--//////////////////////////////////////////////
            PIE DE PÁGINA
////////////////////////////////////////////////-->
<footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <a class="logo2" href="#"><img src="images/LogotipoEmpresarial.png" alt="#" /></a>
               </div>
               <div class="col-lg-5 col-md-6 col-sm-6">
                  <h3>Contacta con nostros</h3>
                  <ul class="location_icon">
                     <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Londres 145
                        <br> Reino Unido
                     </li>
                     <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>alberthsotomontano@gmail.com<br> alberthsotomontano@gmail.com</li>
                     <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+591 77901539<br>+591 77901539</li>
                  </ul>
                  <ul class="social_icon">
                     <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                     <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <h3>Menus</h3>
                  <ul class="link_icon">
                     <li class="active"> <a href="index.html"> Hogar</a></li>
                     <li>
                        <a href="about.html">
                           </i>Sobre nosotr@s
                     </li>
                     <li> <a href="service.html"> </i>Servicios</a></li>
                     <li> <a href="team.html"></i>Equipo</a></li>
                     <li> <a href="client.html"></i>Clientes</a></li>
                     <li> <a href="contact.html"></i>Contacta con nosotr@s</a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <h3>Publicación reciente</h3>
                  <ul class="link_icon">
                     <li> <a href="#"> participar en el personal </a></li>
                     <li>
                        <a href="#">
                        gestionar reuniones
                     </li>
                     <li> <a href="#"> dedicado a </a></li>
                     <li> <a href="#"> marketing</a></li>
                     <li> <a href="#"> 25 de noviembre de 2019</a></li>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <h3>Boletin informativo</h3>
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="news" placeholder="Tu Email" type="type" name="Your Email">
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2023 Reservados todos los derechos.<a href="https://html.design/"> MayeSoft</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>

<script src="assets/jquery-1.12.4-jquery.min.js"></script> 
<script src="assets/jquery.validate.min.js"></script> 
<script src="assets/ValidarRegistro.js"></script> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<script src="assets/js/vendor/popper.min.js"></script> 
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>