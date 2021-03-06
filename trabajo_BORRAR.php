<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Aluminios Marquez</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"><link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/linecons.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>

<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)	
			});	
			
	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });
	
	  });
	  

		    });	
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}
</script>
</head>
<body>

<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a href="javascript:void(0)"><img src="img/logob.png" alt=""></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="#top_content">Inicio</a></li>
          <li><a href="#service">Aluminio</a></li>
          <li><a href="#work_outer">PVC</a></li>
          <li><a href="#client_outer">Mampara Baño</a></li>
          <li><a href="#frente_armario">Frente Armario</a></li>
          <li><a href="#team">Cortina Cristal</a></li>
          <li><a href="#team">Persiana</a></li>
          <li><a href="#contact">Contactar</a></li>
          <li><a href=""></a></li>
        </ul>
        <ul class="">
          <li><a href="#top_content">Inicio</a></li>
          <li><a href="#service">Aluminio</a></li>
          <li><a href="#work_outer">PVC</a></li>
          <li><a href="#client_outer">Mampara Baño</a></li>
          <li><a href="#frente_armario">Frente Armario</a></li>
          <li><a href="#team">Cortina Cristal</a></li>
          <li><a href="#team">Persiana</a></li>
          <li><a href="#contact">Contactar</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section--> 

<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container">
    <!--<h2>Aluminios Marquez</h2>-->
      <div class="top_content">
        <div class="row">
          <div class="col-md-12 col-sm-8">
            <div id="carousel-ejemplo" class="carousel slide" data-ride="carousel">
                <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-ejemplo" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-ejemplo" data-slide-to="1"></li>
                    <li data-target="#carousel-ejemplo" data-slide-to="2"></li>
                    <li data-target="#carousel-ejemplo" data-slide-to="3"></li>
                </ol>

                <!-- Contenido imágenes -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="images/carousel1.jpg" alt="" class="img-responsive imagen_carousel">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/carousel2.jpg" alt="..." class="img-responsive imagen_carousel">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/carousel3.jpg" alt="..." class="img-responsive imagen_carousel">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/carousel4.jpg" alt="..." class="img-responsive imagen_carousel">
                        <div class="carousel-caption">
                        </div>
                    </div>



                </div>

                <!-- Controles -->
                <a class="left carousel-control" href="#carousel-ejemplo" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previo</span>
                </a>
                <a class="right carousel-control" href="#carousel-ejemplo" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>

            </div>
        </div>
      </div>
      <div class="row">

        <div class="col-lg-12 col-sm-12 wow fadeInLeft delay-05s">
            <br/>
          <div class="service-list">
            <div class="service-list-col1"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></div>
            <div class="service-list-col2">
              <h3>Aluminios Marquez</h3>
              <p>
              Bienvenido a Aluminios Marquez

              Bienvenidos a Aluminios Marquez, su cerrajería de aluminio y Pvc en Madrid desde 1989. Especialistas en la fabricación, comercialización e instalación de ventanas de aluminio y Pvc de la mejor calidad y al mejor precio.

              Nuestro compromiso es ofrecer siempre un servicio de la máxima calidad, lo que se expresa en la calidad de fabricación de nuestras ventanas, diseñadas y fabricadas en nuestra nave de mas 600 metros cuadrados por profesionales de la más alta experiencia. 

              Si busca una buena relación calidad precio y el asesoramiento de profesionales en ventanas de aluminio y Pvc conozca nuestro trabajo y apueste por Aluminios Marquez, Aluminio y Pvc. No se arrepentirá.
              </p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-comment"></i> </div>
            <div class="service-list-col2">
              <h3>Para mas información, contactar con nosotros</h3>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"><span class="glyphicon glyphicon-phone" aria-hidden="true"> </div>
            <div class="service-list-col2">
              <h3>608 506 200</h3>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></div>
            <div class="service-list-col2">
              <h3>ccristaleria@gmail.com</h3>
            </div>
          </div>
          <div class="work_bottom"> <p>Puede dejarnos su consulta aqui</p> <a href="#contact" class="contact_btn">Contactar</a> </div>
        </div>




      </div>
    </div>
  </div>
</section>
<!--Top_content--> 

