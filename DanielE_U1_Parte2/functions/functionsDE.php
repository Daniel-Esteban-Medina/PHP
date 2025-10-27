<?php
function basicStatistics(...$num): array{
    $arr = [];


    return $arr;
}
function operations(array $numbers, $operation = "order", $incremental = true): array{
    $respuesta = 0;
    switch($operation){
        case "order";
            if($incremental){
                asort($numbers);
                $respuesta = $numbers;
            } else {
                rsort($numbers);
                $respuesta = $numbers;
            }
        break;
        case "sum";
            for($i = 0; $i <= count($numbers); $i++){
                $respuesta = $respuesta + $numbers[$i];
            }
        break;
        case "product";
            for($i = 0; $i <= count($numbers); $i++){
                $respuesta = $respuesta * $numbers[$i];
            }
        break;
    }

    return $respuesta;
}