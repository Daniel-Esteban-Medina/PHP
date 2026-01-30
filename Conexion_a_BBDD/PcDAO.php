<?php
class PcDAO{
    
    private static function create($pc){
        $sql = "INSERT INTO pcs (id, owner, brand, price) values(?,?,?,?)";
        $ps = $conn->prepare($sql);

        $id = $pc->getId();
        $owner = $pc->getOwner();
        $brand = $pc->getBrand();
        $price = $pc->getPrice();

        $ps->bind_param('sssd', $id, $owner, $brand, $price);
        return false;
    }

    private static function read($id): ?Pc{
        return null;
    }
    private static function update($pc){
        return false;
    }

    private static function delet($id): ?Pc{
        return null;
    }
    private static function readAll(){
        return null;
    }

}