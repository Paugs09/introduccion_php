<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php
    echo "<h1>Operadores aritméticos</h1>";
    //Operadores aritméticos
    $a = 9;
    $b = 2;

    //+$a	Identidad-Conversión de $a a int o float según el caso. 
    echo (+$a);
    echo "<br>";

    //-$a	Negación-Opuesto de $a.
    echo (-$a);
    echo "<br>";

    //$a + $b	Adición-Suma de $a y $b.
    echo ($a + $b);
    echo "<br>";

    //$a - $b	Sustracción-Diferencia de $a y $b.
    echo ($a - $b);
    echo "<br>";

    //$a * $b	Multiplicación-Producto de $a y $b.
    echo ($a * $b);
    echo "<br>";

    //$a / $b	División-Cociente de $a y $b.
    echo ($a / $b);
    echo "<br>";

    //$a % $b	Módulo-Resto de $a dividido por $b.
    echo ($a % $b);
    echo "<br>";

    //$a ** $b	Exponenciación-Resultado de elevar $a a la potencia $bésima. 
    echo ($a ** $b);
    echo "<br>";

    //Decremento
    
    //Ejemplos profe:
    $x = 9;
    echo ("x = ".$x. "<br>");
    $y = 3;
    echo ("y = ".$y. "<br>");
    $z = 5;
    echo ("z = ".$z. "<br>");
    $suma = $x + $y;
    echo ("suma = ".$suma. "<br>");
    $resta = $x -$z;
    echo ("resta = ".$resta. "<br>");
    $multiplicacion = $suma*$resta;
    echo ("multiplicacion = ".$multiplicacion. "<br>");
    $final = $multiplicacion++;
    echo ("final= ".$final. "<br>");
    echo $multiplicacion;
    echo ("multiplicacion = ".$multiplicacion. "<br>");


    //Operadores de comparación
    echo "<h1>Operadores de comparación</h1>";
    //1. Mayor qué (>). Ejemplo:
    $valor1 = 19;
	$valor2 = 6;

	if ($valor1 > $valor2) {
		echo "El valor 1 es mayor que el valor 2.";
	}
    echo "<br>";

    //2. Menor qué (<). Ejemplo:
    $valor1 = 10;
	$valor2 = 37;

	if ($valor1 < $valor2) {
		echo "El valor 1 es menor que el valor 2.";
	}
    echo "<br>";

    //3. Mayor o igual qué (>=). Ejemplo:
    $valor1 = 10;
	$valor2 = 10;

	if ($valor1 >= $valor2) {
		echo "El valor 1 es mayor o igual que el valor 2.";
	}
    echo "<br>";

    //4. menor o igual qué (<=)- Ejemplo:
    $valor1 = 10;
	$valor2 = 10;

	if ($valor1 <= $valor2) {
		echo "El valor 1 es menor o igual que el valor 2.";
	}
    echo "<br>";

    //5. El operador igual (==). Ejemplo:
    $valor1 = 10;
	$valor2 = 10;

	if ($valor1 == $valor2) {
		echo "Los valores son iguales.";
	}
    echo "<br>";

    //6. El operador diferente (!=). Ejemplo:
    $valor1 = 18;
	$valor2 = 30;

	if ($valor1 != $valor2) {
		echo "Los valores son diferentes.";
	}
    echo "<br>";

    //7. El operador idéntico (===). Ejemplo:
    $valor1 = 9;
	$valor2 = "9";

	if ($valor1 === $valor2) {
		echo "Los valores son iguales.";
	}
    echo "<br>";

    //8. El operador de comparación no idéntico (!==). Ejemplo:
    $valor1 = 10;
	$valor2 = "10";

	if ($valor1 !== $valor2) {
		echo "Los valores no son idénticos.";
	} 
    echo "<br>";

    //Ejemplos profe:
    $x = 5;
    $y = 4;
    echo ($x == $y);
    echo ($x <= $y);



    //Operadores lógicos
    echo "<h1>Operadores lógicos</h1>";

    //1. Operador "and" (&&): Retorna true si ambas expresiones son verdaderas. Ejemplo:
    $edad = 22; $ciudad = "Bucaramanga"; 
    if ($edad > 18 && $ciudad == "Bucaramanga") { echo "Eres mayor de edad y vives en Bucaramanga"; }
    echo "<br>";

    //2. Operador "or" (||): Retorna true si al menos una de las expresiones es verdadera. Ejemplo:
    $color = "lila"; $talla = "M"; if ($color == "lila" || $talla == "M") { echo "El color es lila o la talla es M"; }

    //3. Operador "not" (!): Retorna true si la expresión es falsa. Ejemplo:
    $activo = true; if (!$activo) { echo "El usuario está inactivo"; }
    echo "<br>";

    //4. Operador "xor": Retorna true si una y solo una de las expresiones es verdadera. Ejemplo:
    $nota = 30; $asistencia = 50; if ($nota >= 70 xor $asistencia >= 45) { echo "Aprobado por calificación o por asistencia"; }
    echo "<br>";
   
    //Ejemplos profe:
    $x = 4;
    $y = 5;
    if(($x==4) && ($y==5))
    {
        print("Estás en lo correcto");
    }
    echo"<br>";

    if(($x==4) or ($y==3))
    {
        print("La segunda operación también es correcta");
    }
    echo"<br>";


    //Operadores de unión (concatenación) de cadenas
    echo "<h1>Operadores de unión de cadenas</h1>";


    //1. El operador de concatenación ( .): Este operador se utiliza para unir dos cadenas en una sola. Ejemplo:
    $cadena1 = "Sis "; $cadena2 = "Néstor"; $cadenaFinal = $cadena1 . $cadena2; echo $cadenaFinal; // Imprime "Sis Néstor"
    echo "<br>";

    //2. El operador de concatenación en reparar (`.=): Este operador se utiliza para unir una cadena con otra y asignar el resultado a la primera cadena. Ejemplo:
    $cadena1 = "Colegio "; $cadena2 = "Guanentá"; $cadena1 .= $cadena2; echo $cadena1; // Imprime "Colegio Guanentá"
    echo "<br>";

    //Ejemplos profe:
    $t = "Ejemplo";
    $w = 'unión';
    $x = "de";
    $y = "cadenas";
    $z = ' ';
    $resultado1 = $t;
    $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
    echo '<b><h1>';
    echo $resultado1;
    echo '<hr>';
    echo $resultado2;
    echo '</b></h1>';
   
   ?>
</body>
</html>