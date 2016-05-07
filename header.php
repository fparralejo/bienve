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

