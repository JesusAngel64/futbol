<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no' name='viewport'>

    <title>Club-Angel</title>
    <link rel="shortcut Icon" href="img\ico1.png"/>
    <!-- Compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- para la el right y left de carusel < > -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" text="text/css" href="CSS/menu.css">
    <link rel="stylesheet" href="CSS/redes.css">
    <link rel="stylesheet" href="CSS/banner3.css">

    <script src="https://use.fontawesome.com/345161ea68.js"></script>
    <script src="librerias/jquery-3.5.1.min.js"></script>

  </head>

  <body>
    <!-- para el menu -->
  <header>
			<!-- div para toda la pagina -->
		<div class="anchoColor-menu">
      <img src="img/pelota.jpg">
      <p><a class="arequipa" href="<?php base_url()?>Welcome">Arequipa</a></p>

		<nav>
		 <ul class="menu">
			<li class="menu-item" id="club"><a class="menu-link" href="<?php base_url()?>menu"><strong>EL CLUB</strong></a></li>
			<li class="menu-item" id="futbol"><a class="menu-link" href="<?php base_url()?>futbol"><strong>FUTBOL</strong></a></li>
			<li class="menu-item" id="prensa"><a class="menu-link" href="<?php base_url()?>prensa"><strong>PRENSA</strong></a></li>
			<li class="menu-item"><input class="boton boton-entrada" type="button" name="" value="ENTRADA" onclick="aviso()"></li>
   	 </ul>
		</nav>


	   </div>
  </header>


  <!-- para los iconos de redes sociales -->
	<div class="redessociales">
		<!-- va a mi face pero abriendo otra pagina gracias al tardet -->
			<div id="facebook"><a href="https://www.facebook.com/" target="nome" class="fa fa-facebook"></a></div>
			<div id="youtube"><a href="#" class="fa fa-youtube-play"></a></div>
			<div id="twitter"><a href="#" class="fa fa-twitter"></a></div>
			<div id="correo"><a href="#" class="fa fa-envelope"></a></div>
  </div>


<main class="container">
  <br>
 <div class="col-sm-12">
    <!-- para el carusel imagenes -->
    <div id="carousel1" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
        <li data-target="#carousel1" data-slide-to="3"></li>
      </ol>

      <!-- Contenedor de los slides -->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="https://clubalianzalima.com.pe/static/media/banners_home/WhatsApp_Image_2020-06-16_at_13.33.21.jpeg" class="d-block img-fluid" alt="banner1" >
          <div class="carousel-caption hidden-xs hidden-sm">
            <h3>JUGADORAZO DEL AÑO</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididnt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>



      <!-- Wrapper for slides -->
      <div class="carousel-item">
          <img src="https://clubalianzalima.com.pe/static/media/banners_home/WhatsApp_Image_2020-07-02_at_08.23.50.jpeg" class="d-block img-fluid" alt="banner2">
          <div class="carousel-caption hidden-xs hidden-sm">
            <h3>JUGADORAZO DEL MES</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
      </div>

      <div class="carousel-item">
          <img src="https://clubalianzalima.com.pe/static/media/banners_home/WhatsApp_Image_2020-05-27_at_14.26.59.jpeg" class="d-block img-fluid" alt="banner2">
          <div class="carousel-caption hidden-xs hidden-sm">
            <h3>JUGADORAZO DEL MES</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
      </div>

      <!-- Wrapper for slides -->
      <div class="carousel-item">
          <img src="https://clubalianzalima.com.pe/static/media/banners_home/WhatsApp_Image_2020-06-01_at_18.06.46_S5Y4IXg.jpeg" class="d-block img-fluid" alt="banner3">
          <div class="carousel-caption hidden-xs hidden-sm">
            <h3>JUGADORAZO DEL AÑO</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Custom Controls -->
      <a href="javascript:void(0);" id="prevBtn">Prev</a>
      <a href="javascript:void(0);" id="nextBtn">Next</a>
    </div>
  </div>
</main>

<section class="banner2">
  <img src="img/img1.jpeg" >
</section>


