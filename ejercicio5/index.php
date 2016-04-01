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
		<script type="text/javascript" src="jsAdivinaElNumero1.js"></script>
        <!--Final de Lógica-Programación -->
		

		</head>
	<body>
		<div class="CajaUno animated bounceInDown">
			
		
			<form id="FormIngreso">

				<input type="text"  placeholder="Ingrese número" id="numero">
				
				<br>
				<input type="text"  placeholder="intentos" readonly id="intentos">
			</form>
			
		</div>
		<div class="CajaUno animated bounceInLeft">
			
		<button style="height:5em;"  class="MiBotonUTN"  onclick="verificar()" >Verificar</button>
			
			<button  class="MiBotonUTN" onclick="comenzar()" >Comenzar</button>

		</div>

		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
			
	
				<h3>
					1.	Adivina el número (v 1.0):
					Al comenzar el juego generamos un número secreto del 1 al 100, en la pantalla del juego dispondremos de un cuadro de texto para ingresar un número y un botón “Verificar”, si el número ingresado es el mismo que el número secreto se dará por terminado el juego con un mensaje similar a este: 
					<br>“Usted es un ganador!!! y en solo X intentos”.
					de no ser igual se debe informar si 
					“falta…”  para llegar al número secreto  o si 
					“se pasó…”  del número secreto.


				</h3>
			
		</div>

		<div class="CajaAbajo animated bounceInUp">
			<a  class="MiBotonUTNLinea" onclick="location.href='index.html'" >Men&uacute; ejercicios</a>	
		</div>
	</body>
</html>