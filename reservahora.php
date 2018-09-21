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

<?php
// Conectando y seleccionado la base de datos  
//$dbconn = pg_connect("host=localhost dbname=DB_TRIP user=postgres password=Cronopio2625")
    //or die('No se ha podido conectar: ' . pg_last_error());

$chkin = $_POST["check_in"];
$chkout = $_POST["check_out"];
$adultos= $_POST["adult"];
$ninos = $_POST["nin"];
//echo "llegada: $chkin, salida: $chkout, adultos: $adultos, Niños: $ninos";
 ?>



	<!-- header-section-ends -->
	<div class="about-content">
		<div class="container">
			<!-- Contact -->
		<div class="contact">
					<div class="contact-head text-center">
						<h2>Datos personales</h2>
						<span><strong><?php echo "Llegada: $chkin, Salida: $chkout, $adultos Adultos, $ninos Niños"; ?></strong></span>
					</div>		
					<!----- contact-grids ----->		
					<div class="contact-grids">
						<!----- contact-form ------>
						<div class="contact-form">

		<form id="formx" name="formx" method="post" action="reserva_guarda.php">

							<input type="hidden" name="check_in" class="text" value= ' <?php echo "$chkin"; ?> '>
						  	<input type="hidden" name="check_out" class="text" value= ' <?php echo "$chkout"; ?> '>
						  	<input type="hidden" name="adult" class="text" value= ' <?php echo "$adultos"; ?> '>
						  	<input type="hidden" name="nin" class="text" value= ' <?php echo "$ninos"; ?> '>

								<div class="contact-form-row">
									<div>
										<span>*Nombre :</span>
					<input type="text" name="nom_reserva" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
									
									</div>

									<div>
										<span>*Apellidos :</span>
									<input type="text" name="ap_reserva" class="text" value="Apellidos" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Apellidos';}">
									</div>
									 <div>
										<span>*Email :</span>
										 <input type="text" name="mail_reserva" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
									</div>
									<div class="clearfix"> </div> 
								</div>

								<div class="clearfix"> </div>
								<div class="contact-form-row">
									<!-- <span>Mensaje :</span>
									<textarea> </textarea> -->
									<div>
										<span>*Teléfono :</span>
										 <input type="text" name="tel_reserva" class="text" value="Tel" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tel';}">
									</div>
									<div>
										<span>*Domicilio :</span>
										 <input type="text" name="dom_reserva" class="text" value="Domicilio" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Domicilio';}"> 
									</div>
									 <div>
										<span>*Ciudad :</span>
										 <input type="text" name="cd_reserva" class="text" value="Ciudad" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ciudad';}">
									</div>
									<div class="clearfix"> </div> 
								</div>

								<div class="clearfix"> </div>
								<div class="contact-form-row">
									<!-- <span>Mensaje :</span>
									<textarea> </textarea> -->
									<div>
										<span>*Colonia :</span>
										 <input type="text" name="col_reserva" class="text" value="Colonia" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Colonia';}">
									</div>
									<div>
										<span>*País :</span>
										 <input type="text" name="pais_reserva" class="text" value="País" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'País';}">
									</div>
									<div>
										<span>*Código Postal :</span>
										 <input type="text" name="cp_reserva" class="text" value="cp" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'cp';}"> 
									</div>
									<div class="clearfix"> </div> 
								</div>

							<div class="clearfix"> </div>
								<div class="contact-form-row">
									<!-- <span>Mensaje :</span>
									<textarea> </textarea> -->
									<div>
										<img width="150" height="35" src="images/cards.jpg">
									</div>
								</div>

							<div class="clearfix"> </div>
								<div class="contact-form-row">
									<!-- <span>Mensaje :</span>
									<textarea> </textarea> -->
									<div>
										<span>*Tarjeta de crédito :</span>
							<input type="text" name="cc_tit_reserva" class="text" value="Titular" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Titular';}">
									</div>
									<div>
										<span>*Número</span>
										 <input type="text" name="cc_num_reserva" class="text" value="Num" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Num';}"> 
									</div>
									 <div>
										<span>*Vigencia</span>
								<input type="text" name="cc_vigen_reserva" class="text" value="Vigency" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Vigency';}">
									</div>
									<div class="clearfix"> </div> 
								</div>
								<input type="submit" value="Reservar">
							</form>
						</div>
						<!----- contact-form ------>
					</div>
					<!----- contact-grids ----->
			<div id="resultado2"> </div>
			</div>

		<!-- /Contact -->

		</div>
	</div>
    </div>
	<!-- footer-section -->
	<!--<div class="footer">
		<div class="container">
			<div class="copyright text-center">
				<p>&copy; 2018 All rights reserved | Design by  <a href="http://helenik9.com">  Helenik9</a></p>
			</div>
		</div>
	</div> -->
	<!-- footer-section -->
</body>
</html>