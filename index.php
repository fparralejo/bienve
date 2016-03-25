<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Aluminios Marquez</title>
<link rel="icon" href="favicon.ico" type="image/ico">
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
<!--    seguimiento de Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75317284-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- SCRIPT CONTROL DE COOKIES -->
<script type="text/javascript">
function controlcookies() {
         // si variable no existe se crea (al clicar en Aceptar)
    localStorage.controlcookie = (localStorage.controlcookie || 0);
 
    localStorage.controlcookie++; // incrementamos cuenta de la cookie
    cookie1.style.display='none'; // Esconde la política de cookies
}
</script>

<!--- Codigo para la política de cookies-->
 
<style type="text/css">
 
/* CSS para la animación y localización de los DIV de cookies */
 
@keyframes desaparecer
{
0%		{bottom: 0px;}
80%		{bottom: 0px;}
100%		{bottom: -50px;}
}
 
@-webkit-keyframes desaparecer /* Safari and Chrome */
{
0%		{bottom: 0px;}
80%		{bottom: 0px;}
100%		{bottom: -50px;}
}
 
@keyframes aparecer
{
0%		{bottom: -38px;}
10%		{bottom: 0px;}
90%		{bottom: 0px;}
100%		{bottom: -38px;}
}
 
@-webkit-keyframes aparecer /* Safari and Chrome */
{
0%		{bottom: -38px;}
10%		{bottom: 0px;}
90%		{bottom: 0px;}
100%		{bottom: -38px;}
}
#cookiesms1:target {
    display: none;
}
.cookiesms{	
	width:100%;
	height:43px;
	margin:0 auto;
	padding-left:1%;
        padding-top:5px;
        font-size:12px;
	clear:both;
        font-weight: strong;
color: #333;
bottom:-50px;
position:fixed;
left: 0px;
background-color: #FFF;
opacity:0.7;
filter:alpha(opacity=70); /* For IE8 and earlier */
transition: bottom 1s;
-webkit-transition:bottom 1s; /* Safari */
-webkit-box-shadow: 3px -3px 1px rgba(50, 50, 50, 0.56);
-moz-box-shadow:    3px -3px 1px rgba(50, 50, 50, 0.56);
box-shadow:         3px -3px 1px rgba(50, 50, 50, 0.56);
z-index:999999999;
}
 
.cookiesms:hover{
bottom:0px;
}
.cookies2{
background-color: #FFF;
display:inline;
opacity:0.95;
filter:alpha(opacity=95);
position:absolute; 
left:1%; 
top:-30px;
font-size:12px;
height:30px;
padding-left:25px;
padding-right:25px;
-webkit-border-top-right-radius: 15px;
-webkit-border-top-left-radius: 15px;
-moz-border-radius-topright: 15px;
-moz-border-radius-topleft: 15px;
border-top-right-radius: 15px;
border-top-left-radius: 15px;
-webkit-box-shadow: 3px -3px 1px rgba(50, 50, 50, 0.56);
-moz-box-shadow:    3px -3px 1px rgba(50, 50, 50, 0.56);
box-shadow:         3px -3px 1px rgba(50, 50, 50, 0.56);
}
 
/* Fin del CSS para cookies */
 
</style>


<!--Código HTML de la política de cookies -->

<!--La URL incluida es la parte que se ha de modificar -->
 
<div class="cookiesms" id="cookie1">
Este sitio web usa cookies, puedes ver <a data-toggle="modal" data-target="#pol_cookies"/>la política de cookies, aquí</a> -  
<button onclick="controlcookies()">Aceptar</button>
<div  class="cookies2">Política de cookies + </div>
</div>
<script type="text/javascript">
if (!localStorage.controlcookie>0){ 
cookie1.setAttribute("style","animation: desaparecer 5s;-webkit-animation: desaparecer 5s;");
}
</script>

