<!DOCTYPE html>
<html>
    <head>
        <title>EXAMEN 2</title>
    </head>
    <body>

        <?php
            include __DIR__ . "/clases/Usuario.php";
            include __DIR__ . "/clases/Ordenador.php";
            include __DIR__ . "/clases/Movil.php";

            $jose = new Usuario(1234,"Jose", []);
            $maria = new Usuario(4321,"Maria", []);

            $xiaomi = new Movil(6667, "Xiaomi", "GamaBaja",657199352,80);
            $iphon = new Movil(54432, "Iphon", "GamaAlta",657199352,120);
            $android = new Movil(111223,"Android","GamaMedia",67843023,345);

            $asus = new Ordenador(456789, "Asus", "Gaming", 4000, false);
            $amd = new Ordenador(687590,"AMD","Ofimatica",200,true);
            $nvidia = new Ordenador(6676780,"Nvidia","Mixto",4500,false);

            $jose->addDispositivo($xiaomi);$jose->addDispositivo($android);$jose->addDispositivo($iphon);
            $jose->addDispositivo($amd);

            $maria->addDispositivo($asus);$maria->addDispositivo($nvidia);

            echo "<h2>INFORMACIÓN DE LOS USUARIOS:</h2>";
            echo $jose->__toString();
            echo "<br><br>";
            echo $maria->__toString();
            
            echo "<h2>BUSCAR DISPOSITIVO DE LOS USUARIOS:</h2>";
            echo $jose->estaDispositivo(6667) ? "Sí, Jose tiene el Xiami." : "No, Jose no tiene el Xiami.";
            echo "<br>";
            echo $maria->estaDispositivo(687590) ? "Sí, María tiene el AMD." : "No, María no tiene el AMD.";
        ?>
    </body>
</html>