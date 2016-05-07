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
          <li><a class="menuBoton" href="#PVC">PVC</a></li>
          <li><a class="menuBoton" href="mampara_bano.php">Mampara Baño</a></li>
          <li><a class="menuBoton" href="frente_armario.php">Frente Armario</a></li>
          <li><a class="menuBoton" href="cortina_cristal.php">Cortina Cristal</a></li>
          <li><a class="menuBoton" href="persiana.php">Persiana</a></li>
          <li><a class="menuBoton" href="toldos.php">Toldos</a></li>
          <li><a class="menuBoton" href="#contact">Contactar</a></li>
          <li><a href=""></a></li>
        </ul>
        <ul class="">
<!--          <li><a href="#top_content">Inicio</a></li>-->
          <li><a href="aluminio.php">Aluminio</a></li>
          <li><a href="catalogo.php">Catálogo</a></li>
          <li><a href="#PVC">PVC</a></li>
          <li><a href="mampara_bano.php">Mampara Baño</a></li>
          <li><a href="frente_armario.php">Frente Armario</a></li>
          <li><a href="cortina_cristal.php">Cortina Cristal</a></li>
          <li><a href="persiana.php">Persiana</a></li>
          <li><a href="toldos.php">Toldos</a></li>
          <li><a href="#contact">Contactar</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section--> 





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







<?php
include "./footer.php";
?>