<!--formulario de fotos -->
<div class="modal fade" id="pol_cookies" tabindex="-1" role="dialog" 
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
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <article id="post-7216" class="post-7216 page type-page status-publish hentry">
                    <header class="entry-header">
                        <h1 class="entry-title">Política de cookies</h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <div itemscope itemtype="http://schema.org/BlogPosting"><p>Te aviso que en este sitio se puede utilizar cookies cuando el usuario navega por las diferentes páginas del sitio. Durante el uso de nuestra página web aceptas y autorizas expresamente el uso de cookies, de acuerdo con nuestra política de privacidad.</p>
                            <p><strong>¿Qué son las cookies?</strong></p>
                            <p>Una cookie es un fichero muy pequeño que se descarga en el ordenador/smartphone/tablet del usuario al acceder a determinadas páginas web para almacenar y recuperar información sobre la navegación que se efectúa desde dicho equipo. Para conocer más información sobre las cookies, le invito a acceder al siguiente <a href="http://es.wikipedia.org/wiki/Cookie_(inform%C3%A1tica)">enlace:</a><a href="http://www.iabspain.net/privacidadeninternet/usuario" target="_blank"> </a></p>
                            <p><strong>¿Para qué sirven las cookies?</strong></p>
                            <p>La utilización de las cookies tiene como finalidad exclusiva recordar las preferencias del usuario (idioma, país, inicio de sesión, características de su navegador, información de uso de nuestra Web, etc.)</p>
                            <p>Recordando sus preferencias sabremos las características del ordenador que está usando y así podremos ofrecerle una mejor experiencia de navegación. Las cookies pueden ayudar a nuestro sitio Web a distinguir el navegador del usuario como visitante anterior y así guardar y recordar las preferencias que puedan haberse establecido mientras el usuario estaba navegando por el sitio, personalizar las páginas de inicio, identificar qué sectores de un sitio han sido visitados o mantener un registro de selecciones en un “carro de compra”.</p>
                            <p>Asimismo pueden ser utilizadas para obtener información acerca del tráfico dentro del propio site y estimar el número de visitas realizadas.</p>
                            <p>Normalmente los sitios Web utilizan las cookies para obtener información estadística sobre sus páginas Web. Tenga en cuenta que recogemos datos sobre sus movimientos y uso de nuestra Web como datos estadísticos, no personales.</p>
                            <p><strong>Tipos y finalidades de las cookies</strong></p>
                            <p>A continuación se presenta una lista de las cookies que puede encontrar en nuestro sitio Web y una breve descripción de su finalidad. Le aseguramos que ninguna de ellas conserva información de identificación personal sobre usted. Algunas cookies personalizan su visita, otras recuerdan sus preferencias, mientras que otras solo nos proveen estadísticas de los visitantes.</p>
                            <table border="1" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td colspan="2">Cookies</td>
                                        <td>Información (*)</td>
                                        <td>Finalidad</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">COOKIES PROPIAS</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Estrictamente necesarias</td>
                                        <td>Sesión, registro, navegación</td>
                                        <td>Gestión del registro, garantizar los recursos del servidor para la navegación.Propias de la plataforma WordPress.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">COOKIES DE TERCEROS(la información recogida a continuación ha sido facilitada por esos terceros)</td>
                                    </tr>
                                    <tr>
                                        <td>Analíticas</td>
                                        <td>Google Analytics</td>
                                        <td>Número de visitas, páginas o secciones visitadas, tiempo de navegación, sitios visitados antes de entrar en esta página, detalles sobre los navegadores usados.</td>
                                        <td>Informes estadísticos sobre el tráfico del sitio web, su audiencia total y la audiencia en una determinada campaña publicitaria.</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Statcounter</td>
                                        <td>Número de visitas, páginas o secciones visitadas, tiempo de navegación, sitios visitados antes de entrar en esta página, detalles sobre los navegadores usados.</td>
                                        <td>Informes estadísticos sobre el tráfico del sitio web</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>COOKIES SOCIALES</p>
                            <table border="1" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td>Sociales</td>
                                        <td>Jetpack share-this</td>
                                        <td>Links creados para conectar con los perfiles sociales.</td>
                                        <td>Sirve para facilitar la difusión de los contenidos de la web en redes sociales con un sólo link.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>(*) La información obtenida a través de estas cookies no pueden ser identificadas por usuario.</p>
                            <p>&nbsp;</p>
                            <p><strong>Salvaguardias de protección</strong></p>
                            <p>El usuario puede configurar su navegador para aceptar, o no, las cookies que recibe o para que el navegador le avise cuando un servidor quiera guardar una cookie o borrarlas de su ordenador. Puede encontrar las instrucciones en la configuración de seguridad en su navegador Web.</p>
                            <p>Ejemplos:</p>
                            <p>• Si utiliza Microsoft Internet Explorer, en la opción de menú Herramientas &gt; Opciones de Internet &gt; Privacidad &gt; Configuración.</p>
                            <p>• Si utiliza Firefox, en la opción de menú Herramientas &gt; Opciones &gt; Privacidad &gt; Cookies.</p>
                            <p>• Si utiliza Google Chrome, en la opción de menú Configuración &gt; Privacidad</p>
                            <p>• Si utiliza Safari, en la opción de menú Preferencias &gt; Seguridad</p>
                            <p>Puede hacer uso de la sección “Ayuda” que encontrará en la barra de herramientas de la mayoría de navegadores para cambiar los ajustes de su ordenador, sin embargo, algunas de las características de nuestros servicios online pueden no funcionar o pueden resultar más complicadas de acceder si rechaza todas las cookies.</p>
                            <p>Muchos navegadores permiten activar un modo privado mediante el cual las cookies se borran siempre después de su visita. Dependiendo de cada navegador, este modo privado puede tener diferentes nombres, abajo puede encontrar una lista de los navegadores más comunes y los diferentes nombres de este “modo privado”:</p>
                            <p>&#8211; Internet Explorer 8 y superior: InPrivate</p>
                            <p>&#8211; FireFox 3.5 y superior: Navegación Privada</p>
                            <p>&#8211; Google Chrome 10 y superior: Incógnito</p>
                            <p>&#8211; Safari 2 y superior: Navegación Privada</p>
                            <p>&#8211; Opera 10.5 y superior: Navegación Privada</p>
                            <p>Por favor, lea atentamente la sección de ayuda de su navegador para conocer más acerca de como activar el “modo privado”. Podrá seguir visitando nuestra Web aunque su navegador esté en “modo privado”, no obstante, la experiencia de usuario puede no ser óptima y algunas utilidades pueden no funcionar.</p>
                        </div><div class="sharedaddy sd-sharing-enabled"><div class="robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing"><h3 class="sd-title">Comparteix:</h3><div class="sd-content"><ul><li class="share-email"><a rel="nofollow" data-shared="" class="share-email sd-button share-icon" href="http://www.joserodriguez.info/bloc/politica-de-cookies/?share=email" target="_blank" title="Click to email this to a friend"><span>Email</span></a></li><li class="share-twitter"><a rel="nofollow" data-shared="sharing-twitter-7216" class="share-twitter sd-button share-icon" href="http://www.joserodriguez.info/bloc/politica-de-cookies/?share=twitter" target="_blank" title="Click to share on Twitter"><span>Twitter</span></a></li><li class="share-facebook"><a rel="nofollow" data-shared="sharing-facebook-7216" class="share-facebook sd-button share-icon" href="http://www.joserodriguez.info/bloc/politica-de-cookies/?share=facebook" target="_blank" title="Share on Facebook"><span>Facebook</span></a></li><li class="share-google-plus-1"><a rel="nofollow" data-shared="sharing-google-7216" class="share-google-plus-1 sd-button share-icon" href="http://www.joserodriguez.info/bloc/politica-de-cookies/?share=google-plus-1" target="_blank" title="Click to share on Google+"><span>Google</span></a></li><li class="share-end"></li></ul></div></div></div>			</div><!-- .entry-content -->
                    <footer class="entry-meta">
                    </footer><!-- .entry-meta -->
                </article>                
            </div>
        </div>
    </div>
</div>



<!-- Fin del código de cookies --->


<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a href="#top_content"><img src="images/logo-bienve.jpg" alt=""></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
<!--          <li><a href="#top_content">Inicio</a></li>-->
          <li><a href="#service">Aluminio</a></li>
          <li><a href="#catalogo">Catálogo</a></li>
          <li><a href="#PVC">PVC</a></li>
          <li><a href="#mampara_bano">Mampara Baño</a></li>
          <li><a href="#frente_armario">Frente Armario</a></li>
          <li><a href="#cortina_cristal">Cortina Cristal</a></li>
          <li><a href="#persiana">Persiana</a></li>
          <li><a href="#toldos">Toldos</a></li>
          <li><a href="#contact">Contactar</a></li>
          <li><a href=""></a></li>
        </ul>
        <ul class="">
<!--          <li><a href="#top_content">Inicio</a></li>-->
          <li><a href="#service">Aluminio</a></li>
          <li><a href="#catalogo">Catálogo</a></li>
          <li><a href="#PVC">PVC</a></li>
          <li><a href="#mampara_bano">Mampara Baño</a></li>
          <li><a href="#frente_armario">Frente Armario</a></li>
          <li><a href="#cortina_cristal">Cortina Cristal</a></li>
          <li><a href="#persiana">Persiana</a></li>
          <li><a href="#toldos">Toldos</a></li>
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

              Nuestro compromiso es ofrecer siempre un servicio de la máxima calidad, lo que se expresa en la calidad de fabricación de nuestras ventanas, diseñadas y fabricadas en nuestra nave de mas 200 metros cuadrados por profesionales de la más alta experiencia. 

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



