<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <?php
        $a = 5;
        $b = 2;
        echo "<h1>if</h1>";
        //La estructura de control if permite la ejecución condicional de fragmentos de código. Las sentencias if se pueden incluir unas dentro de otras indefinidamente.
        //Ejemplo:
        if ($a > $b) {
            echo "$a es mayor que $b";
        }
        echo "<br>";

        //Ejemplos profe:
        
        //1:
        $color="rojo";
        if($color="rojo"){
            print("Efectivamente, el color es rojo");
        }
        echo "<br>";



        echo "<h1>elseif</h1>";
        //Es una combinación entre if y else. Se ejecuta cuando if es false, pero sólo si la expresión condicional del elseif es true. Puede haber varios elseif dentro de una sentencia if (aunque en ese caso suele ser más recomendable usar switch). No hay diferencias de comportamiento entre elseif y else if si se usan entre llaves. elseif sólo se ejecuta si el if precedente o cualquier elseif anterior son evaluadas como false.
        //Ejemplo:
        if ($a > $b) {
            echo "$a es mayor que $b";
        } elseif ($a == $b) {
            echo "$a es igual que $b";
        } else {
            echo "$b es mayor que $a";
        }
        echo "<br>";

        //Ejemplos profe:
        //1:
        $x = 10;
        $y = 15;
        if($x == $y)
        {
            print("x e y son iguales");
        }
        elseif($x > $y)
        {
            print("x es mayor que y");
        }
        elseif($x < $y)
        {
            print("x es menor que y");
        }


        echo "<h1>while</h1>";
        //Se ejecutan las sentencias dentro del while siempre y cuando se evalúen como true. El valor de la expresión se comprueba cada vez al inicio del loop, y la ejecución no se detendrá hasta que finalice la iteración (cada vez que PHP ejecuta las sentencias en un loop es una iteración). Si la expresión while se evalúa como false, las sentencias no se ejecutarán ni siquiera una vez.También es posible agrupar varias instrucciones while dentro de una.
        //Ejemplo:
        $i = 1;
        while($i <= 10){
            echo $i;
            $i++;
        }
        echo "<br>";

        //Ejemplos profe:
        //1:
        $x = 10;
        while(--$x)
        {
            echo "<big>";
            echo "<b>";
            print("Número: " .$x);
            echo "<br>";
            echo "<hr>";
        }


        echo "<h1>do-while</h1>";
        //Muy similares a los loops while, simplemente aquí la expresión para el loop se verifica al final en lugar de al principio, esto garantiza que el código se ejecute por lo menos la primera vez.
        //Ejemplo:
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);
        echo "<br>";



        echo "<h1>for</h1>";
        //Permite repetir una instrucción o una instrucción compuesta un número especificado de veces. El cuerpo de una instrucción for se ejecuta cero o más veces hasta que una condición opcional sea false.
        //Ejemplo:
        for($i = 1; $i <= 10; $i++) {
            echo $i;
        }
        echo "<br>";

        //Ejemplos profe:
        //1: 
        for($x=5; $x<=10; $x++)
        {
            print("Número: ".$x."<br>");
        }



        echo "<h1>require</h1>";
        //require es idéntico a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia (E_WARNING) lo cual permite continuar el script.
        //Ejemplo:
        // Función saludar 
        function saludar($nombre, $mensaje) { 
            return "{$nombre}, {$mensaje}!";
        } 
        // Incluimos el fichero saludar.php
            require'saludar.php';
        // Impriminos el saludo a travez de una función que esta dentro del fichero saludar
        
        echo saludar('Paula Gómez', '¡Bienvenida!');
        echo "<br>";



        echo "<h1>include</h1>";
        //Te permite incluir el contenido de un archivo externo dentro de otro archivo. De esta forma, puedes separar tu código en diferentes archivos y luego combinarlos según tus necesidades.
        //Ejemplo:
        // archivo1.php
        $color = 'azul';
        // archivo2.php
        echo $color; // Devuelve un Notice: Undefined variable: color
        include 'archivo1.php';
        echo $color; // Devuelve azul
        echo "<br>";

        //Ejemplo profe:
        include ("variables.php");
        echo "<br>";
        print("$x"."$z"."$y");



        echo "<h1>switch</h1>";
        //switch es como una serie de sentencias if. Es útil para comparar una misma variable o expresión con valores direrentes y ejecutar un código diferente a otro dependiendo de esos valores.
        //Ejemplo:
        $i = 0;
        switch ($i) {
            case 0:
                echo "i es igual a 0";
            case 1:
                echo "i es igual a 1";
            case 2:
                echo "i es igual a 2";
        }
        print($i);
        echo "<br>";

        //Ejemplos profe:
        switch($color)
        {
            case "blanco":
                $sector = "claro";
                break;
            case "naranja":
                $sector = "normal";
                break;
            case "negro":
                $sector = "oscuro";
                break;
        }
        print($sector);
    ?>
</body>
</html>