<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Prácticas PHP</title>
	</head>
	<body>
		<?php
			/* Autor: Rubén Rey Feal
			2ºASIR - Implantación de Aplicaciones Web
			Curso 2024-2025 */
			
			//Ejercicio 1: Operadores aritméticos básicos
			echo "<b>Ejercicio 1: Operadores aritméticos básicos</b>";
			echo "<br>";
			$num1 = 7;
			$num2 = 4;
			echo "Suma: ".($num1+$num2);
			echo "<br>";
			echo "Resta: ".($num1-$num2);
			echo "<br>";
			echo "Multiplicación: ".($num1*$num2);
			echo "<br>";
			echo "División: ".($num1 / $num2);
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 2: Verificar si un número está en un rango
			echo "<b>Ejercicio 2: Verificar si un número está en un rango</b>";
			echo "<br>";
			$num = 15;
			if ($num >= 10 && $num <= 20) {
				echo "Está entre 10 y 20";
			} 
			else {
				echo "No Está entre 10 y 20";
			}
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 3: Bucle for
			echo "<b>Ejercicio 3: Bucle for</b>";
			echo "<br>";
			for ($i = 1; $i <= 10; $i++) {
				echo $i;
				echo "<br>";
			}
			echo "<br>";
			
			
			//Ejercicio 4: Bucle foreach
			echo "<b>Ejercicio 4: Bucle foreach</b>";
			echo "<br>";
			$nombres = ["Alex", "Pedro", "Santi", "Sergio"];
			foreach ($nombres as $nombre) {
				echo "Hola $nombre";
				echo "<br>";
			}
			echo "<br>";
			
			//Ejercicio 5: Bucle while
			echo "<b>Ejercicio 5: Bucle while</b>";
			echo "<br>";
			$contador = 1;
			while ($contador <= 5) {
				echo $contador;
				echo "<br>";
				$contador++;
			}
			echo "<br>";
			
			//Ejercicio 6: if, elseif y else
			echo "<b>Ejercicio 6: if, elseif y else</b>";
			echo "<br>";
			$num = -33;
			if ($num > 0) {
				echo "El número es positivo";
			} 
			elseif ($num < 0) {
				echo "El número es negativo";
			} 
			else {
				echo "El número es igual a cero";
			}
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 7: switch
			echo "<b>Ejercicio 7: switch</b>";
			echo "<br>";
			$num1 = 10;
			$num2 = 3;
			$operador = "+";
			switch ($operador) {
				case "+":
					echo "Resultado: ".($num1+$num2);
					break;
				case "-":
					echo "Resultado: ".($num1-$num2);
					break;
				case "*":
					echo "Resultado: ".($num1*$num2);
					break;
				case "/":
					echo "Resultado: ".($num1/$num2);
					break;
				default:
					echo "Operación no válida";
			}
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 8: Promedio de tres números
			echo "<b>Ejercicio 8: Promedio de tres números</b>";
			echo "<br>";
			$nota1 = 8;
			$nota2 = 8;
			$nota3 = 6.5;
			$promedio = ($nota1+$nota2+$nota3)/3;
			if ($promedio >= 5){
				echo "Aprobado";
			} 
			else {
				echo "Reprobado";
			}
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 9: Números pares con for
			echo "<b>Ejercicio 9: Números pares con for</b>";
			echo "<br>";
			for ($i = 1; $i <= 10; $i++) {
				if ($i % 2 == 0) {
					echo $i;
					echo "<br>";
				}
			}
			echo "<br>";
			
			//Ejercicio 10: Filtrar mayores de edad
			echo "<b>Ejercicio 10: Filtrar mayores de edad</b>";
			echo "<br>";		
			$edades = [13, 32, 1, 50, 18, 26];
			foreach ($edades as $edad) {
				if ($edad > 18) {
					echo "+18: $edad";
					echo "<br>";
				}
			}
			echo "<br>";
		?>
	</body>
</html>