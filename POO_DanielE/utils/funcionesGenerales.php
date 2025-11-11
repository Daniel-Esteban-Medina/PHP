<?php
function arrayListOrder($arr){
    $html = "<ol>";
    for($i= 0;$i<count($arr);$i++){
        $html .= "<li>".$arr[$i]."</li>";
    }
    $html .= "</ol>"; 
    return $html;
}
function arrayListUnorder($arr){
    $html = "<ul>";
    for($i= 0;$i<count($arr);$i++){
        $html .= "<li>".$arr[$i]."</li>";
    }
    $html .= "</ul>"; 
    return $html;
}