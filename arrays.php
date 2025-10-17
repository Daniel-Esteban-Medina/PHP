<!DOCTYPE html>
<html>
        <body>
            <?php
                $ages = array(25,19,42);
                echo "En la posición 0 esta: $ages[0]<br>";
                //Saber longitud
                echo "la longitud del array es: ".count( $ages )."";
                //Otra forma 
                $nombre[0] = "David";
                $nombre[1] = "Jorge";
                //para añadir otro elemento puede ser
                $nombre[] = "Luz";
                //recorrer
                for($i = 0; $i < count($nombre); $i++){
                    echo "$nombre[$i] <br>";
                }
                //foreach
                foreach($nombre as $nombre){
                   echo "$nombre<br>";
                }

                //Arrays asociativos

                $students = [
                    "123W" => "Javi",
                    "357S"=> "Luz",
                    "987Q"=> "Alberto"
                ];

                var_dump( $students["357S"]);

                $students["123W"] = "Juan";
                var_dump( $students["123W"]);

                echo"<br><br><br><br><br><br><br><br><br><br><br><br>";
                //RECORRER ARRAY ASOCIATIVO
                $DAW = [
                    "DWES" => "Sete",
                    "DWEC"=> "Diego",
                    "DIW"=> "Marco",
                    "IPE" => "Santi"
                ];
                foreach($DAW as $DAW){
                    echo $DAW;
                }
                ksort($DAW);                   
                var_dump($DAW);            
            ?>
        </body>
</html>