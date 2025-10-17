<!DOCTYPE html>
<html>
        <body>
            <?php
            for ($i = 0; $i <= 1; $i++) {
                for ($j = 0; $j <= 5; $j++) {
                    echo $j;
                }
                echo "<br>";
            }
            ?>
            <br><br><br><br><br><br><br><br><br>        
            <table border = '1' >
                <?php
                $n = 0;
                for ($i = 0; $i <= 4; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j <= 3; $j++) {                        
                        echo "<td>$n</td>";
                        $n++;
                    }
                    $n = $n -1;
                echo "</tr>";
                }
            ?>
            </table>
        </body>
</html>