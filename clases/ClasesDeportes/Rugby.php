<?php
include_once $_SERVER['DOCUMENT_ROOT']."/clases/ClasesDeportes/Sport.php";
class Rugby extends Sport{
    private string $teamName;

    public function __construct(string $teamName,string $type, int $numPlayers, bool $contact){
        $this->teamName = $teamName;
        parent::__construct($type, $numPlayers, $contact);
    }
    public function play():string{
        return "Estoy jugando rugby";
    }
}