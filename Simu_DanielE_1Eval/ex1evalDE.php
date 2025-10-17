<!DOCTYPE html>
<html>
    <head>
        <title>ex1evalDE</title>
    </head>
    <body>
        <h3>
            1. (1 punto) Crea un array bidimensional de 5 filas por 3 columnas. En cada posición, guarda el producto del número de fila por el de columna. 
            Para ello, debes utilizar bucles. Es decir: Una vez creado el array, realiza un var_dump para verificar que está correcto.
        </h3>
        <?php
        $arr = array(
            array(0,0,0),
            array(0,0,0),
            array(0,0,0),
            array(0,0,0),
            array(0,0,0)
        );
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 5; $j++){
                $arr[$i][$j] = ($i+1) * ($j+1);
            }
        }
        var_dump($arr);
        ?>

        <h3>
            2. (1 punto) Crea un array bidimensional de 4 filas por 4 columnas. En cada posición, pon el string “sí” si fila y columna coinciden, y “no” en 
            caso contrario. Debes utilizar bucles. Una vez creado el array, realiza un var_dump para verificar que está correcto.
        </h3>
        <?php
        $arr2 = array(
            array(0,0,0,0),
            array(0,0,0,0),
            array(0,0,0,0),
            array(0,0,0,0)
        );
        for($i = 0; $i < 4; $i++){
            for($j = 0; $j < 4; $j++){
                if($i == $j){
                    $arr2[$i][$j] = "SI";
                }else{
                    $arr2[$i][$j] = "NO";
                }
            }
        }
        var_dump($arr2);
        ?>

        <h3>
            3. (1 punto) En funcionesXY.php crea la función promedio que recibe un número variable de parámetros. La función calcula el promedio de dichos valores 
            (es decir, la suma de dichos valores, dividido entre la cantidad de valores). Si no se recibe ningún parámetro, la función devuelve el boolean false.
        </h3>
        <?php
            function promedio(...$nums):float{
                $suma = 0;
                $numElementos = 0;
                $resultado = 0;
                foreach($nums as $num){
                    $suma = $suma + $num;
                    $numElementos++;
                }
                if($nums != null){
                    $resultado = $suma/$numElementos;
                }else{
                    $resultado = false;
                }
                return $resultado;
            }
            echo promedio(1,2,4,3);
            echo "<br>".promedio();
            echo "<br>".promedio(-2, 3, -7);
        ?>

        <h3>
            4. (1 punto) En funcionesXY.php crea la función potencia. Tiene dos parámetros: base y exponente (exponente es opcional, si no se incluye tomará el valor 
            de 2). La función devuelve la potencia baseexpontente, es decir: 43 es 4x4x4 (se multiplica la base 3 veces). Para hacer el cálculo tienes que utilizar 
            bucles (no puedes utilizar pow() ni el operador **).
        </h3>

        <?php
            function potencia($base, $exponente = 2):int{
                $potenciado = 1;
                for($i = 0;$i < $exponente; $i++){
                    $potenciado = $potenciado * $base;
                }
                return $potenciado;
            }
            echo potencia(4, 3)."<br>";
            echo potencia(4)."<br>";
            echo potencia(2,8)
        ?>

        <h3>
            5 (1 punto) Crea en ex1evalXY.php un array asociativo que tenga 3 elementos que representan a 3 personas: los ids (int) son las claves, y los nombres 
            (string) son los valores. Ordena el array alfabéticamente por nombres. Utiliza funciones de la librería de PHP para ello. Muestra el contenido en una 
            lista desordenada (ul), siguiendo el modelo del ejemplo:
        </h3>
        <?php
            $personas = [
                5 => "Jose",
                7 => "Paco",
                8 => "Manu",
            ];
            echo "<ul>";
            foreach($personas as $id => $persona){
                echo "<li>".$persona." tiene el id ".$id."</li>";
            }
            echo "</ul>";           
        ?>
    </body>
</html>