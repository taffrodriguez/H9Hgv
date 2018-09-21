<!--
Author: Helenik9
HOTEL GV
-->
<!DOCTYPE html>
<html>
<head>
<title>HOTEL GV | Habitaciones :: helenik9</title>
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
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">
<script src="js/jquery.lightbox.js"></script>
<script src="js/indexjss.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
</head>

<body>

<?php
	// Conectando y seleccionado la base de datos  
	//$dbconn = pg_connect("host=localhost dbname=DB_TRIP user=postgres password=Cronopio2625")
	    //or die('No se ha podido conectar: ' . pg_last_error());

	$chkin = $_POST["check_in"];
	$chkout = $_POST["check_out"];
	$adultos = $_POST["adult"];
	$ninos = $_POST["nin"];
?>	

	<!-- header-section-starts -->
	<div class="header">
		

	<!-- header-section-ends -->
	<div class="about-content">
		<div class="container">
			<div class="contact-form">
			<div class="product-section">
				<div class="product-section-top">
					<h3>Sugerencias encontradas</h3>
	               <div class="specials">
					<div class="specials-grids">

						<div class="col-md-4 special-grid">
						  <div class="gallery">
							 <a href="images/single.jpg"><img src="images/single.jpg" title="image-name">
							 <div class="zoom-icon">
							  <i class="zi"></i>
							 </div>
							 </a>
						  </div>

						  <form id="form2" name="form2" method="post" action="javascript:fn_llamada('#form2','reservahora.php', '#reservar');" >

						  	<input type="hidden" name="check_in" class="text" value= ' <?php echo "$chkin"; ?> '>
						  	<input type="hidden" name="check_out" class="text" value= ' <?php echo "$chkout"; ?> '>
						  	<input type="hidden" name="adult" class="text" value= ' <?php echo "$adultos"; ?> '>
						  	<input type="hidden" name="nin" class="text" value= ' <?php echo "$ninos"; ?> '>

							<h4>sencilla</h4>
							<p>Sencillez que le otorgan comodidad y sólo lo que usted necesita. Agradable para descansar, cuenta con una cama doble, aire acondicionado, tv por cable, internet y línea telefónica.</p>

							<p>
								2 personas
							</p>
							<p>
								<a href="">Ver detalles de la habitación</a>
							</p>
							 <a class="btn btn-1 btn-2c more" >MXN 1,150</a>
							 <input type="submit" value="Reservar">
						</div>
				
					
						<div class="col-md-4 special-grid">
						  <div class="gallery">
							 <a href="images/ejec.jpg"><img src="images/ejec.jpg" title="image-name">
							 <div class="zoom-icon">
							  <i class="zi"></i>
							 </div>
							 </a>
						  </div>
							<h4>ejecutiva</h4>
							<p>Modernidad y sencillez que le otorgan comodidad y sólo lo que usted necesita. Agradable para descansar, cuenta lo mismo que la habitación sencilla, así como escritorio de trabajo.</p>
							<!-- <a class="btn btn-1 btn-1c more" href="#">Read More</a> -->
							<p>
								2 personas
							</p>
							<p>
								<a href="">Ver detalles de la habitación</a>
							</p>
							 <a class="btn btn-1 btn-2c more" >MXN 1,350</a>
							<input type="submit" value="Reservar">

						</div>



						<div class="col-md-4 special-grid">
						  <div class="gallery">
							 <a href="images/suite.jpg"><img src="images/suite.jpg" title="image-name">
							 <div class="zoom-icon">
							  <i class="zi"></i>
							 </div>
							 </a>
						  </div>
							<h4>suite</h4>
							<p>La habitación de lujo y confort para una máxima experiencia en descanso cuenta con todos los servicios, así como espacios cálidos para un gran descanso.</p>
							<!-- <a class="btn btn-1 btn-1c more" href="#">Read More</a> -->
							<p>
								2 personas
							</p>
							<p>
								<a href="">Ver detalles de la habitación</a>
							</p>
							 <a class="btn btn-1 btn-2c more" >MXN 3,150</a>
							 <input type="submit" value="Reservar">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				</div>
			</div>
			</div></div></form>

			<div class="clearfix"> </div>
			<div id="reservar"> </div>

</body>
</html>