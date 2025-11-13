<?php
/**
 * Genera una lista ordenada (HTML) a partir de un array.
 *
 * @param array $arr Lista de elementos a mostrar en la lista ordenada.
 * @return string Código HTML que representa la lista ordenada (<ol>).
 */
function arrayListOrder($arr){
    $html = "<ol>";
    for($i= 0;$i<count($arr);$i++){
        $html .= "<li>".$arr[$i]."</li>";
    }
    $html .= "</ol>"; 
    return $html;
}
/**
 * Genera una lista desordenada (HTML) a partir de un array de elementos.
 *
 * @param array $arr Lista de elementos a mostrar en la lista desordenada.
 * @return string Código HTML que representa la lista desordenada (<ul>).
 */
function arrayListUnorder($arr){
    $html = "<ul>";
    for($i= 0;$i<count($arr);$i++){
        $html .= "<li>".$arr[$i]."</li>";
    }
    $html .= "</ul>"; 
    return $html;
}
