<!DOCTYPE html>
<html>
        <body>
            <?php
                $bid = array(
                    array(5,6,7,8),
                    array(9,10,11,12),
                    array(13,14,15,16)
                );
                $bid2 = [
                    [5,6,7,8],
                    [9,10,11,12],
                    [13,14,15,16]
                ];
                //valor 14;   
                var_dump($bid2[2][1]);
                //recorrer for
                echo"<br>";
                for($i = 0; $i < count($bid2); $i++){
                    for($j = 0; $j < count($bid2[$i]); $j++){
                        echo $bid2[$i][$j]."-";
                    }
                } 
                echo "<br>";
                //recorrer con foreach
                foreach($bid2 as $arrayInterno){
                    foreach($arrayInterno as $number){
                        echo $number." - ";
                    }
                }
            ?>
        </body>
</html>