<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Aluminio</h2>
    
    <div class="service_area">
        
      <div class="row">
          
        <div class="col-lg-4 col-sm-4">
          <div class="service_block">
            <div class="delay-03s animated wow  zoomIn">
              <a data-toggle="modal" data-target="#serieA98">
                <img src="images/3_G.jpg" style="height:50%;width:50%;">
              </a>
            </div>
            <h3 class="animated fadeInUp wow">Serie A 98 R</h3>
            <p class="animated fadeInDown wow">La serie A 98 R es un modelo de ventana corredera que cuenta con un elevado nivel de calidad..</p>
            <br/>
            <a href="" class="contact_btn">Catálogo</a>
          </div>
        </div>
          
        <div class="col-lg-4 col-sm-4">
          <div class="service_block">
            <div class="delay-03s animated wow zoomIn">
              <a data-toggle="modal" data-target="#serieA11">
                <img src="images/5_G.jpg" style="height:50%;width:50%;">
              </a>
            </div>
            <h3 class="animated fadeInUp wow">SERIE A-11 R</h3>
            <p class="animated fadeInDown wow">Carpinteria Abisagrada de rotura de puente termico
Marco de 54.2 mm y hoja de 61.2 mm.
Espesor medio en marcos y hojas de 1.3 mm.
Juntas de estanqueidad en EPDM..</p>
            <br/>
            <a href="" class="contact_btn">Catálogo</a>
          </div>
        </div>
          
        <div class="col-lg-4 col-sm-4">
          <div class="service_block">
            <div class="delay-03s animated wow zoomIn">
              <a data-toggle="modal" data-target="#serie1000">
                <img src="images/4_G.jpg" style="height:50%;width:50%;">
              </a>
            </div>
            <h3 class="animated fadeInUp wow">Serie Euro 1000</h3>
            <p class="animated fadeInDown wow">La serie Euro 1000 es un modelo de ventana corredera que cuenta con un elevado nivel de calidad.

Esta creada con el fin de ofrecer a los clientes un producto de grandes prestaciones por contar con componentes de altísima calidad.

Esta ventana esta orientada a los profesionales que buscan la calidad sin descuidar el precio.</p>
            <br/>
            <a href="" class="contact_btn">Catálogo</a>
          </div>
        </div>
          
      </div>
        
    </div>
  </div>
</section>
<!--Service-->

<!--formulario de fotos -->
<div class="modal fade" id="serieA98" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    SERIE EURO 1000
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/3_G.jpg" style="height:70%;width:70%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieA11" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    SERIE EURO 1000
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/5_G.jpg" style="height:70%;width:70%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serie1000" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    SERIE EURO 1000
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/4_G.jpg" style="height:70%;width:70%;">
            </div>
        </div>
    </div>
</div>




<section id="work_outer"><!--main-section-start-->
<div class="top_cont_latest">
  <div class="container">
    <h2>Latest Work</h2>
    <div class="work_section">
      <div class="row">
        <div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-doc"></i> </div>
            <div class="service-list-col2">
              <h3>Process Walkthrough</h3>
              <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-comment"></i> </div>
            <div class="service-list-col2">
              <h3>24/7 support</h3>
              <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-database"></i> </div>
            <div class="service-list-col2">
              <h3>Hosting & Storage</h3>
              <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
            </div>
          </div>
          <div class="service-list">
            <div class="service-list-col1"> <i class="icon-cog"></i> </div>
            <div class="service-list-col2">
              <h3>Customization options</h3>
              <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
            </div>
          </div>
          <div class="work_bottom"> <span>Ready to take the plunge?</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>
        </div>
        <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>
      </div>
    </div>
  </div>
  <!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->
  </div>
</section>
<!--main-section-end--> 

<section class="main-section" id="client_outer"><!--main-section client-part-start-->
  <h2>Happy Clients</h2>
  <div class="client_area ">
    <div class="client_section animated  fadeInUp wow">
      <div class="client_profile">
        <div class="client_profile_pic"><img src="img/client-pic1.jpg" alt=""></div>
        <h3>Saul Goodman</h3>
        <span>Lawless Inc</span> </div>
      <div class="quote_section">
        <div class="quote_arrow"></div>
        <p><b><img src="img/quote_sign_left.png" alt=""></b> prueba numero 1 equat sem cure  digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small> </p>
      </div>
      <div class="clear"></div>
    </div>
    <div class="client_section animated  fadeInDown wow">
      <div class="client_profile flt">
        <div class="client_profile_pic"><img src="img/client-pic2.jpg" alt=""></div>
        <h3>Marie Schrader</h3>
        <span>DEA Foundation</span> </div>
      <div class="quote_section flt">
        <div class="quote_arrow2"></div>
        <p><b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small> </p>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</section>
