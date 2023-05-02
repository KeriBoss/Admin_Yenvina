<?php
require_once __DIR__."/database.php";
class Typeproduct extends Database{
    function getAllTypeProduct(){
        $sql = parent::$connection->prepare("SELECT * FROM type_product");
        return parent::select($sql);
    }
    /**
     * Fuction insert new type of product
     */
    function insert($type_name, $image, $position, $desc){
        $sql = parent::$connection->prepare("INSERT INTO `type_product`(`type_name`, `image`, `position`, `description`) VALUES (?, ?, ?, ?)");
        $sql->bind_param('ssis', $type_name, $image, $position, $desc);
        return $sql->execute();
    }
    /**
     * Get type of product by id
     */
    function getProtypeById($id){
        $sql = parent::$connection->prepare("SELECT * FROM type_product WHERE `type_id` = ?");
        $sql->bind_param('i', $id);
        return parent::select($sql);
    }
    /**
     * Function update protype by ID
     */
    function update($id, $type_name, $image, $position, $desc){
        $sql = parent::$connection->prepare("UPDATE `type_product` SET `type_name`= ?, `image`= ?, `position`= ?, `description`= ?  WHERE `type_id` = ?");
        $sql->bind_param('ssisi', $type_name, $image, $position, $desc, $id);
        return $sql->execute();
    }
    /**
     * Function delete type of product by id
     */
    function delete($id){
        $sql = parent::$connection->prepare("DELETE FROM `type_product` WHERE `type_id` = ?");
        $sql->bind_param('i', $id);
        return $sql->execute();
    }
}