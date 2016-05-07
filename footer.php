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
//                $server = 'localhost';
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
                    //logger($con);
                    
                    // Create connection
                    $conn = new mysqli($server, $usuario, $password, $nombreBD);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Conexion fallida: " . $conn->connect_error);
                    } 
                    
                    $conn->query( "SET NAMES 'utf8'" );
                    
                    //extraigo el Id nuevo
                    $result = $conn->query('SELECT IF(ISNULL(MAX(id)),1,MAX(id)+1) AS id FROM mensajes');
                    //logger('IdNuevoSQL: '.$result);
                    
                    
                    $row = $result->fetch_assoc();
                    $IdNuevo = $row['id'];

                    //logger('IdNuevo: '.$IdNuevo);
                    //ahora hago la inserción

                    $nombre = $conn->escape_string($_POST['nombre']);
                    $email = $conn->escape_string($_POST['email']);
                    $mensaje = $conn->escape_string($_POST['mensaje']);
                    $sql = "INSERT INTO mensajes (Id, fecha, nombre, email, mensaje) VALUES ($IdNuevo,now(),'$nombre','$email','$mensaje')";

                    //logger($sql);
                    
                    $result = $conn->query($sql);
                    
                    $conn->close();
                    
                } catch ( Exception $e ){
                    //se escribe en un fichero log
                    //logger($e);
                }
                
                

                if($result){
                    echo '<div class="alert alert-danger">OK</div>';
                }else{
                    echo '<div class="alert alert-danger">ERROR</div>';
                }
                        
                  
                //ahora hago el envio del correo a "ccristaleria@gmail.com"  
                require_once './phpmailer/PHPMailerAutoload.php';
                
                $from = $email;
                //$to = 'ccristaleria@gmail.com';
                $to = 'fparralejo1970@yahoo.es';//pruebas

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
              <form name="contactar" action="index.php" method="post">
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
                
                $('.menuBoton').click(function(event){
                    $(".toggle").css("display","none");
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