<!--Aluminio-->
<section  id="service">
    <div class="container">
        <h2>Aluminio</h2>
        <div class="service_area">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow  zoomIn">
                                <a data-toggle="modal" data-target="#serieA98">
                                    <img src="images/Aluminio/3_G.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie A 98 R</h3>
                            <p class="animated fadeInDown wow">La serie A 98 R es un modelo de ventana corredera que cuenta con un elevado nivel de calidad..</p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serieA11">
                                    <img src="images/Aluminio/5_G.jpg" style="height:50%;width:50%;">
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
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serie400">
                                    <img src="images/Aluminio/4_G.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie Euro 400</h3>
                            <p class="animated fadeInDown wow">La serie Euro 400 es un modelo de ventana corredera que cuenta con un elevado nivel de calidad.

                                Esta creada con el fin de ofrecer a los clientes un producto de grandes prestaciones por contar con componentes de altísima calidad.

                                Esta ventana esta orientada a los profesionales que buscan la calidad sin descuidar el precio.</p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow  zoomIn">
                                <a data-toggle="modal" data-target="#A-96">
                                    <img src="images/Aluminio/A-96.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie A 96</h3>
                            <p class="animated fadeInDown wow">Abatible Europea de 40..</p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serieA10R">
                                    <img src="images/Aluminio/A-10_R.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie A-10 R</h3>
                            <p class="animated fadeInDown wow">Carpintería abisagrada con Rotura de Puente Térmico.
                                Marco de 45 mm y hoja de 52 mm.
                                Espesor medio en marcos y hojas de 1.3 mm.
                                Juntas de estanqueidad en EPDM...</p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serieA94R">
                                    <img src="images/Aluminio/A-94_R.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie A-94 R</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería abisagrada con Rotura de Puente Térmico
                                Marco de 45 mm y hoja de 52 mm
                                Espesor medio en marcos y hojas de 1.5 mm
                                Juntas de estanqueidad en EPDM..
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow  zoomIn">
                                <a data-toggle="modal" data-target="#serieA94">
                                    <img src="images/Aluminio/A-94.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie A 94</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería abisagrada
                                Marco de 45 mm y hoja de 52 mm
                                Espesor medio en marcos y hojas de 1.5 mm
                                Juntas de estanqueidad en EPDM..
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serieAR21">
                                    <img src="images/Aluminio/AR-21.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie AR-21</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería abisagrada con Rotura de Puente Térmico.
                                Marco de 70 mm y hoja de 70.5 mm.
                                Espesor medio en marcos y hojas de 1.5 mm.
                                Juntas de estanqueidad en EPDM...
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serieAR25">
                                    <img src="images/Aluminio/AR-25.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie AR-25</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería abisagrada con Rotura den Puente Térmico.
                                Marco de 50 mm y hoja de 59.5 mm.
                                Espesor medio en marcos y hojas de 1.5 mm.
                                Juntas de estanqueidad en EPDM..
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow  zoomIn">
                                <a data-toggle="modal" data-target="#serieA11Rcanal16">
                                    <img src="images/Aluminio/A-11_R_CANAL_16.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie A-11 R CANAL 16</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería abisagrada con Rotura de Puente Térmico.
                                Marco de 54.2 mm y hoja de 61.2 mm.
                                Espesor medio en marcos y hojas de 1.3 mm.
                                Juntas de estanqueidad en EPDM..
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serieC94">
                                    <img src="images/Aluminio/C-94.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie C-94</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería corredera montada a 90º.
                                Marco de 75.4 mm y hoja de 29.2 mm.
                                Espesor medio en marcos y hojas de 1.4 mm
                                Juntas de estanqueidad con burletes...
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serieEURO2000">
                                    <img src="images/Aluminio/EURO-2000.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie EURO 2000</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería corredera montada a 45º
                                Marco de 59.5 mm y hoja de 22 mm
                                Espesor medio en marcos y hojas de 1.3
                                Juntas de estanqueidad con burletes..
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow  zoomIn">
                                <a data-toggle="modal" data-target="#serieC97">
                                    <img src="images/Aluminio/C-97.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie C 97</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería corredera montada a 45º.
                                Marco de 71 mm y hoja de 29 mm
                                Espesor medio en marcos de 1.4 y 1.5 en hojas
                                Juntas de estanqueidad con burletes..
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serieC97R">
                                    <img src="images/Aluminio/C-97_R.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie C-97 R</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería corredera montada a 45º
                                Marco de 71 mm y hoja de 29 mm.
                                Espesor medio en marcos y hojas de 1.4 mm
                                Juntas de estanqueidad con burletes...
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="service_block">
                        <div class="thumbnail">
                            <div class="delay-03s animated wow zoomIn">
                                <a data-toggle="modal" data-target="#serieCE29R">
                                    <img src="images/Aluminio/CE-29_R.jpg" style="height:50%;width:50%;">
                                </a>
                            </div>
                            <h3 class="animated fadeInUp wow">Serie CE 29 R</h3>
                            <p class="animated fadeInDown wow">
                                Carpintería corredera elevable montada a 90º en
                                marcos y 45º en hojas
                                Marco de 115 y hoja de 45 mm
                                Espesor medio en marcos de 2 mm y 1,7 mm en hojas
                                Juntas de EPDM y burletes de estanqueidad Fin-Seal..
                            </p>
                            <br/>
                            <a href="" class="contact_btn">Catálogo</a>
                        </div>
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
                    Serie A 98 R
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/3_G.jpg" style="height:100%;width:100%;">
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
                    SERIE A-11 R
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/5_G.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serie400" tabindex="-1" role="dialog" 
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
                    SERIE EURO 400
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/4_G.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="A-96" tabindex="-1" role="dialog" 
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
                    Serie A 96
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/A-96.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieA10R" tabindex="-1" role="dialog" 
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
                    Serie A-10 R
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/A-10_R.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieA94R" tabindex="-1" role="dialog" 
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
                    Serie A 94 R
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/A-94_R.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieA94" tabindex="-1" role="dialog" 
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
                    Serie A 94
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/A-94.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieAR21" tabindex="-1" role="dialog" 
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
                    Serie AR-21
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/AR-21.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieAR25" tabindex="-1" role="dialog" 
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
                    Serie AR-25
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/AR-25.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieA11Rcanal16" tabindex="-1" role="dialog" 
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
                    Serie A-11 R CANAL 16
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/A-11_R_CANAL_16.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieC94" tabindex="-1" role="dialog" 
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
                    Serie C-94
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/C-94.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieEURO2000" tabindex="-1" role="dialog" 
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
                    Serie EURO 2000
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/EURO-2000.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieC97" tabindex="-1" role="dialog" 
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
                    Serie C 97
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/C-97.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieC97R" tabindex="-1" role="dialog" 
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
                    Serie C 97 R
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/C-97_R.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="serieCE29R" tabindex="-1" role="dialog" 
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
                    Serie CE 29 R
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Aluminio/CE-29_R.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>




