<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso Ingreso UTN FRA</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
			<!---<script type="text/javascript" src="jsFerretePinturas.js"></script>-->
        <!--Final de Lógica-Programación -->
		

		</head>
	<body>
		<div class="CajaUno animated bounceInDown">
			
		
			<form id="FormIngreso" action="./Conversion.php" method="post">

				<input type="text"  name="Temperatura" placeholder="Ingrese Temparatura" id="Temperatura">
				<input type="submit" class="MiBotonUTN" name="aCentigrados" value="A- de Farenheit a Centigrados" ></input>
				<input type="submit" class="MiBotonUTN" name="aFarenheit" value="B- de Centigrados a Farenheit"></input>
	
				<br>
				
			</form>
			
		</div>
		<div class="CajaUno animated bounceInLeft">
			
			
			<!---<button  class="MiBotonUTN" onclick="FahrenheitCentigrados()" >A- de Fahrenheit a Centígrados </button>
			<button  class="MiBotonUTN" onclick="CentigradosFahrenheit()" >B- de Centígrados a Fahrenheit</button>-->
			

		</div>

		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
			
	
				<h3>
					3.	Para el departamento de Pinturas:
						<br>A.	Al ingresar una temperatura en Fahrenheit debemos mostrar la temperatura en Centígrados con un mensaje concatenado (ej.: " 32 Fahrenheit son 0 centígrados").
						<br>B.	Al ingresar una temperatura en Centígrados debemos mostrar la temperatura en Fahrenheit (ej.: "0  centígrados son 32 Fahrenheit ").




				</h3>
			
		</div>

		<div class="CajaAbajo animated bounceInUp">
			<a  class="MiBotonUTNLinea" onclick="location.href='index.html'" >Men&uacute; ejercicios</a>	
		</div>
	</body>
</html>