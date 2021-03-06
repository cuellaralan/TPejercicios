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
		<script type="text/javascript" src="jsRisingBTL.js"></script>
        <!--Final de Lógica-Programación -->
		

		</head>
	<body>
		<div class="CajaUno animated bounceInDown">
			
		
			<form id="FormIngreso">

				<input type="text" readonly placeholder="Edad validada" id="Edad">
				<input type="text" readonly placeholder="Sexo validado" id="Sexo">
				<input type="text" readonly placeholder="Estado civil validado" id="EstadoCivil">
				<input type="text" readonly placeholder="Sueldo bruto validado" id="Sueldo">
				<input type="text"  readonly placeholder="Lejago validado" id="Legajo">
				<input type="text"  readonly placeholder="Nacionalida validada" id="Nacionalidad">


				
			</form>
			
		</div>
		<div class="CajaUno animated bounceInLeft">
			
			
			<button   class="MiBotonUTN" onclick="ComenzarIngreso()" >Comenzar ingreso</button>
			

		</div>

		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
			
	
				<h3>
				  Rising BTL. Empresa dedicada a la toma de datos para realizar estadísticas y censos nos pide realizar una carga de datos validada e ingresada por ventanas emergentes solamente (para evitar hacking y cargas maliciosas) y luego asignarla a cuadros de textos. 
					12.   Los datos requeridos son los siguientes:
					<br>A.	Edad, entre 18 y 90 años inclusive.
					<br>B.	Sexo, “M” para masculino y “F” para femenino
					<br>C.	Estado civil, 1-para soltero, 2-para casados, 3-para divorciados y 4-para viudos
					<br>D.	Sueldo bruto, no menor a 8000.
					<br>E.	Número de legajo, numérico de 4 cifras, sin ceros a la izquierda.
					<br>F.	Nacionalidad, “A” para argentinos, “E” para extranjeros, “N” para nacionalizados.

				</h3>
			
		</div>

		<div class="CajaAbajo animated bounceInUp">
			<a  class="MiBotonUTNLinea" style="margin-top: 0%;" onclick="location.href='index.html'" >Men&uacute; ejercicios</a>	
		</div>
	</body>
</html>