<!--Catalogo-->
<section id="catalogo" class="content"> 
  <div class="container">
    <h2>Catálogo</h2>

    <div class="service_area">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat01">
                                <img src="images/Catalogo/P3300205.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P3300205</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat02">
                                <img src="images/Catalogo/P3300206.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P3300206</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat03">
                                <img src="images/Catalogo/P3300207.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P3300207</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat04">
                                <img src="images/Catalogo/P3300209.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P3300209</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat05">
                                <img src="images/Catalogo/P4050220.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P4050220</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat06">
                                <img src="images/Catalogo/P6060248.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P6060248</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat07">
                                <img src="images/Catalogo/P7270532.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P7270532</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat08">
                                <img src="images/Catalogo/PC210159.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">PC210159</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat09">
                                <img src="images/Catalogo/PC220728.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">PC220728</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat10">
                                <img src="images/Catalogo/PC220729.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">PC220729</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat11">
                                <img src="images/Catalogo/PC220739.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">PC220739</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat12">
                                <img src="images/Catalogo/PC250442.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">PC250442</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat13">
                                <img src="images/Catalogo/WP_000708.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_000708</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat14">
                                <img src="images/Catalogo/WP_000938.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_000938</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat15">
                                <img src="images/Catalogo/WP_000961.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_000961</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat16">
                                <img src="images/Catalogo/WP_000994.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_000994</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat17">
                                <img src="images/Catalogo/WP_002217.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_002217</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat18">
                                <img src="images/Catalogo/WP_002261.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_002261</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat19">
                                <img src="images/Catalogo/WP_002266.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_002266</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat20">
                                <img src="images/Catalogo/WP_002341.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_002341</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat21">
                                <img src="images/Catalogo/WP_002638.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_002638</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat22">
                                <img src="images/Catalogo/WP_002720.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_002720</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat23">
                                <img src="images/Catalogo/WP_002747.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_002747</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat24">
                                <img src="images/Catalogo/WP_003028.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_003028</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat25">
                                <img src="images/Catalogo/WP_003769.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_003769</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cat26">
                                <img src="images/Catalogo/WP_003770.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_003770</h3>
                    </div>
                </div>
            </div>
            
        </div>
        
  </div>
</section>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat01" tabindex="-1" role="dialog" 
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
                    P3300205                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/P3300205.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat02" tabindex="-1" role="dialog" 
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
                    P3300206                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/P3300206.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat03" tabindex="-1" role="dialog" 
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
                    P3300207                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/P3300207.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat04" tabindex="-1" role="dialog" 
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
                    P3300209                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/P3300209.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat05" tabindex="-1" role="dialog" 
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
                    P4050220                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/P4050220.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat06" tabindex="-1" role="dialog" 
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
                    P6060248                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/P6060248.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat07" tabindex="-1" role="dialog" 
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
                    P7270532                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/P7270532.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat08" tabindex="-1" role="dialog" 
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
                    PC210159                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/PC210159.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat09" tabindex="-1" role="dialog" 
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
                    PC220728                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/PC220728.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat10" tabindex="-1" role="dialog" 
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
                    PC220729                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/PC220729.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat11" tabindex="-1" role="dialog" 
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
                    PC220739                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/PC220739.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat12" tabindex="-1" role="dialog" 
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
                    PC250442                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/PC250442.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat13" tabindex="-1" role="dialog" 
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
                    WP_000708                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_000708.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat14" tabindex="-1" role="dialog" 
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
                    WP_000938                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_000938.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat15" tabindex="-1" role="dialog" 
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
                    WP_000961                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_000961.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat16" tabindex="-1" role="dialog" 
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
                    WP_000994                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_000994.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat17" tabindex="-1" role="dialog" 
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
                    WP_002217                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_002217.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat18" tabindex="-1" role="dialog" 
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
                    WP_002261                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_002261.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat19" tabindex="-1" role="dialog" 
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
                    WP_002266                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_002266.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat20" tabindex="-1" role="dialog" 
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
                    WP_002341                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_002341.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat21" tabindex="-1" role="dialog" 
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
                    WP_002638                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_002638.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat22" tabindex="-1" role="dialog" 
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
                    WP_002720                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_002720.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat23" tabindex="-1" role="dialog" 
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
                    WP_002747                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_002747.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat24" tabindex="-1" role="dialog" 
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
                    WP_003028                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_003028.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat25" tabindex="-1" role="dialog" 
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
                    WP_003769                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_003769.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Catalogo-->
<div class="modal fade" id="cat26" tabindex="-1" role="dialog" 
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
                    WP_003770                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_003770.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>




<!--PVC-->
<section id="PVC"><!--main-section-start-->
  <div class="container">
    <h2>PVC</h2>
    <div class="service_area">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#termico">
                                <img src="images/PVC/aislamiento-termico.png" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Aislamiento Térmico</h3>
                        <p class="animated fadeInDown wow">
                            La importancia de un buen aislamiento térmico
                            Las ventanas mantienen el calor incluso después de haber apagado la calefacción, lo que puede llegar a reducir tu factura de calefacción hasta en un 70%..
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#acustico">
                                <img src="images/PVC/aislamiento-acustico.png" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Aislamiento-acustico</h3>
                        <p class="animated fadeInDown wow">
                            Mejora la calidad de tu vivienda
                            Un aislamiento acústico es fundamental para un hogar tranquilo y confortable.  Garantiza un correcto descanso y evita situaciones de estrés sonoro que puedan perjudicar tu salud y la de tu familia..
                        </p>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
  </div>
</section>
<!--main-section-end--> 


<!--formulario de fotos PVC-->
<div class="modal fade" id="termico" tabindex="-1" role="dialog" 
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
                    Aislamiento Térmico
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/PVC/aislamiento-termico.png" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="acustico" tabindex="-1" role="dialog" 
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
                    Aislamiento Acústico
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/PVC/aislamiento-acustico.png" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>







<!--Mampara Baño-->
<section class="main-section" id="mampara_bano"><!--main-section client-part-start-->
</section>
<!--main-section client-part-end-->
<!--SIN HACER-->



