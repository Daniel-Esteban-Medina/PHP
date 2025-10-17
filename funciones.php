<!DOCTYPE html>
<html>
        <body>
            <h2>Funciones</h2>
            <?php
                function intoHtml($tag = "<p>",$element ): string{
                    return "<$tag>$element</$tag>";
                }
                echo intoHtml(null,"Hola");

                function matriculado($student, $school, $course = "DAW", $year = "2025"): string{
                    return "$student matriculado en $course en el año $year en $school";
                }

                echo(matriculado("Jose","Murcia"));
                
                //Trabajar con la propia variable con el parametro "&"
                function increment(&$number){
                    $number++;
                }

                function concat(... $texts){
                    $result = "";
                }
            ?>
        </body>
</html>