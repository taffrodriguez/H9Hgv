<!--
Author: Helenik9
HOTEL GV
-->
<!DOCTYPE html>
<html>
<head>
<title>HOTEL GV | Reservación :: helenik9</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="images/favicon2.png">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="AGROFIRM Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
 <!--start lightbox -->
<script src="js/jquery.min.js"></script>
<script src="js/indexjss.js"></script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="tollfree">
				<ul>
					<li><i class="flag"></i></li>
					<li><i class="phone"></i></li>
					<li><p class="call">Reservaciones :</p>
					<p>01-800-123-1234</p></li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="navigation">
			 <div class="navigation-bar">
				<!-- <div class="search2">
					  <form>
						 <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						 <input type="submit" value="">
					  </form>
					</div> -->
			 <span class="menu"></span>
				<div class="top-menu">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="habitaciones.html">Habitaciones</a></li>
						<li><a href="servicios.html">Servicios</a></li>
						<li><a href="conoceoaxaca.html">Conoce Oaxaca</a></li>
						<li><a href="promociones.html">Promociones</a></li>
						<li><a href="contacto.html">Contacto</a></li>
						<li><a class="active" href="reservacion_.php">Reservaciones</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
					<div class="clearfix"> </div>
			</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="about-content">
		<div class="container">
			<!-- Contact -->
		<div class="contact">
					<div class="contact-head text-center">
						<div id="inicio"></div>
						<h2>reservar</h2>
						<span>Los campos con asterisco*, son datos requeridos</span>
					</div>		
					<!----- contact-grids ----->		
					<div class="contact-grids">

						<!----- contact-form ------>
						<div class="contact-form">
							<form id="form1" name="form1" method="post" action="javascript:fn_llamada('#form1','reserva_resultado.php', '#resultado1');">
								<div class="contact-form-row">
									<div>
										<span>*Fecha de llegada :</span>
										<input type="date" name="check_in" class="text" value="Fecha de llegada" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Fechad de llegada';}">
									</div>
									<div>
										<span>*Fecha de salida :</span>
										<input type="date" name="check_out" class="text" value="Fecha de salida" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Fecha de Salida';}">
									</div>
									 <div>
										<span>Habitaciones :</span>
										<!-- <input type="text" class="text" value="Habitaciones" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Habitaciones';}"> -->
										<select class="text" name="hab" id="hab">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="clearfix"> </div> 
								</div>

								<div class="clearfix"> </div>
								<div class="contact-form-row">
									<!-- <span>Mensaje :</span>
									<textarea> </textarea> -->
									<div>
										<span>Adultos :</span>
										<!-- <input type="text" class="text" value="Adultos" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Adultos';}"> -->
										<select class="text" name="adult" id="adult">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
									<div>
										<span>Niños :</span>
										<!-- <input type="text" class="text" value="Niños" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Niños';}"> -->
										<select class="text" name="nin" id="nin">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</div>
									 <div>
										<span>Código de promoción :</span>
										 <input type="number" class="text" value="Código" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Código';}">
									</div>
									<div class="clearfix"> </div> 
								</div>
								<input type="submit" value="Enviar">
							</form>
						</div>
						<!----- contact-form ------>
					</div>
					<!----- contact-grids ----->

			<div id="resultado1"> </div>

			</div>

		<!-- /Contact -->

		</div>
	</div>
    </div>
	<!-- footer-section -->
	<div class="footer">
		<div class="container">
			<div class="copyright text-center">
				<p>&copy; 2018 All rights reserved | Design by  <a href="#">  Helenik9</a></p>
			</div>
		</div>
	</div>
	<!-- footer-section -->
</body>
</html>