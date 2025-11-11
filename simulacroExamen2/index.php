<!DOCTYPE html>
<html>
    <head>
        <tilte>Simulacro EX2</tilte>
    </head>
    <body>
        <h2>Ejercicio 2</h2>
        <?php
        include __DIR__ . "/clases/Flor.php";
        include __DIR__ . "/clases/Arbol.php";
        $flor = new Flor("Orquidea", 21.5, "Marzo");
        $pino = new Arbol("Pino", 118.7, true);
        $roble = new Arbol("Roble", 248.7, false);
        $flor->crecer(1.3); $pino->crecer(1.3); $roble->crecer(1.3);
        echo "<ul>".
                "<li>".$flor->__toString()."</li>".
                "<li>".$pino->__toString()."</li>".
                "<li>".$roble->__toString()."</li>".
            "</ul>";
        ?>
    </body>
</html>