<!--main-section client-part-end-->


<section id="frente_armario" class="content"> 
  <div class="container">
    <h2>Frente Armario</h2>
    
    <div class="service_area">
    
<?php
//leo las fotos de la carpeta "images/Frente"

$listado = scandir("./images/Frentes/Interiores");

$numeroFotos = count($listado);
$numeroFila = $numeroFotos / 3;
$numeroFila = (int)$numeroFila;

//preparo las fotos en pequeño (coletilla _min.jpg)
for($fila = 0;$fila <= $numeroFila; $fila++) //recorremos las filas de 3 fotos
{
    ?>
    <div class="row">
    <?php
    for($pos = 1;$pos <= 3; $pos++) //recorremos las 3 fotos
    {
        $posArray = ($fila * 3) + $pos;
        $fichero = $listado[$posArray];
        $texto = explode('.',$fichero);
        $texto = $texto[0];
        ?>
        <div class="col-lg-4 col-sm-4">
          <div class="service_block">
            <div class="thumbnail">
            <div class="delay-03s animated wow  zoomIn">
              <a data-toggle="modal" data-target="#<?php echo 'id'.$posArray; ?>">
                <img src="images/Frentes/Interiores/<?php echo $fichero; ?>" style="height:50%;width:50%;">
              </a>
            </div>
            <h3 class="animated fadeInUp wow"><?php echo $texto; ?></h3>
            </div>
          </div>
        </div>
        <?php
    }
    ?>
    </div>
    <?php
}
?>
          
          
<!--        <div class="col-lg-4 col-sm-4">
          <div class="service_block">
            <div class="delay-03s animated wow zoomIn">
              <a data-toggle="modal" data-target="#serieA11">
                <img src="images/5_G.jpg" style="height:50%;width:50%;">
              </a>
            </div>
            <h3 class="animated fadeInUp wow">SERIE A-11 R</h3>
            <p class="animated fadeInDown wow">Carpinteria Abisagrada de rotura de puente termico
Marco de 54.2 mm y hoja de 61.2 mm.
Espesor medio en marcos y hojas de 1.3 mm.
Juntas de estanqueidad en EPDM..</p>
            <br/>
            <a href="" class="contact_btn">Catálogo</a>
          </div>
        </div>
          
        <div class="col-lg-4 col-sm-4">
          <div class="service_block">
            <div class="delay-03s animated wow zoomIn">
              <a data-toggle="modal" data-target="#serie1000">
                <img src="images/4_G.jpg" style="height:50%;width:50%;">
              </a>
            </div>
            <h3 class="animated fadeInUp wow">Serie Euro 1000</h3>
            <p class="animated fadeInDown wow">La serie Euro 1000 es un modelo de ventana corredera que cuenta con un elevado nivel de calidad.

Esta creada con el fin de ofrecer a los clientes un producto de grandes prestaciones por contar con componentes de altísima calidad.

Esta ventana esta orientada a los profesionales que buscan la calidad sin descuidar el precio.</p>
            <br/>
            <a href="" class="contact_btn">Catálogo</a>
          </div>
        </div>-->
          
      </div>
        
    </div>
  </div>
</section>
<!--Service-->

<?php
//ahora preparo las fotos en en modal (coletilla *_min*.jpg)
for($i = 0;$i <= $numeroFotos; $i++) //recorremos las filas de 3 fotos
{
    $fichero = $listado[$i];
    $texto = explode('.',$fichero);
    $texto = $texto[0];
?>
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="<?php echo 'id'.$i; ?>" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <?php echo $texto; ?>
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/<?php echo $fichero; ?>" style="height:70%;width:70%;">
            </div>
        </div>
    </div>
</div>
    
<?php
}
?>




<!--NO VALE POR AHORA-->
<!-- Portfolio -->
<!--<section id="" class="content"> 
</section>-->
<!--/Portfolio --> 

<!--new_portfolio--> 