<!--Frente Armario-->
<section id="frente_armario" class="content"> 
  <div class="container">
    <h2>Frente Armario</h2>
    
    <div class="service_area">
    
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id60">
                                <img src="images/Frentes/wenge-con-inox.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">wenge-con-inox</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id2">
                                <img src="images/Frentes/2-Hojas-crema-butilar.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">2-Hojas-crema-butilar</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id3">
                                <img src="images/Frentes/3 hojas virdrio.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">3 hojas virdrio</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id4">
                                <img src="images/Frentes/Abat-Plegable.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Abat-Plegable</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id5">
                                <img src="images/Frentes/Abatible mallorquina.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Abatible mallorquina</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id6">
                                <img src="images/Frentes/Abatible-abierta.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Abatible-abierta</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id7">
                                <img src="images/Frentes/Abatible-cerrada-Frente-cam.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Abatible-cerrada-Frente-cam</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id8">
                                <img src="images/Frentes/Abatible-cerrada-azul.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Abatible-cerrada-azul</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id9">
                                <img src="images/Frentes/Abatible-corredera_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Abatible-corredera_exposure</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id10">
                                <img src="images/Frentes/Barrotillo Cerezo_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Barrotillo Cerezo_exposure</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id11">
                                <img src="images/Frentes/Centro espejo cerezo.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Centro espejo cerezo</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id12">
                                <img src="images/Frentes/Cerezo-butilar.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Cerezo-butilar</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id13">
                                <img src="images/Frentes/DSCN0044.JPG" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">DSCN0044</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id14">
                                <img src="images/Frentes/Espejo Mate Cerezo.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Espejo Mate Cerezo</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id15">
                                <img src="images/Frentes/Habitacion Propia 1 Retocada.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Habitacion Propia 1 Retocada</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id16">
                                <img src="images/Frentes/Haya-Inox-Azul.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Haya-Inox-Azul</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id17">
                                <img src="images/Frentes/Haya-Inox-Verde.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Haya-Inox-Verde</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id18">
                                <img src="images/Frentes/Haya-Inox.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Haya-Inox</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id19">
                                <img src="images/Frentes/Haya-en-L-frontal.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Haya-en-L-frontal</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id20">
                                <img src="images/Frentes/Haya-en-L.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Haya-en-L</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id21">
                                <img src="images/Frentes/IMG_0282 1.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_0282 1</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id22">
                                <img src="images/Frentes/IMG_0751.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_0751</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id23">
                                <img src="images/Frentes/IMG_0757.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_0757</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id24">
                                <img src="images/Frentes/IMG_2506.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_2506</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id25">
                                <img src="images/Frentes/IMG_2529.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_2529</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id26">
                                <img src="images/Frentes/IMG_4578 retocada_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4578 retocada_exposure</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id27">
                                <img src="images/Frentes/IMG_4583 retocada copia_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4583 retocada copia_exposure</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id28">
                                <img src="images/Frentes/IMG_4585 retocada copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4585 retocada copia</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id29">
                                <img src="images/Frentes/IMG_4587 retocada copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4587 retocada copia</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id30">
                                <img src="images/Frentes/IMG_4595 copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4595 copia</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id31">
                                <img src="images/Frentes/IMG_4597 copia_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4597 copia_exposure</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id32">
                                <img src="images/Frentes/IMG_4601 retocada copia_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4601 retocada copia_exposure</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id33">
                                <img src="images/Frentes/IMG_4604 rotocada copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4604 rotocada copia</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id34">
                                <img src="images/Frentes/IMG_4743 copia_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4743 copia_exposure</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id35">
                                <img src="images/Frentes/IMG_4756 copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4756 copia</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id36">
                                <img src="images/Frentes/IMG_4766 copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4766 copia</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id37">
                                <img src="images/Frentes/IMG_4807.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4807</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id38">
                                <img src="images/Frentes/IMG_4811.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4811</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id39">
                                <img src="images/Frentes/IMG_4812 copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4812 copia</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id40">
                                <img src="images/Frentes/IMG_4812.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4812</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id41">
                                <img src="images/Frentes/Inox-Azul.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Inox-Azul</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id42">
                                <img src="images/Frentes/Inox-Roble.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Inox-Roble</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">

                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id59">
                                <img src="images/Frentes/roble-vidrio-blanco.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">roble-vidrio-blanco</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id44">
                                <img src="images/Frentes/L naranja copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">L naranja copia</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id45">
                                <img src="images/Frentes/P8040082_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P8040082_exposure</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id46">
                                <img src="images/Frentes/P9050014.JPG" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P9050014</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">

                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id58">
                                <img src="images/Frentes/modelo capilla.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">modelo capilla</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">

                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id57">
                                <img src="images/Frentes/inox-azul-haya.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">inox-azul-haya</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id49">
                                <img src="images/Frentes/aspas.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">aspas</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id50">
                                <img src="images/Frentes/blanco laca.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">blanco laca</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id51">
                                <img src="images/Frentes/cerezo-a-cuchillo.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">cerezo-a-cuchillo</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id52">
                                <img src="images/Frentes/cerezo-mate.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">cerezo-mate</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id53">
                                <img src="images/Frentes/cerezo-vidrio-blanco.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">cerezo-vidrio-blanco</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id54">
                                <img src="images/Frentes/cerezo-vidrio-blanco2.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">cerezo-vidrio-blanco2</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id55">
                                <img src="images/Frentes/granate con fajas.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">granate con fajas</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#id56">
                                <img src="images/Frentes/haya-blanco.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">haya-blanco</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi23">
                                <img src="images/Frentes/Interiores/interior 4-a.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">interior 4-a</h3>
                    </div>
                </div>
            </div>
        </div>

        
        

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi22">
                                <img src="images/Frentes/Interiores/interior 3-b.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">interior 3-b</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi2">
                                <img src="images/Frentes/Interiores/2-c.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">2-c</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi3">
                                <img src="images/Frentes/Interiores/Combinado.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Combinado</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi4">
                                <img src="images/Frentes/Interiores/Copia de P2180038.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Copia de P2180038</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi5">
                                <img src="images/Frentes/Interiores/Cristal.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Cristal</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi6">
                                <img src="images/Frentes/Interiores/IMG_0761.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_0761</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi7">
                                <img src="images/Frentes/Interiores/IMG_0772.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_0772</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi8">
                                <img src="images/Frentes/Interiores/IMG_2224.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_2224</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi9">
                                <img src="images/Frentes/Interiores/IMG_4579 retocada_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4579 retocada_exposure</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi10">
                                <img src="images/Frentes/Interiores/IMG_4588 retocada copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4588 retocada copia</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi11">
                                <img src="images/Frentes/Interiores/IMG_4746_exposure.JPG" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4746_exposure</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi12">
                                <img src="images/Frentes/Interiores/IMG_4770.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_4770</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi13">
                                <img src="images/Frentes/Interiores/Interior con cesto ropa.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Interior con cesto ropa</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi14">
                                <img src="images/Frentes/Interiores/Interior en L_exposure.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Interior en L_exposure</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi15">
                                <img src="images/Frentes/Interiores/P1010123.JPG" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P1010123</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi16">
                                <img src="images/Frentes/Interiores/P9180110.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">P9180110</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi21">
                                <img src="images/Frentes/Interiores/interior  europeo copia.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">interior  europeo copia</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi20">
                                <img src="images/Frentes/Interiores/central.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">central</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#idi19">
                                <img src="images/Frentes/Interiores/Vigas.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Vigas</h3>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
      </div>
    </div>
