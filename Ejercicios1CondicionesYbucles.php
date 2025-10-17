<!DOCTYPE html>
<html>
        <head>
            <title>Ejercicios unidades 2 y 3</title>
        </head>
        <body>
            <h2>
                1.Declara una variable de cada tipo (int, double, string y boolean) e imprime por pantalla sus valores y sus tipos (utiliza la 
                función gettype para ello). Que salga en un formato HTML correcto y legible por personas, algo como "La variable es de tipo 
                integer y tiene valor 5".
            </h2>

            <?php            
                $entero = 5;
                $decimal = 2.5;
                $texto = "Hola Mundo";
                $cierto = TRUE;
                echo "Variable: entero     tipo: ".gettype($entero)."    valor: $entero <br>";
                echo "Variable: decimal     tipo: ".gettype($decimal)."    valor: $decimal <br>";
                echo "Variable: texto     tipo: ".gettype($texto)."    valor: $texto <br>";
                echo "Variable: cierto     tipo: ".gettype($cierto)."    valor: $cierto <br>";
            ?>

            <h2>2.Declara dos variables numéricas (a y b), imprime por pantalla el módulo (a mod b) y la potencia (a elevado a b, ab).</h2>

            <?php            
                $a = 2;
                $b = 2;
                echo "El resto de $a/$b es: ".$a%$b."<br>"; 
                echo "El resultado de $a elevado a $b es: ".$a**$b;             
            ?>

            <h2>
                3.Declara tres variables: nombre, apellidos y nacimiento. Asígnales tus datos e imprímelas por pantalla dentro de una tabla, con 
                bordes, de manera que el resultado sea parecido a esto:
            </h2>

            <?php
                $nombre = "Daniel";
                $apellido = "Esteban Medina";
                $nacimiento = 2004;
                echo "<table border = 1>
                <tr>
                    <td>Nombre</td>
                    <td>$nombre</td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td>$apellido</td>
                </tr>
                <tr>
                    <td>Año de nacimiento</td>
                    <td>$nacimiento</td>
                </tr>
                </table>"
            ?>

            <h2>
                4.Define una variable llamada edad. Mostrar la edad actual, mostrar la edad que tendrá dentro de 10 años y los años que le quedan 
                para jubilarse (suponiendo que la edad de jubilación es 60). Por ejemplo, si edad=39, muestra un mensaje “Actualmente tienes 39 años, 
                dentro de diez tendrás 49. Te quedan 21 para jubilarte”.
            </h2>

            <?php
                $edad = 21;
                echo "Actulmente tienes $edad, dentro de diez tendras ".($edad+10).".Te quedan ".(60-$edad)." para jubilarte"
            ?>

            <h2>
                5.A partir de un precio contenido en la variable precio, muestra el mensaje “caro” si es mayor o igual a 1000, “medio” si el precio está 
                entre 100 y 1000, “barato” si es menor o igual a 100, y “precio negativo” si es negativo.
            </h2>

            <?php
                $precio = 150;
                if ($precio >= 1000){
                    echo "caro";
                } elseif ($precio > 100 || $precio < 1000) {
                    echo "medio";
                } elseif ($precio <= 100) {
                    echo "barato";
                } elseif ($precio < 0) {
                    echo "precio negativo";
                }
            ?>

            <h2>
                6.Escribe un programa que funcione similar a un reloj, de manera que a partir de los valores de las variables hora, minuto y segundo 
                muestre la hora dentro de un segundo. Ten en cuenta que tras las 23:59:59 serán las 0:0:0.
            </h2>

            <?php
                $hora = 0;
                $minutos = 0;
                $segundos = 0;
                for( $i = 0; $i <= 86400; $i++) {                   
                    if($segundos == 60){
                        $segundos = 0;
                        $minutos++;
                        if($minutos == 60){
                            $hora++;
                            $minutos = 0;
                        }
                        if($hora == 24){
                            $hora = 0;
                        }
                    }
                    //para probar este ejercicio quitar las "//" del comentario de abajo
                    //echo $hora.":".$minutos.":".$segundos."<br>";
                    $segundos++;
                }
                echo "Ejercicio 6 funciona, quitar los '//' del código para probarlo";
            ?>

            <h2>7.Realiza el código que imprima desde el 1 hasta el número que pongas en la variable maximo.</h2>

            <?php
            $maximo = 5;
            for($i = 1; $i <= $maximo; $i++) {
                echo "$i";
            }
            ?>

            <h2>8.Muestra los números del 9 al 15 en una lista desordenada. Utiliza un bucle for.</h2>

            <?php
                echo "<ul>";
                for($i = 9; $i <= 15; $i++){
                    echo "<li>$i</li>";
                }
                echo "</ul>"
            ?>

            <h2>
                9.Realiza un bucle que imprima por pantalla los números pares entre 0 y 10 (incluidos), dentro de un solo párrafo, separados por 
                comas: “0, 2, 4, 6, 8, 10”.
            </h2>

            <?php
                for($i = 0; $i <= 10; $i++) {
                    if(($i % 2) == 0){ 
                        echo "$i, ";
                    }     
                }
            ?>

            <h2>10.Muestra los números del 50 al 20, salvo los múltiplos de 3 y de 7, en una lista ordenada.</h2>

            <?php
            $i = 50;
                echo "<ol>";
                while($i >= 20){
                    if(($i % 3) == 0 || ($i % 7) == 0){ 
                        echo "<li>";
                        echo $i;
                        echo "</li>";
                    }  
                    $i--;
                }
                echo "</ol>";
            ?>

            <h2>
                11.Escribe un programa que sume los números desde el 1 hasta el 10. Muestra por pantalla el resultado. Es decir, 1+2+3+4+5+6+7+8+9+10=55. 
                (Con que muestre el resultado, 55, es suficiente).
            </h2>

            <?php
                echo 1+2+3+4+5+6+7+8+9+10;
            ?>

            <h2>
                12.Escribe un programa que dado un número contenido en la variable numero, muestre el factorial del mismo. El factorial es el producto de 
                los números positivos desde 1 hasta dicho número. Es decir, el factorial de 5 es 1x2x3x4x5 = 120.
            </h2>

            <?php
                $numero = 5;
                $cont = $numero;
                echo "El factorial de $numero es ";
                for($i = 1; $i <= $cont; $i++){
                    $numero = $numero * $i;
                }
                echo "$numero";
            ?>
        </body>
</html>