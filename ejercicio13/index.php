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
		<script type="text/javascript" src="jsFonteCristo.js"></script>
        <!--Final de Lógica-Programación -->
		

		</head>
	<body>
		<div class="CajaUno animated bounceInDown">
			
		
			<form id="FormIngreso">

				<input type="text" placeholder="Ingrese número positivo" id="numero">


				
			</form>
			
		</div>
		<div class="CajaUno animated bounceInLeft">
			
			
			<button   class="MiBotonUTN" onclick="NumerosPares()" >a-N&uacute;meros Pares</button>
			<button   class="MiBotonUTN" onclick="NumerosPares()" >b-N&uacute;meros Impares</button>
			<button   class="MiBotonUTN" onclick="NumerosDivisibles()" >c-N&uacute;meros Divisibles</button>
			<button   class="MiBotonUTN" onclick="VerificarPrimo()" >d-Verificar si es primo</button>
			<button   class="MiBotonUTN" onclick="NumerosPrimos()" >e-N&uacute;meros Primos</button>

		</div>

		<div class="CajaEnunciado animated bounceInLeft">
			<h2>Enunciado:</h2>
			
	
				<h3>
				  El departamento de NUMEROS ESPECIALES  del instituto matemático  FonteCristo  nos está pidiendo una aplicación que verifique las distintas cualidades de los números.

					<br>13.	Para cada una de estas acciones  debemos realizar la lógica para verificar las cualidades pedidas:
					<br>a.	Se pedirán un número positivo y se mostrará la cantidad de números pares desde el número ingresado hasta el cero.
					<br>b.	Se pedirán un número positivo y se mostrará la cantidad de números pares desde el número ingresado hasta el cero.
					<br>c.	 Se pedirán un número positivo y se mostrará la cantidad de números divisibles de este número que se encuentran desde el 1 al 100.
					<br>d.	Se pedirán un número positivo y se mostrará si el número es un número primo o no.
					<br>e.	Se pedirán un número positivo y se mostrará la cantidad de números Primos desde el número ingresado hasta el cero.


				</h3>
			
		</div>

		<div class="CajaAbajo animated bounceInUp">
			<a  class="MiBotonUTNLinea" style="margin-top: 55%;" onclick="location.href='index.html'" >Men&uacute; ejercicios</a>	
		</div>
	</body>
</html>