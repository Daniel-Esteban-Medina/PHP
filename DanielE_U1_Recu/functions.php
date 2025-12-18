<?php
function calculator($operacion, ...$nums){
    $valor = 0;
    if($nums != null){
    switch($operacion){
        case "+":
            $acc = 0;
            for($i = 0; $i < count($nums); $i++){
                $acc = $acc + $nums[$i];
            }
            $valor = $acc;
        break;
        case "-":
            $acc = 0;
            for($i = 0; $i < count($nums); $i++){
                $acc = $acc - $nums[$i];
            }
            $valor = $acc;
        break;
        case "*":
            $acc = 1;
            for($i = 0; $i < count($nums); $i++){
                $acc = $acc * $nums[$i];
            }
            $valor =  $acc;
        break;
        case "avg":
            $acc = 0;
            for($i = 0; $i < count($nums); $i++){
                
            }
            $valor = $acc;
        break;
        default:
            $valor = null;
        break;
    }
    } else {
        $valor = null;
    }
    return $valor;
}

function orderArray($array, $orden = "asc"):array{
    switch($orden){
        case "asc":
            asort($array);
        break;
        case "desc":
            rsort($array);
        break;
    }
    return $array;
}