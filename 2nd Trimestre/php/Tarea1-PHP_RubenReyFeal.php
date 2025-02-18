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
			
			//Ejercicio 1: Declarar variables y tipos de datos básicos
			echo "<b>Ejercicio 1: Declarar variables y tipos de datos básicos</b>";
			echo "<br>";
			$edad=20; //variable entero
			$num_fav=4.44; //variable flotante
			$nombre="Rubén"; //variable cadena
			$mayorEdad=true; // variable booleano
			
			echo "Mi edad es: " .$edad;
			echo "<br>";
			echo "Mi numero favorito con decimales es: " .$num_fav;
			echo "<br>";
			echo "Mi nombre es: " .$nombre;
			echo "<br>";
			echo "soy mayor de edad? " .$mayorEdad ." o ";
			echo json_encode($mayorEdad);
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 2: Trabajando con constantes
			echo "<b>Ejercicio 2: Trabajando con constantes</b>";
			echo "<br>";
			$radio=5;
			const PI = 3.141592;
			echo PI;
			echo "<br>";
			echo "El area de un círculo se calcula con A=πr²";
			echo "<br>";
			echo "El area es: " .PI*($radio*$radio);
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 3: Concatenar cadenas
			echo "<b>Ejercicio 3: Concatenar cadenas</b>";
			echo "<br>";
			$cad1="Rubén"; //variable cadena 1
			$cad2="Rey Feal"; //variable cadena 2
			$frase_cad= "Mi nombre es " .$cad1 ." y mis apellidos son " .$cad2; //frase con concat
			echo $frase_cad;
			echo "<br>";
			echo "<br>";
			
			
			//Ejercicio 4: Operaciones aritméticas
			echo "<b>Ejercicio 4: Operaciones aritméticas</b>";
			echo "<br>";
			$num1=5; //variable entera 1
			$num2=6; //variable entera 2
			$suma=$num1+$num2;
			echo $suma;
			echo "<br>";
			$resta=$num2-$num1;
			echo $resta;
			echo "<br>";
			$multiplicacion=$num1*$num2;
			echo $multiplicacion;
			echo "<br>";
			$division=$num1/$num2;
			echo $division;
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 5: Arrays básicos
			echo "<b>Ejercicio 5: Arrays básicos</b>";
			echo "<br>";
			$frutas=array("pera","manzana","platano");
			echo $frutas[0];
			echo "<br>";
			echo $frutas[1];
			echo "<br>";
			echo $frutas[2];
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 6: Arrays asociativos
			echo "<b>Ejercicio 6: Arrays asociativos</b>";
			echo "<br>";
			$datosArray=array("nombre"=>"ruben", "edad"=>"20", "ciudad"=>"naron");
			echo "Mi nombre es: " .$datosArray["nombre"];
			echo "<br/>";
			echo "Tengo: " .$datosArray["edad"] ." años";
			echo "<br/>";
			echo "Vivo en: " .$datosArray["ciudad"];
			echo "<br/>";
			echo "<br/>";
			
			//Ejercicio 7: Comparaciones booleanas
			echo "<b>Ejercicio 7: Comparaciones booleanas</b>";
			echo "<br>";
			$num3=3;
			$num4=4;
			if($num3==$num4){
				echo "Num 3 y Num 4 son iguales";
			}
			echo "<br>";
			if($num3!=$num4){
				echo "Num 3 y Num 4 son distintos";
			}
			echo "<br>";
			if($num3>$num4){
				echo "Num 3 es mayor que Num 4";
			}
			echo "<br>";
			if($num3<$num4){
				echo "Num 3 es menor que Num 4";
			}
			echo "<br>";
			echo "<br>";
			
			//Ejercicio 8: Bucles con arrays
			echo "<b>Ejercicio 8: Bucles con arrays</b>";
			echo "<br>";
			$numerooss=array(11,22,33,44,55);
			foreach ($numerooss as $numeroos) {
				echo $numeroos."\n";
				echo "<br/>";
			}
			echo "<br/>";
			
			//Ejercicio 9: Objetos básicos
			echo "<b>Ejercicio 9: Objetos básicos</b>";
			echo "<br>";
			class Persona {
				public $nombree;
				public $edaad;
			}
			
			$persona = new Persona();
			$persona->nombree = "Rubén";
			$persona->edaad = 20;
			
			echo "Mi nombre es: " .$persona->nombree;
			echo "<br/>";
			echo "Tengo: " .$persona->edaad ." años";
			echo "<br/>";
			echo "<br/>";
		?>
	</body>
</html>