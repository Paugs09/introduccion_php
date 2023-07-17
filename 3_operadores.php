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
    
    //Operadores de comparación
    //1. Mayor qué (>). Ejemplo:
    $valor1 = 19;
	$valor2 = 6;

	if ($valor1 > $valor2) {
		echo "El valor 1 es mayor que el valor 2.";
	}

    //2. Menor qué (<). Ejemplo:
    $valor1 = 10;
	$valor2 = 37;

	if ($valor1 < $valor2) {
		echo "El valor 1 es menor que el valor 2.";
	}

    //3. Mayor o igual qué (>=). Ejemplo:
    $valor1 = 10;
	$valor2 = 10;

	if ($valor1 >= $valor2) {
		echo "El valor 1 es mayor o igual que el valor 2.";
	}

    //4. menor o igual qué (<=)- Ejemplo:
    $valor1 = 10;
	$valor2 = 10;

	if ($valor1 <= $valor2) {
		echo "El valor 1 es menor o igual que el valor 2.";
	}

    //5. El operador igual (==). Ejemplo:
    $valor1 = 10;
	$valor2 = 10;

	if ($valor1 == $valor2) {
		echo "Los valores son iguales.";
	}

    //6. El operador diferente (!=). Ejemplo:
    $valor1 = 18;
	$valor2 = 30;

	if ($valor1 != $valor2) {
		echo "Los valores son diferentes.";
	}

    //7. El operador idéntico. Ejemplo:
    $valor1 = 9;
	$valor2 = "9";

	if ($valor1 == $valor2) {
		echo "Los valores son iguales.";
	}

    //8. El operador de comparación no idéntico (!==). Ejemplo:
    $valor1 = 10;
	$valor2 = "10";

	if ($valor1 !== $valor2) {
		echo "Los valores no son idénticos.";
	} 




    //Operadores lógicos

    //Operadores de unión de cadenas

    ?>
</body>
</html>