<!DOCTYPE html>
<html>
        <body>
            <h2>
                1.Realiza la función imprimeMayor. Recibe dos parámetros (números) e imprime por pantalla (echo) el mayor de los dos. No devuelve nada.
            </h2>
            <?php
                function imprimeMayor($num1, $num2){
                    $mayor = "";
                    if($num1 > $num2){
                        $mayor = $num1;
                    }
                    if($num1 < $num2){
                        $mayor = $num2;
                    }
                    if($num1 == $num2){
                        $mayor = "Son iguales, no hay ninguno mayor";
                    }
                    echo $mayor;
                }
                imprimeMayor(4,6);              
            ?>   

            <h2>2.Realiza la función mayor. Recibe dos parámetros (números) y devuelve el mayor de los dos (no lo imprime, lo devuelve).</h2>

            <?php
                function imprimeMayor2($num1, $num2): int{
                    $mayor = 0;
                    if($num1 > $num2){
                        $mayor = $num1;
                    }
                    if($num1 < $num2){
                        $mayor = $num2;
                    }
                    if($num1 == $num2){
                        $mayor = "Son iguales, no hay ninguno mayor";
                    }
                    return $mayor;
                }
                echo imprimeMayor2(9,3);              
            ?> 

            <h2>3.Realiza la función esMayor. Recibe dos parámetros, a y b. Si a>b devuelve true. En caso contrario (a<=b) devuelve false.</h2>

            <?php
                function imprimeMayor3($num1, $num2){
                    $mayor = false;
                    if($num1 > $num2){
                        $mayor = true;
                    }
                    if($num1 < $num2){
                        $mayor = false;
                    }
                    if($num1 == $num2){
                        $mayor = "Son iguales, no hay ninguno mayor";
                    }
                    return $mayor;
                }
                echo imprimeMayor3(11,14) ? "es verdad" : "es falso";              
            ?> 

            <h2>4.Realiza la función cuentaCaracteres. Recibe un solo parámetro, un string. Devuelve la longitud de dicho string.</h2>

            <?php
                function cuentaCaracteres($string):int{
                    //strlen = .length en java
                    return strlen($string);
                }
                echo cuentaCaracteres("Hola");
            ?>

            <h2></h2>
        </body>
</html>