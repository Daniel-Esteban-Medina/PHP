<!DOCTYPE html>
<html>
        <body>
            <h2>
                1.Crea el array aleatorios, que contenga 20 números aleatorios entre 10 y 50. Muestra por pantalla el contenido de dicho array dentro de 
                un párrrafo (<p>) y con los números separados por comas.Pista: investiga una función de PHP que devuelve números aleatorios.
            </h2>
            <?php
                
                $aleatorios = [];
                for( $i = 0; $i < 20; $i++ ) {
                    $aleatorios[$i] = rand(10,50);
                }
                echo "<p>";
                for($i = 0; $i < count($aleatorios); $i++){
                    echo $aleatorios[$i].", ";
                }
                echo "</p>";
            
                echo "<h2>
                        2.Utilizando el array aletorios generado antes, imprime:
                        La suma de todos los elementos.
                        La media aritmética.
                        El máximo y el mínimo.
                    </h2>";
                $suma = 0;
                for($i = 0; $i < count($aleatorios); $i++){
                    $suma = $suma + $aleatorios[$i];
                }
                echo "La suma de todos los elemntos es: ".$suma.".<br>
                La medía es: ".($suma/20)."<br>
                El maximo y el minimo son: ".Max($aleatorios)." y ".Min($aleatorios);                
            ?>   
            <h2>
                3.Mediante un array asociativo, almacena el nombre y la altura de 5 personas (nombre => altura). Posteriormente, recorre el array y muéstralo en una 
                tabla HTML donde la primera columna tiene los nombres y la segunda las alturas correspondientes. Finalmente añade una última fila a la tabla con la 
                altura media.
            </h2>
            <?php
                $personas = [
                    "Daniel" => 1.73,
                    "Jose" => 1.60,
                    "Laura" => 1.93,
                    "Pepe" => 1.85,
                    "Manu" => 1.76
                ];
                $sumaTotal = 0;
                echo "<table border=1>";
                foreach($personas as $nombre => $altura){
                    echo "<tr>
                            <td>".$nombre."</td>
                            <td>".$altura."</td>
                         </tr>";
                    $sumaTotal = $sumaTotal + $altura;
                }
                echo "<tr>
                        <td>Media</td>
                        <td>".($sumaTotal/5)."</td>";
                echo "</table>";
            ?>

            <h2>
                4.Define tres arrays de 10 números enteros cada uno, con nombres numeros, cuadrados y cubos. Inicializa el array numeros con valores aleatorios entre 
                0 y 100. En el array cuadrados se deben almacenar los cuadrados de los valores que hay en el array numeros; y en el array cubos se deben almacenar los 
                cubos. A continuación, muestra el contenido de los tres arrays dispuestos en tres columnas (con los headers "valor", "cuadrado" y "cubo").
            </h2>
            <?php
                $numeros = [];
                $cuadrados = [];
                $cubos = [];
                for($i = 0; $i < 10; $i++){
                    $numeros[$i] = rand(0,100);
                    $cuadrados[$i] = $numeros[$i] ** 2;
                    $cubos[$i] = $numeros[$i] ** 3;
                }
                echo "<table border=1>
                        <tr>
                        <th>valor</th>
                        <th>cuadrado</th>
                        <th>cubo</th>
                        </tr>
                        ";
                for($i = 0; $i < count($numeros); $i++){
                    echo "<tr>
                            <td>".$numeros[$i]."</td>
                            <td>".$cuadrados[$i]."</td>
                            <td>".$cubos[$i]."</td>
                         </tr>";
                }
                echo "</table>";
            ?>
            <h2>
                5.Crea tres arrays indexados, uno de strings llamado alumnado, otro de doubles llamado notas, y otro de booleans llamado matriculas (es muy 
                recomendable no utilizar tildes, ñ, ni otros caracteres no ASCII en los nombres de variables). Cada array contiene 4 elementos. A continuación 
                muestra en una lista no ordenada (<ul>) toda la información, de manera que se vea, por ejemplo (los valores subrayados se sacan de la información 
                contenida en los arrays):
                    · Fátima tiene un 7.8 y sí está matriculade.
                    · Alberto tiene un 4.1 y sí está matriculade.
                    · Amir tiene un 6.8 y no está matriculade.
                    · .........
            </h2>

            <?php
                $alumnado = ["Raul", "Jose", "Pepe", "Rosa"];
                $notas = [7.5, 4.8, 5.8, 9.3];
                $matriculas = [true, false, true, false];
                echo "<ul>";
                for($i = 0; $i < count($alumnado); $i++){
                    echo "<li>".$alumnado[$i]." tiene un ".$notas[$i]." y ".(($matriculas[$i]) ? "sí está matriculado" : "no está matriculado")."</li>";
                }
                echo "</ul>"
            ?>

            <h2>
                6.Genera un array asociativo en el que las claves serán los meses del año, y los valores las temperaturas máximas de dicho mes en Madrid en 2023 
                (para ver los valores, puedes verlo en la web del Ayuntamiento). A continuación, muestra la información en una tabla como la siguiente, con los meses 
                en la primera fila y las temperaturas correspondientes en la siguiente:
            </h2>

            <?php
                $mesesTemp2023 = [
                    "Enero" => 14.8,
                    "Febrero" => 19,
                    "Marzo" => 25.2,
                    "Abril" => 30.9,
                    "Mayo" => 29.1,
                    "Junio" => 37,
                    "Julio" => 38.7,
                    "Agosto" => 40,
                    "Septiembre" => 31.6,
                    "Octubre" => 30.1,
                    "Noviembre" => 18.6,
                    "Diciembre" => 13.1
                ];
                echo "<table border = 1><tr>";
                foreach($mesesTemp2023 as $meses => $temp){
                    echo "<td>".$meses."</td>";
                }
                echo "</tr><tr>";
                foreach($mesesTemp2023 as $temp){
                    echo "<td>".$temp."</td>";
                }
                echo "</tr>";
                echo "</table>"
            ?>

            <h2>
                7.Con los mismos valores que antes, realiza una tabla de manera que los meses se muestren en la primera columna, y después una 
                simulación de gráfica en la que cada "-" representa 1ºC de la temperatura. Quedaría así:
            </h2>

            <?php
                $mesesTemp2023 = [
                    "Enero" => 14.8,
                    "Febrero" => 19,
                    "Marzo" => 25.2,
                    "Abril" => 30.9,
                    "Mayo" => 29.1,
                    "Junio" => 37,
                    "Julio" => 38.7,
                    "Agosto" => 40,
                    "Septiembre" => 31.6,
                    "Octubre" => 30.1,
                    "Noviembre" => 18.6,
                    "Diciembre" => 13.1
                ];
                function guion($num1): string{
                    $guion = "";
                    for($i = 0; $i < floor($num1); $i++){
                        $guion = $guion . "-";
                    }
                    return $guion;
                }
                echo "<table border = 1>";
                foreach($mesesTemp2023 as $meses => $temp){
                    echo "<tr>";
                    echo "<td>".$meses."</td><td>".guion($temp)."</td>";
                    echo "</tr>";
                }
                echo "</table>"
            ?>

            <h2>
                8.A continuación, siguiendo con la misma temática, tendrás que crear un array asociativo bidimensional. La estructura será la siguiente: 
                las claves seguirán siendo los meses, y los valores serán un array indexado con la termperatura máxima en la posición 0, y la temperatura 
                mínima en la posición 1. De nuevo, estos valores están en la web del Ayuntamiento. Muestra la información en una tabla como la 
                siguiente:
            </h2>

            <?php
                $mesesTemp2023 = [
                    "Enero" => [14.8, -1.8],
                    "Febrero" => [19, -1.8],
                    "Marzo" =>  [25.2, -1.6],
                    "Abril" => [30.9, 5.1],
                    "Mayo" => [29.1, 8.3],
                    "Junio" => [37, 13.4],
                    "Julio" => [38.7, 17.4],
                    "Agosto" => [40, 15.1],
                    "Septiembre" => [31.6, 10.7],
                    "Octubre" => [30.1, 7.5],
                    "Noviembre" => [18.6, 3],
                    "Diciembre" => [13.1, -0.2]
                ];

                echo "<table border = 1>";
                echo "<tr><th>Mes</th><th>Máx</th><th>Min</th></tr>";
                foreach($mesesTemp2023 as $meses => $temp){
                    echo "<tr>";
                    echo "<td>".$meses."</td><td>".$temp[0]."</td><td>".$temp[1]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>

            <h2>
                9.Realiza un programa que escoja al azar 10 cartas de la baraja y que diga cuántos puntos suman según el juego de la brisca (los ases valen 11, 
                los treses 10, las sotas 2, los caballos 3, los reyes 4, todas las demás 0). Emplea un array asociativo para obtener los puntos a partir del 
                nombre de la figura de la carta. Pista: utiliza todos los arrays que necesites (uno de palos, otro de numeros, otro de puntos, otro en el que 
                vayas guardando las cartas que han salido...  ¡todos los que necesites!)
            </h2>

            <?php
            $palos = [];
            $numeros = [];
            $puntos = [];
            $cartas = [];

            
            ?>
        </body>
</html>