<section class="banner3">
  <div class="noticias">
	   <h2>-------- NOTICIAS</h2>

	<div class="columnaX3">
		<img src="img/noti1.jpeg" width="35 px" height="180 px">
		<h4><strong>EMPEZO SEGUNDA FASE DE ENTRENAMIENTO</strong></h4>
		<h5>7/11/20, 6:00 PM</h5>
		<p>Los abogadomprometidos con los mas altos valores éticos y profesionales, la honradez,
			 así como nuestro actuar, siempre apegados a la l a la moral nos distinguen de los demás</p>
	</div>

  <div class="columnaX3">
		<img src="img/noti2.jpg" width="35 px" height="180 px">
		<h4><strong>JUGADOR ES DE OTRO PARTIDO YA QUE NO PUDO</strong></h4>
		<h5>7/11/20, 6:00 PM</h5>
		<p>Los abogados de este despetidos con los mas altos valores éticos y profesionales, la honradez,
			 así como nuestro actuar, siempre ap ley y a la moral nos distinguen de los demás</p>
	</div>

  <div class="columnaX3">
		<img src="img/noti3.jpg" width="35 px" height="180 px">
    <h4><strong>SE UNEN A LA CAMPAÑA EL CLUB ALE PARA EL COVID</strong></h4>
		<h5>7/11/20, 6:00 PM</h5>
		<p>Los abogados de este despacho estamos comprometidos con los mas altos valores
      así como nuestro a la ley y a la moral nos distinguen de los demás</p>
	</div>

  <div class="columnaX3">
		<img src="img/noti4.jpg" width="35 px" height="180 px">
		<h4><strong>YA EMPEZARON LAS DONACIONES</strong></h4>
		<h5>7/11/20, 6:00 PM</h5>
		<p>Los abogados de este despacho estamos comptidos con los mas altos valores éticos y ptuar, siempre apegados a la ley y a la moral nos distinguen de los demás</p>
	</div>

  <div class="columnaX3">
		<img src="img/noti5.jpg" width="35 px" height="180 px">
		<h4><strong>GANAOS DOS VECES A FRANCIA Y LUNA</strong></h4>
		<h5>7/11/20, 6:00 PM</h5>
		<p>Los abogados de este despacho estamos comprometidos con los mas altos
			 así como nuestro actuar, siempre apegados a la ley y a la moral nos distinguen de los demás</p>
	</div>

  <div class="columnaX3">
		<img src="img/noti6.jpg" width="35 px" height="180 px">
		<h4><strong>EDWIN DECIDE RENUNCIAR POR FALTA DE SUS PAGOS</strong></h4>
		<h5>7/11/20, 6:00 PM</h5>
		<p>Los abogados derometidos con los mas altos ofesionales, la honradez,
			 así como nuestro actuar, siempre apegados a ly a la moral nos distinguen de los demás</p>
	</div>

  </div>
</section>



<section>
  <div class="proxpartidos">PROXÍMOS PARTIDOS</div>
</section>

<section class="banner4">
    <img src="img/banner4.png" alt="">
</section>

<footer>
      <div class="contenedor-footer">
        <div class="content-foo">
          <h4>Phone</h4>
          <p>00591-74085867</p>
        </div>

        <div class="content-foo">
          <h4>Email</h4>
          <p>jenniferale.17@gmail.com</p>
        </div>

        <div class="content-foo">
          <h4>Location</h4>
          <p>Calle extranca rio seco Nº125</p>
        </div>
      </div>
      <h2 class="titulo-final">&copy; Jennifer </h2>
</footer>
    <!-- Minified JS library -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


   <script>
   		 $(document).ready(function(){
   			 $('.carousel1').carousel({
           interval:8000
         });
   		 });
   		</script>

      <script>
        // Call carousel manually
        $('#carousel1').carousel();

        // Go to the previous item
        $("#prevBtn").click(function(){
        $("#carousel1").carousel("prev");
          });
      // Go to the previous item
      $("#nextBtn").click(function(){
        $("#carousel1").carousel("next");
      });
      </script>

      <script>
      function aviso() {
        location.href="https://superticket.bo/";
      }
    </script>


  </body>

</html>



<!-- .slider{
  baground:url("imagenes/bg.jpg");
  heigth:100vh;
  backgroung-size:cover;
  background-position:center;
} -->
