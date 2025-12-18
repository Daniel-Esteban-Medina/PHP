<!DOCTYPE html>
<html>
    <head>
        <title>Recu unidad 1</title>
    </head>
    <body>
           
        <?php
            include __DIR__ . "/films.php";
            echo "<ul>";
                foreach($directors as $nombres => $films){
                    echo "<li>".$nombres."</li>";
                }
            echo "</ul>";
        ?>

        <?php
            echo "<ul>";
                foreach($directors as $nombres => $films){
                    if($films["year"] >= 2010){
                        echo "<li>".$films["film"]."</li>";
                    }
                }
            echo "</ul>";
        ?>

        <?php
            $dur = 0;
            foreach($directors as $nombres => $films){
                $array = $films["genre"];
                for($i = 0; $i < count($array); $i++){
                    if($array[$i] == "Drama"){
                        $dur = $dur + $films["duration"];
                    }
                }
            }
            echo "DURACIÓN: ".$dur;
        ?>

        <?php
        echo "<br>FUNCIONES:<br>";
            include __DIR__ . "/functions.php";
            echo calculator('*', 5, 3, 9);
            var_dump(calculator('+'));
            var_dump(calculator('no', 4));

            var_dump(orderArray([5,9,4,2], "asc"));
            var_dump(orderArray([5,9,4,2], "desc"));
        ?>

        <?php
            /*
            $matrix = array(array());
            for($i = 0; $i < 5; $i++){
                echo "<p>";
                for($j = 0; $j < 5; $j++){

                }
                echo "</p>";
            }
            */
        ?>
    </body>
</html>