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

$chkin = (string)$_POST["check_in"];
$chkout = (string)$_POST["check_out"];
$adultos 	= (int)$_POST["adult"];
$ninos 		= (int)$_POST["nin"];
$habitacion = (int)$_POST["hab"];
$ocupantes = $adultos + $ninos;
echo $ocupantes;

$rnombre = $_POST['nom_reserva'];
$rapellidos = $_POST['ap_reserva'];
$rmail = $_POST["mail_reserva"];
$rtel		= $_POST["tel_reserva"];
$rdomicilio	= $_POST["dom_reserva"];
$rciudad	= $_POST["cd_reserva"];
$rcolonia	= $_POST["col_reserva"];
$rpais 		= $_POST["pais_reserva"];
$rcp		= $_POST["cp_reserva"];
$rcc_tit	= $_POST["cc_tit_reserva"];
$rcc_num	= $_POST["cc_num_reserva"];
$rcc_vigen	= $_POST["cc_vigen_reserva"];

date_default_timezone_set('America/Mexico_City');
$ahora = date('Y-m-d');

// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=localhost dbname=DB_TRIP user=postgres password=Cronopio2625")
    or die('No se ha podido conectar: ' . pg_last_error());


//echo $chkin,$chkout;

// Realizando una consulta SQL
$query = 'SELECT max(chk_id) FROM hotelgv.hgv_checks';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
$checked = (pg_fetch_result($result, 0, 0))+1;
//echo $checked;

$query = 'SELECT max(guest_id) FROM hotelgv.hgv_guests';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
$hosted= (pg_fetch_result($result, 0, 0))+1;
//echo $hosted;

//
$query = "SELECT room_num from hotelgv.hgv_rooms where room_disponible and room_capacidad <= $ocupantes order by room_id limit 1";
$result = pg_query($query) or die('Hubo un problema con la asignación de habitación: ' . pg_last_error());
$hab_asignada = pg_fetch_result($result, 0, 0);


$query = "INSERT INTO hotelgv.hgv_checks(chk_id, chk_in, chk_out, chk_room_id, chk_guest_id, chk_registro) VALUES ($checked, '$chkin', '$chkout', $hab_asignada, $hosted, '$ahora' )";

$result = pg_query($query) or die('Hubo un problema con el registro: ' . pg_last_error());

$laclave = 'hgv00'.$hosted;

$query = "INSERT INTO hotelgv.hgv_guests(guest_id, guest_nombre, guest_apellidos, guest_mail, guest_domicilio, guest_colonia, guest_cp, guest_ciudad, guest_clave, guest_pais, guest_tel, guest_card_type, guest_card_titular, guest_card_num, guest_card_vigen) VALUES ($hosted, '$rnombre', '$rapellidos', '$rmail', '$rdomicilio', '$rcolonia', '$rcp', '$rciudad', '$laclave', '$rpais', '$rtel', 1, '$rcc_tit', '$rcc_num', '$rcc_vigen')";
//echo $query;
$result = pg_query($query) or die('Hubo un problema con los datos: ' . pg_last_error());

$query = "UPDATE hotelgv.hgv_rooms set room_disponible = false where room_id = $hab_asignada";

$result = pg_query($query) or die('Hubo un problema con el registro: ' . pg_last_error());

?>

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
						<li><a class="active" href="reservacion.html">Reservaciones</a></li>
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
						<h2>Reservación exitosa</h2>
						<span>
							<table style="width: 100%;margin-top: 50px;border-width: 1px;">
								<tr>
									<th colspan="7">Datos registrados</th>
								</tr>
								<tr>
									<th>Nombre</th>
									<th>Apellidos</th>
									<th>Ciudad</th>
									<th>País</th>
									<th>Llegada</th>
									<th>Salida</th>
									<th>Adultos</th>
									<th>Niños</th>
								</tr>
								<tr>
									<td><?php echo $rnombre; ?></td>
									<td><?php echo $rapellidos; ?></td>
									<td><?php echo $rciudad; ?></td>
									<td><?php echo $rpais; ?></td>
									<td><?php echo $chkin; ?></td>
									<td><?php echo $chkout; ?></td>
									<td><?php echo $adultos; ?></td>
									<td><?php echo $ninos; ?></td>
								</tr>
							</table>
							
								
						</span>
					</div>		




<?php
//FINAL
// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);
?>

					<!----- contact-grids ----->		
					<div class="contact-grids">

						<!----- contact-form ------>
						<div class="contact-form">

							
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