<!--
<section class="main-section paddind" id="Portfolio">
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
	</div>
    
    
</section>   

-->


<div class="c-logo-part"><!--c-logo-part-start-->
  <div class="container">
    <ul class="delay-06s animated  bounce wow">
      <li><a href="javascript:void(0)"><img src="img/c-liogo1.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo2.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo3.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo5.png" alt=""></a></li>
    </ul>
  </div>
</div>
<!--c-logo-part-end-->


<!--<section class="main-section team" id="team"><!--main-section team-start-->
<!--  <div class="container">
    <h2>Amazing Team</h2>
    <h6>Take a closer look into our amazing team. We won’t bite.</h6>
    <div class="team-leader-block clearfix">
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/team-leader-pic1.jpg" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-03s">Walter White</h3>
        <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
        <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="team-leader-box">
        <div class="team-leader  wow fadeInDown delay-06s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/team-leader-pic2.jpg" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
        <span class="wow fadeInDown delay-06s">Product Manager</span>
        <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-09s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/team-leader-pic3.jpg" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
        <span class="wow fadeInDown delay-09s">Accountant</span>
        <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
    </div>
  </div>
</section>
<!--main-section team-end-->

<!-- <section class="twitter-feed"><!--twitter-feed-->
<!--  <div class="container  animated fadeInDown delay-07s wow">
    <div class="twitter_bird"><span><i class="fa-twitter"></i></span></div>
    <p> When you're the underdog, your only option is to make #waves if you want to succeed. How much <br>
      and how often should you be drinking coffee?</p>
    <span>About 28 mins ago</span> </div>
</section>
<!--twitter-feed-end-->



<footer class="footer_section" id="contact">
  <div class="container">
    <section class="main-section contact" id="contact">
      <div class="contact_section">
        <h2>Contactar</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon rollIn animated wow"><span><i class="fa-home"></i></span></div>
              <span>Calle Los Aluminios 29, <br>
              Alcorcón, Madrid, 28921 </span> </div>
          </div>
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
              <span> 608 506 200 </span> </div>
          </div>
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa-pencil"></i></span></div>
              <span> <a href="mailto:ccristaleria@gmail.com"> ccristaleria@gmail.com</a> </span> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft">
          <div class="contact-info-box address clearfix">
            <h3>Rellene estos campos</h3>
            <p>Indiquenos la consulta que nos quiera remitir.</p>
            <p>Le intentaremos contestar lo mas pronto posible.</p>
            <p>Gracias por ponerse en contacto con nosotros</p>
          </div>
          <ul class="social-link">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa-google-plus"></i></a></li>
            <li class="dribbble animated bounceIn wow delay-06s"><a href="javascript:void(0)"><i class="fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-6 wow fadeInUp delay-06s">
          <div class="form">
            <input class="input-text animated wow flipInY delay-02s" type="text" name="" value="Su Nombre *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input class="input-text animated wow flipInY delay-04s" type="text" name="" value="Su E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea class="input-text text-area animated wow flipInY delay-06s" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Su mensaje *</textarea>
            <input class="input-btn animated wow flipInY delay-08s" type="submit" value="Enviar">
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"> <span>Copyright © 2016 FPP <a href="">FPP</a>. </span> </div>
  </div>
</footer>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script> 
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
	  section.className = 'wow shake';
	  section.className = 'wow zoomIn';
	  section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script> 
<script type="text/javascript">
	$(window).load(function(){
		
		$('a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script> 

<!--<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>


--> 

<script type="text/javascript">

   
  jQuery(document).ready(function($){     

// Portfolio Isotope
	var container = $('#portfolio-wrap');	
	

	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});	

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();		
	  	return false;
	});
		
		
		function splitColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = 1;
			
			
			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}
			
			return columnNumb;
		}		
		
		function setColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = splitColumns(), 
				postWidth = Math.floor(winWidth / columnNumb);
			
			container.find('.portfolio-item').each(function () { 
				$(this).css( { 
					width : postWidth + 'px' 
				});
			});
		}		
		
		function setProjects() { 
			setColumns();
			container.isotope('reLayout');
		}		
		
		container.imagesLoaded(function () { 
			setColumns();
		});
		
	
		$(window).bind('resize', function () { 
			setProjects();			
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});
</script>
</body>
</html>