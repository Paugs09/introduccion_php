<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes</title>
</head>
<body>
    <h1>Variables y constantes</h1>
    <!--script php-->
    <?php
        /*1. La forma de representar las variables en php es anteponiendo el símbolo $ a la palabra que utilizaremos como variable. Ejemplo:$edad*/
        
        /*2. Debemos prestar atención a las mayúsculas y minúsculas, ya que php reconoce la diferencia entre las dos.  $valor es diferente de $VALOR*/
        
        
        /*3. ¿Para qué se utilizan las variables? Gracias a ellas podremos realizar operaciones aritméticas y operaciones con cadenas, etc.*/

        /*4. Las variables las utilizaremoss como y cuando queramos en una misma paǵina, ya que no existe limitación en cuanto a su uso.*/

        /*5. Hay que prestar atención a no provocar errores por utilizar como variables palabras reservadas por el lenguaje.  Ejemplo: $os se genera un error, porque es una variable predefinida.*/

        /*6. También se debe evitar el error de empezar una variable por un número.  Ejemplo:  $35var= 45 es un error*/

        /*En PHP no es necesario especificar el tipo de variable, pero sí debemos saber cuándo utilizar las comillas a la hora de definirla, ya que su uso indicaría que se está hablando de una cadena.  Ejemplo: $cuenta = 7, $nombre = "nestor"*/

        /*Podemos mostrar las variables en pantalla de varias maneras:  una de ellas puede ser usando la palabra echo(); otra puede ser mediante print(); */
    
        $a = 5;
        $b = "7";
        echo "<b><h1>";
        echo($a);
        echo "<br>";
        echo($b);
        echo "</b></h1>";

        //Constantes
        //La forma de definir una constante es mediante la función define.
        //Sintaxis: define("nombre_variable", "valor_variable")

        define("capital_colombia", "Bogota");
        define("habitantes", 7000000);
    ?>
</body>
</html>