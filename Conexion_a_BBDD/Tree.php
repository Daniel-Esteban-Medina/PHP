<?php
class Tree{
    function __construct(
        private float $precio,
        private float $altura,
        private string $material,
        private int $id = -1
    )
    {}
    static function insert(Tree $tree, mysqli $conn){
        $sql = "INSERT  INTO trees (precio, altura, material) VALUES (tree->precio, tree->altura, tree->material,)";
    }
}