<?php
include "./header.php";
?>


<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a class="menuBoton" href="index.php"><img src="images/logo-bienve.jpg" alt=""></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
<!--          <li><a href="#top_content">Inicio</a></li>-->
          <li><a class="menuBoton" href="aluminio.php">Aluminio</a></li>
          <li><a class="menuBoton" href="catalogo.php">Catálogo</a></li>
          <li><a class="menuBoton" href="PVC.php">PVC</a></li>
          <li><a class="menuBoton" href="mampara_bano.php">Mampara Baño</a></li>
          <li><a class="menuBoton" href="frente_armario.php">Frente Armario</a></li>
          <li><a class="menuBoton" href="cortina_cristal.php">Cortina Cristal</a></li>
          <li><a class="menuBoton" href="persiana.php">Persiana</a></li>
          <li><a class="menuBoton" href="#toldos">Toldos</a></li>
          <li><a class="menuBoton" href="#contact">Contactar</a></li>
          <li><a href=""></a></li>
        </ul>
        <ul class="">
<!--          <li><a href="#top_content">Inicio</a></li>-->
          <li><a href="aluminio.php">Aluminio</a></li>
          <li><a href="catalogo.php">Catálogo</a></li>
          <li><a href="PVC.php">PVC</a></li>
          <li><a href="mampara_bano.php">Mampara Baño</a></li>
          <li><a href="frente_armario.php">Frente Armario</a></li>
          <li><a href="cortina_cristal.php">Cortina Cristal</a></li>
          <li><a href="persiana.php">Persiana</a></li>
          <li><a href="#toldos">Toldos</a></li>
          <li><a href="#contact">Contactar</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section--> 







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







<?php
include "./footer.php";
?>
