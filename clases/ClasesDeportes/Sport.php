<?php
abstract class Sport{
    public function __construct(
    protected String $type,
    protected Int $numPlayers,
    protected bool $contact
    ){}
    public function addPlayers(int $num):int{
        $this->numPlayers += $num;
        return $this->numPlayers;
    }
    public abstract function play():string;

    public function __tostring(){
        return "El deporte es sano";
    }
}