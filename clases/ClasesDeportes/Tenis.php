<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/clases/ClasesDeportes/Sport.php";
class Tenis extends Sport{
    private string $count;
    private array $rakets;

    public function __construct(string $count, array $rakets ,string $type, int $numPlayers, bool $contact){
        $this->count = $count;
        $this->rakets = $rakets;
        parent::__construct($type, $numPlayers, $contact);
    }
    public function play():string{
        return "Estoy jugando tenis";
    }
}