<!--  </div>-->
</section>






<!--formulario de fotos Frente-->
<div class="modal fade" id="id0" tabindex="-1" role="dialog" 
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
                                    </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/." style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id1" tabindex="-1" role="dialog" 
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
                                    </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/.." style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id2" tabindex="-1" role="dialog" 
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
                    2-Hojas-crema-butilar                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/2-Hojas-crema-butilar.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id3" tabindex="-1" role="dialog" 
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
                    3 hojas virdrio                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/3 hojas virdrio.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id4" tabindex="-1" role="dialog" 
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
                    Abat-Plegable                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Abat-Plegable.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id5" tabindex="-1" role="dialog" 
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
                    Abatible mallorquina                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Abatible mallorquina.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id6" tabindex="-1" role="dialog" 
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
                    Abatible-abierta                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Abatible-abierta.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id7" tabindex="-1" role="dialog" 
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
                    Abatible-cerrada-Frente-cam                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Abatible-cerrada-Frente-cam.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id8" tabindex="-1" role="dialog" 
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
                    Abatible-cerrada-azul                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Abatible-cerrada-azul.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id9" tabindex="-1" role="dialog" 
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
                    Abatible-corredera_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Abatible-corredera_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id10" tabindex="-1" role="dialog" 
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
                    Barrotillo Cerezo_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Barrotillo Cerezo_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id11" tabindex="-1" role="dialog" 
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
                    Centro espejo cerezo                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Centro espejo cerezo.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id12" tabindex="-1" role="dialog" 
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
                    Cerezo-butilar                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Cerezo-butilar.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id13" tabindex="-1" role="dialog" 
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
                    DSCN0044                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/DSCN0044.JPG" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id14" tabindex="-1" role="dialog" 
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
                    Espejo Mate Cerezo                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Espejo Mate Cerezo.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id15" tabindex="-1" role="dialog" 
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
                    Habitacion Propia 1 Retocada                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Habitacion Propia 1 Retocada.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id16" tabindex="-1" role="dialog" 
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
                    Haya-Inox-Azul                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Haya-Inox-Azul.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id17" tabindex="-1" role="dialog" 
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
                    Haya-Inox-Verde                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Haya-Inox-Verde.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id18" tabindex="-1" role="dialog" 
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
                    Haya-Inox                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Haya-Inox.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id19" tabindex="-1" role="dialog" 
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
                    Haya-en-L-frontal                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Haya-en-L-frontal.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id20" tabindex="-1" role="dialog" 
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
                    Haya-en-L                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Haya-en-L.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id21" tabindex="-1" role="dialog" 
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
                    IMG_0282 1                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_0282 1.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id22" tabindex="-1" role="dialog" 
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
                    IMG_0751                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_0751.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id23" tabindex="-1" role="dialog" 
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
                    IMG_0757                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_0757.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id24" tabindex="-1" role="dialog" 
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
                    IMG_2506                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_2506.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id25" tabindex="-1" role="dialog" 
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
                    IMG_2529                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_2529.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id26" tabindex="-1" role="dialog" 
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
                    IMG_4578 retocada_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4578 retocada_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id27" tabindex="-1" role="dialog" 
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
                    IMG_4583 retocada copia_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4583 retocada copia_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id28" tabindex="-1" role="dialog" 
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
                    IMG_4585 retocada copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4585 retocada copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id29" tabindex="-1" role="dialog" 
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
                    IMG_4587 retocada copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4587 retocada copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id30" tabindex="-1" role="dialog" 
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
                    IMG_4595 copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4595 copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id31" tabindex="-1" role="dialog" 
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
                    IMG_4597 copia_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4597 copia_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id32" tabindex="-1" role="dialog" 
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
                    IMG_4601 retocada copia_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4601 retocada copia_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id33" tabindex="-1" role="dialog" 
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
                    IMG_4604 rotocada copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4604 rotocada copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id34" tabindex="-1" role="dialog" 
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
                    IMG_4743 copia_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4743 copia_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id35" tabindex="-1" role="dialog" 
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
                    IMG_4756 copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4756 copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id36" tabindex="-1" role="dialog" 
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
                    IMG_4766 copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4766 copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id37" tabindex="-1" role="dialog" 
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
                    IMG_4807                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4807.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id38" tabindex="-1" role="dialog" 
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
                    IMG_4811                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4811.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id39" tabindex="-1" role="dialog" 
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
                    IMG_4812 copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4812 copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id40" tabindex="-1" role="dialog" 
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
                    IMG_4812                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/IMG_4812.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id41" tabindex="-1" role="dialog" 
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
                    Inox-Azul                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Inox-Azul.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id42" tabindex="-1" role="dialog" 
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
                    Inox-Roble                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Inox-Roble.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id43" tabindex="-1" role="dialog" 
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
                    Interiores                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id44" tabindex="-1" role="dialog" 
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
                    L naranja copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/L naranja copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id45" tabindex="-1" role="dialog" 
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
                    P8040082_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/P8040082_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id46" tabindex="-1" role="dialog" 
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
                    P9050014                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/P9050014.JPG" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id47" tabindex="-1" role="dialog" 
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
                    PPMetaData                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/PPMetaData.bin" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id48" tabindex="-1" role="dialog" 
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
                    Thumbs                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Thumbs.db" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id49" tabindex="-1" role="dialog" 
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
                    aspas                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/aspas.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id50" tabindex="-1" role="dialog" 
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
                    blanco laca                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/blanco laca.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id51" tabindex="-1" role="dialog" 
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
                    cerezo-a-cuchillo                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/cerezo-a-cuchillo.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id52" tabindex="-1" role="dialog" 
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
                    cerezo-mate                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/cerezo-mate.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id53" tabindex="-1" role="dialog" 
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
                    cerezo-vidrio-blanco                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/cerezo-vidrio-blanco.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id54" tabindex="-1" role="dialog" 
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
                    cerezo-vidrio-blanco2                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/cerezo-vidrio-blanco2.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id55" tabindex="-1" role="dialog" 
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
                    granate con fajas                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/granate con fajas.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id56" tabindex="-1" role="dialog" 
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
                    haya-blanco                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/haya-blanco.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id57" tabindex="-1" role="dialog" 
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
                    inox-azul-haya                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/inox-azul-haya.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id58" tabindex="-1" role="dialog" 
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
                    modelo capilla                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/modelo capilla.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id59" tabindex="-1" role="dialog" 
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
                    roble-vidrio-blanco                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/roble-vidrio-blanco.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id60" tabindex="-1" role="dialog" 
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
                    wenge-con-inox                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/wenge-con-inox.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="id61" tabindex="-1" role="dialog" 
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
                                    </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>


