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
			
			//Ejercicio 1:  Función para saludar
			echo "<b>Ejercicio 1:  Función para saludar</b>";
			echo "<br>";
			function saludar($num1){
				return $num1;
			}
			$hola="Hola Rubén";
			$resultado=saludar($hola);
			echo $resultado;
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 2: Función para calcular el doble de un número
			echo "<b>Ejercicio 2: Función para calcular el doble de un número</b>";
			echo "<br>";
			function doble($num1){
				return $num1*2;
			}
			$valor1=4;
			$resultado1=doble($valor1);
			echo $resultado1;
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 3: Función con un valor por defecto
			echo "<b>Ejercicio 3: Función con un valor por defecto</b>";
			echo "<br>";
			function saludarConDefecto($num1,$num2="Hola"){
				return $num2 ." " .$num1;
			}
			$valor2="Rubén";
			$resultado2=saludarConDefecto($valor2);
			echo $resultado2;
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 4: Diferencia entre pasar parámetros por valor y por referencia
			echo "<b>Ejercicio 4: Diferencia entre pasar parámetros por valor y por referencia</b>";
			echo "<br>";
			function sumar($num1){
				return $num1+1;
			}
			function sumar2(&$num1){
				$num1 = $num1+1;
				return $num1+1;
			}
			$valor3=4;
			echo"Por valor";
			echo "<br>";
			$resultado3=sumar($valor3);
			echo $resultado3;
			echo "<br>";
			echo "El valor actual de valor 1 es: $valor3";
			echo "<br>";
			echo "<br>";
			echo "Por referencia";
			echo "<br>";
			$resultado4=sumar2($valor3);
			echo $resultado4;
			echo "<br>";
			echo "El valor actual de valor 1 es: $valor3";
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 5: Función recursiva para calcular el factorial
			echo "<b>Ejercicio 5: Función recursiva para calcular el factorial</b>";
			echo "<br>";
			function factorial($n) {
				$resultado = 1;
				for ($i = 1; $i <= $n; $i++) {
				$resultado *= $i;
			}
			return $resultado;
			}
			echo factorial(5);
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 6: Comparar arrays
			echo "<b>Ejercicio 6: Comparar arrays</b>";
			echo "<br>";
			$array1 = [1, 2, 3, 4, 5];
			$array2 = [3, 4, 6];
			$diferencia = array_diff($array1, $array2);
			print_r($diferencia);
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 7: Unir arrays
			echo "<b>Ejercicio 7: Unir arrays</b>";
			echo "<br>";
			$unido = array_merge($array1, $array2);
			print_r($unido);
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 8: Ordenar arrays
			echo "<b>Ejercicio 8: Ordenar arrays</b>";
			echo "<br>";
			$arrayDesordenado = [5, 2, 8, 1, 4];
			sort($arrayDesordenado);
			print_r($arrayDesordenado);
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 9: Barajar arrays
			echo "<b>Ejercicio 9: Barajar arrays</b>";
			echo "<br>";
			$arrayLetras = ['A', 'B', 'C', 'D', 'E'];
			shuffle($arrayLetras);
			print_r($arrayLetras);
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 10: Contar elementos de un array
			echo "<b>Ejercicio 10: Contar elementos de un array</b>";
			echo "<br>";
			$arrayLetras2 = ['A', 'B', 'C', 'D', 'E'];
			echo "Letras: " . count($arrayLetras2);
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 11: Obtener la fecha actual
			echo "<b>Ejercicio 11: Obtener la fecha actual</b>";
			echo "<br>";
			echo "Fecha actual: " . date("d-m-Y");
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 12: Obtener detalles de la fecha
			echo "<b>Ejercicio 12: Obtener detalles de la fecha</b>";
			echo "<br>";
			$fechaDetalles = getdate();
			echo "Año: " . $fechaDetalles['year'];
			echo "<br>";
			echo "Mes: " . $fechaDetalles['mon'];
			echo "<br>";
			echo "Día: " . $fechaDetalles['mday'];
			echo "<br>";
			echo "<br>";
		?>
	</body>
</html>