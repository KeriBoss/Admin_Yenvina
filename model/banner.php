<?php
require_once __DIR__."/database.php";
class Banner extends Database{
    function getAllBanner(){
        $sql = parent::$connection->prepare("SELECT * FROM banner");
        return parent::select($sql);
    }
    /**
     * Fuction insert new banner
     */
    function insert($heading, $description, $img_web, $img_mobile, $position, $href){
        $sql = parent::$connection->prepare("INSERT INTO `banner`(`heading`, `description`, `img_web`, `img_mobile`, `position`, `href`) VALUES (?, ?, ?, ?, ? , ?)");
        $sql->bind_param('ssssis', $heading, $description, $img_web, $img_mobile, $position, $href);
        return $sql->execute();
    }
    /**
     * Get banner by id
     */
    function getBannerById($id){
        $sql = parent::$connection->prepare("SELECT * FROM banner WHERE `id` = ?");
        $sql->bind_param('i', $id);
        return parent::select($sql);
    }
    /**
     * Function update banner by ID
     */
    function update($id, $heading, $description, $img_web, $img_mobile, $position, $href){
        $sql = parent::$connection->prepare("UPDATE `banner` SET `heading`= ? ,`description`= ? ,`img_web`= ? ,`img_mobile`= ? ,`position`= ? ,`href`= ?  WHERE `id` = ?");
        $sql->bind_param('ssssisi', $heading, $description, $img_web, $img_mobile, $position, $href, $id);
        return $sql->execute();
    }
    /**
     * Function delete banner by id
     */
    function delete($id){
        $sql = parent::$connection->prepare("DELETE FROM `banner` WHERE `id` = ?");
        $sql->bind_param('i', $id);
        return $sql->execute();
    }
}