<!--formulario de fotos Frente-->
<div class="modal fade" id="idi0" tabindex="-1" role="dialog" 
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
                                    </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/." style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi1" tabindex="-1" role="dialog" 
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
                                    </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/.." style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi2" tabindex="-1" role="dialog" 
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
                    2-c                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/2-c.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi3" tabindex="-1" role="dialog" 
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
                    Combinado                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/Combinado.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi4" tabindex="-1" role="dialog" 
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
                    Copia de P2180038                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/Copia de P2180038.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi5" tabindex="-1" role="dialog" 
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
                    Cristal                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/Cristal.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi6" tabindex="-1" role="dialog" 
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
                    IMG_0761                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/IMG_0761.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi7" tabindex="-1" role="dialog" 
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
                    IMG_0772                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/IMG_0772.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi8" tabindex="-1" role="dialog" 
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
                    IMG_2224                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/IMG_2224.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi9" tabindex="-1" role="dialog" 
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
                    IMG_4579 retocada_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/IMG_4579 retocada_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi10" tabindex="-1" role="dialog" 
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
                    IMG_4588 retocada copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/IMG_4588 retocada copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi11" tabindex="-1" role="dialog" 
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
                    IMG_4746_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/IMG_4746_exposure.JPG" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi12" tabindex="-1" role="dialog" 
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
                    IMG_4770                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/IMG_4770.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi13" tabindex="-1" role="dialog" 
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
                    Interior con cesto ropa                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/Interior con cesto ropa.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi14" tabindex="-1" role="dialog" 
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
                    Interior en L_exposure                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/Interior en L_exposure.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi15" tabindex="-1" role="dialog" 
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
                    P1010123                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/P1010123.JPG" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi16" tabindex="-1" role="dialog" 
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
                    P9180110                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/P9180110.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi17" tabindex="-1" role="dialog" 
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
                    PPMetaData                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/PPMetaData.bin" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi18" tabindex="-1" role="dialog" 
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
                    Thumbs                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/Thumbs.db" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi19" tabindex="-1" role="dialog" 
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
                    Vigas                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/Vigas.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi20" tabindex="-1" role="dialog" 
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
                    central                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/central.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi21" tabindex="-1" role="dialog" 
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
                    interior  europeo copia                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/interior  europeo copia.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi22" tabindex="-1" role="dialog" 
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
                    interior 3-b                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/interior 3-b.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi23" tabindex="-1" role="dialog" 
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
                    interior 4-a                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/interior 4-a.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>
    
    
<!--formulario de fotos Frente-->
<div class="modal fade" id="idi24" tabindex="-1" role="dialog" 
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
                                    </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Frentes/Interiores/" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>



<!--Cortina Cristal Baño-->
<section class="main-section" id="cortina_cristal"><!--main-section client-part-start-->
  <div class="container">
    <h2>Cortina Cristal</h2>
    <div class="service_area">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cc1">
                                <img src="images/cortina/cortina cristal.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Cortina Cristal</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cc2">
                                <img src="images/cortina/cortina cristal1.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Cortina Cristal</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#cc3">
                                <img src="images/cortina/cortina cristal2.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">Cortina Cristal</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>    
</section>

<!--formulario de fotos Cortina Cristal-->
<div class="modal fade" id="cc1" tabindex="-1" role="dialog" 
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
                    Cortina Cristal                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/cortina/cortina cristal.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cc2" tabindex="-1" role="dialog" 
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
                    Cortina Cristal                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/cortina/cortina cristal1.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cc3" tabindex="-1" role="dialog" 
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
                    Cortina Cristal                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/cortina/cortina cristal2.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>


<!--Persianas-->
<section class="main-section" id="persiana"><!--main-section client-part-start-->
  <div class="container">
    <h2>Persianas</h2>
    <div class="service_area">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#per01">
                                <img src="images/persianas/IMG_20150731_105014.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_20150731_105014</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#per02">
                                <img src="images/persianas/IMG_20151113_121531.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_20151113_121531</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#per03">
                                <img src="images/persianas/IMG_20160321_104541.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_20160321_104541</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#per04">
                                <img src="images/persianas/IMG_20160321_104544.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_20160321_104544</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#per05">
                                <img src="images/persianas/IMG_20160321_104553.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_20160321_104553</h3>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
  </div>    
</section>

<!--formulario de fotos Persianas-->
<div class="modal fade" id="per01" tabindex="-1" role="dialog" 
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
                    IMG_20150731_105014                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/persianas/IMG_20150731_105014.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Persianas-->
<div class="modal fade" id="per02" tabindex="-1" role="dialog" 
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
                    IMG_20151113_121531                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/persianas/IMG_20151113_121531.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Persianas-->
<div class="modal fade" id="per03" tabindex="-1" role="dialog" 
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
                    IMG_20160321_104541                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/persianas/IMG_20160321_104541.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Persianas-->
<div class="modal fade" id="per04" tabindex="-1" role="dialog" 
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
                    IMG_20160321_104544                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/persianas/IMG_20160321_104544.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Persianas-->
<div class="modal fade" id="per05" tabindex="-1" role="dialog" 
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
                    IMG_20160321_104553                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/persianas/IMG_20160321_104553.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>






<!--Toldos-->
<section class="main-section" id="toldos"><!--main-section client-part-start-->
  <div class="container">
    <h2>Toldos</h2>
    <div class="service_area">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#tol01">
                                <img src="images/Catalogo/WP_002261.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_002261</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#tol02">
                                <img src="images/Catalogo/WP_002266.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">WP_002266</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="service_block">
                    <div class="thumbnail">
                        <div class="delay-03s animated wow  zoomIn">
                            <a data-toggle="modal" data-target="#tol03">
                                <img src="images/toldos/IMG_20150527_185218.jpg" style="height:50%;width:50%;">
                            </a>
                        </div>
                        <h3 class="animated fadeInUp wow">IMG_20150527_185218</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>    
</section>

<!--formulario de fotos Toldos-->
<div class="modal fade" id="tol01" tabindex="-1" role="dialog" 
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
                    WP_002261                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_002261.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Toldos-->
<div class="modal fade" id="tol02" tabindex="-1" role="dialog" 
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
                    WP_002266                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/WP_002266.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>

