<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title> ejercicio 4</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div class="problema">
	<h1>Ejercicio #4</h1>
	<p>	

		4. desarrolle un script que de acuerdo al día de la semana publique una oferta
		diferente de acuerdo a la siguiente información.
		a. lunes 25% de descuento en la compra total.
		b. martes 10% en compras al crédito.
		c. miércoles y viernes 20% de descuento solo de contado.
		d. domingo 50% de descuento si lleva un producto marcado como especial.
		e. los demás días son normales y no hay ofertas.

	
	</p>
	</div>

	<div class="solucion">
	<?php
		$dia = 'Lunes';
		switch ($dia) {
			case 'Lunes':
			echo 'Este dia lunes le tenemos el 25% de descuento en compra total.';
			break;

			case 'Martes':
			echo 'Este dia Martes le tenemos el 10% de descuento en compras al credito.';
			break;
						
			case 'Miercoles';
			echo 'Este dia Miercoles le tenemos el 20% de descuento solo de contado.';
			break;
						
			case 'Viernes':
			echo 'Este dia Viernes le tenemos el 20% de descuento solo de contado.';
			break;
						
			case 'Domingo';
			echo 'Este dia Domingo le tenemos el 50% de descuento si lleva un producto marcado como especial.';

			default:
			echo 'no hay oferta.';
			break;	
			}

		?>
		</div>
		<footer class="alumno">
		<p>Nelson Eduardo Rodriguez Lobos SIS 21B </p>
	</footer>
</body>
</html>