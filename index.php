<!DOCTYPE html>
<html lang="es">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>MayeSoft</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <!--API DE MAPS GRATUITO-->
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
   <style>
      #mi_mapa{
         height: 400px;
         width: auto;
      }
   </style>

</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="header_to d_none">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <ul class="lan">
                        <li><i class="fa fa-globe" aria-hidden="true"></i> Language : <img src="images/fleg.png" alt="#" /></li>
                     </ul>
                     <form action="#">
                        <div class="select-box">
                           <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                           <select id="select-box1" class="select">
                              <option value="Choice 1">English</option>
                              <option value="Choice 1">Falkla</option>
                              <option value="Choice 2">Germa</option>
                              <option value="Choice 3">Neverl</option>
                           </select>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 col-sm-6 ">
                     <ul class="social_icon1">
                        <li> <a href="IniciarSesion.php">Iniciar Sesion</a>
                        </li>
                        <li> Siguenos
                        </li>
                        <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_midil">
            <div class="container">
               <div class="row d_flex">
                  <div class="col-md-4 col-sm-4 d_none">
                     <ul class="conta_icon">
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Llámenos : +591 77901539</a> </li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-4 ">
                     <a class="logo" href="#"><img src="images/LogotipoEmpresarial.png" alt="#" /></a>
                  </div>
                  <div class="col-md-4 col-sm-4 d_none">
                     <ul class="conta_icon ">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> alberthsotomontano@gmail.com</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_bo">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-sm-7">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php"> Hogar </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="acerca_de.php">acerca de</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="servicio.php">servicios</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="equipo.php">equipo</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="cliente.php">Clientes/as</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contacto.php">Contactanos</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-3 col-sm-5 d_none">
                     <ul class="sign">
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li><a class="sign_btn" href="Registro.php">Regístrate</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg">
                  <h1>Software de confianza <br>y profecional</h1>
                  <span>para tu entretenimiento</span>
                  <p>Juega los mejores juegos de la empresa MayeSoft</p>
                  <a href="#">sobre nosotros</a>
               </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <div class="ban_img">
                  <figure><img src="images/Dibujo_Empresarial.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- about section -->
   <div id="about" class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 col-lg-7">
               <div class="about_box">
                  <div class="titlepage">
                     <h2><strong class="yellow">Sobre nosotr@s</strong><br> PODEMOS AYUDAR A ENCONTRAR EL VIDEO JUEGO CORRECTO</h2>
                  </div>
                  <h3>TODO LO QUE NECESITAS EN UNA SOLUCIÓN</h3>
                  <span>AYUDA A TU PRÓXIMA CARRERA A MOVER MÁS SUAVE Y <br> MÁS EFICIENTE</span>
                  <p>Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar</p>
                  <span class="try">PRUEBA EL CREADOR DE CV EN LÍNEA GRATIS</span>
                  <a class="read_morea" href="Canal_Youtube.php">Empezar <i class="fa fa-angle-right" aria-hidden="true"></i></a>
               </div>
            </div>
            <div class="col-md-12 col-lg-5">
               <div class="about_img">
                  <figure><img src="images/about_img2.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section -->
   <!-- service section -->
   <div id="service" class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">servicio</strong><br> PODEMOS AYUDAR A TU NEGOCIO A CRECER</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon1.png" alt="#" />
                  <h3>Publicidad digital</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon2.png" alt="#" />
                  <h3>PLANIFICACIÓN FINANCIERA</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon3.png" alt="#" />
                  <h3>Publicidad digital</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon4.png" alt="#" />
                  <h3>CONSULTA DE TRABAJO</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon5.png" alt="#" />
                  <h3>INVESTIGACIÓN DE MERCADO</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon6.png" alt="#" />
                  <h3>INVESTIGACIÓN DE UX</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="#">Leer más</a>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- service section -->
   <!-- portfolio -->
   <div class="portfolio">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2><strong class="yellow">PORTAFOLIO</strong><br> ELIGE UN DISEÑO PROFESIONAL</h2>
                  <span>Sitios web</span>
                  <p>Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El objetivo de utilizar Lorem Ipsum es que tiene una distribución más o menos normal.</p>
               </div>
            </div>
         </div>
      </div>
      <div id="myCarousel" class="carousel slide portfolio_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Leer más</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Leer más</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </div>
   <!-- end portfolio section -->
   <!-- business  section -->
   <div class="business">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">CREAR</strong><br>Negocio PERSONALIZADO</h2>
                  <p>ss normal distribution of letters, as opposed to using </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon1.png" alt="#" /></i>
                  <h3>23</h3>
                  <p>NOMINACIONES </p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon2.png" alt="#" /></i>
                  <h3>31</h3>
                  <p>AGENCIAS</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon3.png" alt="#" /></i>
                  <h3>7</h3>
                  <p>PREMIOS</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon4.png" alt="#" /></i>
                  <h3>8</h3>
                  <p>Soportado </p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="#">Leer más</a>
            </div>
         </div>
      </div>
   </div>
   <!-- end business  section -->
   <!-- team  section -->
   <div id="team" class="team">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">Equipo</strong><br>Contamos con un Equipo Profesional de Analistas de Negocios.</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="team" class="carousel slide team_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#team" data-slide-to="0" class="active"></li>
                     <li data-target="#team" data-slide-to="1"></li>
                     <li data-target="#team" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team1.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team2.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <img src="images/team3.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <img src="images/team1.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team2.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team3.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team1.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <img src="images/team2.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team3.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#team" role="button" data-slide="prev">
                     <i class="fa fa-chevron-left" aria-hidden="true"></i>
                  </a>
                  <a class="carousel-control-next" href="#team" role="button" data-slide="next">
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end team  section -->
   <!-- testimonial -->
   <div id="client" class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">testimonial</strong><br>Que es Syas nuestros clientes</h2>
               </div>
            </div>
         </div>
      </div>
      <div id="testimo" class="carousel slide testimonial_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#testimo" data-slide-to="0" class="active"></li>
            <li data-target="#testimo" data-slide-to="1"></li>
            <li data-target="#testimo" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                              <i><img src="images/cos.jpg" alt="#" /></i> <span>Consectetur</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                              <i><img src="images/cos.jpg" alt="#" /></i> <span>Consectetur</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                              <i><img src="images/cos.jpg" alt="#" /></i> <span>Consectetur</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </div>
   <!-- end testimonial -->
   <!-- contact  section -->
   <div id="contact" class="contact ">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">Contacta con nosotr@s</strong><br>Solicitar una devolución de llamada</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <form id="post_form" class="contact_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contact_control" placeholder=" Name" type="type" name="Name">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="Email" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="Phone Number " type="type" name="Phone Number ">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">Enviar</button>
                     </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   <br>
      <!--SCRIP API MAPS-->
      <div id="mi_mapa"></div>
   <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
   <script>
      let map = L.map('mi_mapa').setView([19.4284,-99.1405], 12)

      //ESTAMOS PONIENDO UNA CAPA
      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
         //UNA ATRIBUCIÓN
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([19.4284,-99.1405]).addTo(map).bindPopup("Empresa MayeSoft Desarrollo de Software").openPopup()
      L.marker([19.4184,-99.1305]).addTo(map).bindPopup("Empresa MayeSoft Desarrollo de Software").openPopup()

      map.on('click', onMapClick)

      function onMapClick(e){
         alert("Posición: " + e.latlng)
      }
   </script>
   <!-- end contact  section -->
   <!--  footer -->
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
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>