<!--formulario de fotos Toldos-->
<div class="modal fade" id="tol03" tabindex="-1" role="dialog" 
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
                    IMG_20150527_185218                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
              <img src="images/Catalogo/IMG_20150527_185218.jpg" style="height:100%;width:100%;">
            </div>
        </div>
    </div>
</div>





<!--<div class="c-logo-part">c-logo-part-start
  <div class="container">
    <ul class="delay-06s animated  bounce wow">
      <li><a href="javascript:void(0)"><img src="img/c-liogo1.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo2.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo3.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/c-liogo5.png" alt=""></a></li>
    </ul>
  </div>
</div>-->
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
              <span>Calle Cid 1, <br>
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
<!--          <ul class="social-link">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa-google-plus"></i></a></li>
            <li class="dribbble animated bounceIn wow delay-06s"><a href="javascript:void(0)"><i class="fa-dribbble"></i></a></li>
          </ul>-->
        </div>
        <div class="col-lg-6 wow fadeInUp delay-06s">
          <div class="form">
              <?php
              //si se submite se guarda y se indica en este formulario de contacto
              error_reporting(0);
              
              if(isset($_POST['nombre']) && $_POST['nombre'] !== ''){
                //se guardan los datos en la tabla "mensajes"
                //y si se a guardado correctamente se devuelve un mensaje de OK
                //se envia el correo con el mensaje a la direccion "ccristaleria@gmail.com"
//                $usuario = 'root';
//                $password = '';
//                $nombreBD = 'bienve';
                
//                $usuario = 'u592842228_marqu';//hostinger
//                $password = 'parra1970';
//                $nombreBD = 'u592842228_marqu';
                
                $server = 'localhost';//MBI
                $usuario = 's201859c_parra';//MBI
                $password = 'parra1970';
                $nombreBD = 's201859c_bienve';

                function logger($texto){
                    $ddf = fopen('./log/log.txt', 'a');
                    date_default_timezone_set('Europe/Madrid');
                    fwrite($ddf, "[" . date("r") . " - IP:".$_SERVER['REMOTE_HOST']."] $texto\n");
                    fclose($ddf);
                }
                

                try {
                    $con = mysql_connect($server, $usuario, $password);

                    //logger($con);
                    
                    mysql_select_db($nombreBD);
                    mysql_query( "SET NAMES 'utf8'" );
                    
                    //extraigo el Id nuevo
                    $result = mysql_query('SELECT IF(ISNULL(MAX(id)),1,MAX(id)+1) AS id FROM mensajes');
                    logger('IdNuevoSQL: '.$result);
                    
                    $row = mysql_fetch_array($result);
                    $IdNuevo = $row['id'];

                    logger('IdNuevo: '.$IdNuevo);
                    //ahora hago la inserción

                    $nombre = mysql_real_escape_string($_POST['nombre']);
                    $email = mysql_real_escape_string($_POST['email']);
                    $mensaje = mysql_real_escape_string($_POST['mensaje']);
                    $sql = "INSERT INTO mensajes (Id, fecha, nombre, email, mensaje) VALUES ($IdNuevo,now(),'$nombre','$email','$mensaje')";

                    logger($sql);
                    
                    $result = mysql_query($sql);
                    mysql_close($con);
                    
                } catch ( Exception $e ){
                    //se escribe en un fichero log
                    logger($e);
                }
                
                

//                if($result){
//                    echo '<div class="alert alert-danger">OK</div>';
//                }else{
//                    echo '<div class="alert alert-danger">ERROR</div>';
//                }
                        
                  
                //ahora hago el envio del correo a "ccristaleria@gmail.com"  
                require_once './phpmailer/PHPMailerAutoload.php';
                
                $from = $email;
                $to = 'ccristaleria@gmail.com';
//                $to = 'fparralejo1970@gmail.com';//pruebas

                $mail = new PHPMailer();
                //Correo desde donde se envía (from)
                $mail->setFrom($from, '');
                //Correo de envío (to)
                $mail->addAddress($to, '');
                $mail->CharSet = "UTF-8";
                $mail->Subject = "Mensaje enviado del formulario de contactar en 'www.aluminios.com'";



                $html='<!DOCTYPE html>
                        <html>
                            <head>
                                <title>Mensaje enviado del formulario de contactar en "www.aluminios.com"</title>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width">
                            </head>
                            <body>
                                <h3>'.$nombre.':</h3> 
                                <p> 
                                '.$mensaje.'
                                </p> 
                            </body>
                        </html>';


                //convierte HTML un plain-text básico 
                $mail->msgHTML($html);
                //Envio del mail
                if ($mail->send()) {
                    echo '<div class="alert alert-success">Enviado su mensaje correctamente.<br/> Le daremos respuesta lo más pronto posible<br/>Muchas gracias</div>';
                } else {
                    echo '<div class="alert alert-danger">ERROR No se envió el mensaje, pruebe en unos instantes otra vez. Perdone las molestias</div>';
                }
              }                
              ?>
              <form name="contactar" action="index.php#contact" method="post">
                <input class="input-text animated wow flipInY delay-02s" type="text" name="nombre" placeholder="Su Nombre *">
                <input class="input-text animated wow flipInY delay-04s" type="text" name="email" placeholder="Su E-mail *">
                <textarea class="input-text text-area animated wow flipInY delay-06s" name="mensaje" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Su mensaje *</textarea>
                <input class="input-btn animated wow flipInY delay-08s" type="button" id="btnContact" value="Enviar" onclick="validar();">
              </form> 
              <script>
                  function validar(){
                    esValido=true;
                    textoError='';

                    //comprobacion del campo 'nombre'
                    if (document.contactar.nombre.value === ''){ 
                        textoError = textoError + "Es necesario introducir un nombre.\n";
                        esValido = false;
                    }

                    //comprobacion del campo 'email'
                    if (document.contactar.email.value === ''){ 
                        textoError = textoError + "Es necesario introducir un email.\n";
                        esValido = false;
                    }else{
                      //compruebo que el e-mail tenga un formato correcto 'admin@admin.com'  
                      expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                      if ( !expr.test(document.contactar.email.value) ){
                          textoError = textoError + "El E-mail " + document.contactar.email.value + " es incorrecto.\n";
                          esValido = false;
                      }
                    }
                      
                    //indicar el mensaje de error si es 'esValido' false
                    if (!esValido){
                            alert(textoError);
                    }

                    if(esValido == true){
                        document.getElementById("btnContact").value = "Enviando...";
                        document.getElementById("btnContact").disabled = true;
                        document.contactar.submit();
                    }else{
                        return false;
                    }  
                  }
              </script>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"> <span>2016 FPP</span> </div>
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