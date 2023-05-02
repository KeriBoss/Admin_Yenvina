<?php
require_once __DIR__."/database.php";
class Product extends Database{
    function getAllProduct(){
        $sql = parent::$connection->prepare("SELECT * FROM products ORDER BY `id` DESC");
        return parent::select($sql);
    }
    function insert($name, $prices, $quantity, $sale, $thumbnail, $type){
        $sql = parent::$connection->prepare("INSERT INTO `products`(`product_name`, `prices`, `quantity`, `sale`, `thumbnail`, `type_id`, `rating`) VALUES (?, ?, ?, ?, ?, ?, 0)");
        $sql->bind_param('siiisi', $name, $prices, $quantity, $sale, $thumbnail, $type);
        return $sql->execute();
    }
    /**
     * Get product by id
     */
    function getProductById($id){
        $sql = parent::$connection->prepare("SELECT * FROM products WHERE `id` = ?");
        $sql->bind_param('i', $id);
        return parent::select($sql);
    }
    /**
     * Update product by id
     */
    function update($id, $name, $prices, $quantity, $sale, $thumbnail, $type){
        $sql = parent::$connection->prepare("UPDATE `products` SET `product_name`= ? ,`prices`= ? ,`quantity`= ? ,`sale`= ? ,`thumbnail`= ? ,`type_id`= ?  WHERE `id` = ?");
        $sql->bind_param('siiisii', $name, $prices, $quantity, $sale, $thumbnail, $type, $id);
        return $sql->execute();
    }
    function delete($id){
        $sql = parent::$connection->prepare("DELETE FROM `products` WHERE `id` = ?");
        $sql->bind_param('i', $id);
        return $sql->execute();
    }
}