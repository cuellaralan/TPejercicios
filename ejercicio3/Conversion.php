<!DOCTYPE html>
<html>
<head>
	<title>Realizando Conversion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/animacion.css">
</head>
	<body>


	<div class="CajaUno animated bounceInRight">
		<form id="Conversion">
			<?php 

				if (isset($_POST['aCentigrados'])) 
				{
					$farenheit=$_POST['Temperatura'];

					$centigrados = ($farenheit-32)/1.8;

					echo "<br>";
					echo "$farenheit"."grados farenheit son: ";
					echo "<H1>"."$centigrados"."grados centigrados"."<H1>";
				}

				if (isset($_POST['aFarenheit'])) 
				{
					$centigrados=$_POST['Temperatura'];

					$farenheit= ($centigrados*1.8)+32;
					echo "<br>";
					echo "$centigrados"."grados centigrados son: ";
					echo "<H1>"."$farenheit"."grados farenheit"."<H1>";
				}


		 	?>	


		</form>
	</div>

	</body>
</html>