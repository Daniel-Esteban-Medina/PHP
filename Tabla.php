<!DOCTYPE html>
<html>
        <body>
            <?php
                $course1 = "DEWEC";
                $course2 = "DESEC";
                $course3 = "DIW";
                $teacher1 = "Sete";
                $teacher2 = "Diego";
                $teacher3 = "Marco";
                echo "<table border = '1'>
            <tr>
                <th>".$teacher1."</th>
                <th>".$teacher2."</th>
                <th>".$teacher3."</th>
            </tr>
            <tr>
                <td>".$course1."</td>
                <td>".$course2."</td>
                <td>".$course3."</td>
            </tr>
            </table> "
            ?>
            <br><br><br><br><br><br><br><br>
            
                
            <table border = '1'>
            <tr>
                <th>NÚMEROS</th>
                <th>NÚMERO X 2</th>
            </tr>
            <tr>
                <?php    
                for ($i = 0; $i <= 20; $i++){
                    $number = $i * 2;
                    echo "<tr>";
                    echo "<td>$i</td>
                    <td>$number</td>";
                    echo "</tr>";
                }        
                ?>
            </table>        
        </body>
</html>