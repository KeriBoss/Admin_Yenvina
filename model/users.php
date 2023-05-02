<?php
require_once __DIR__."/database.php";

class Users extends Database{
    /**
     * Login for user
     */
    function login($email, $password){
        $sql = parent::$connection->prepare("SELECT * FROM users WHERE `users`.`email` = ? AND `users`.`password` = ?");
        $sql->bind_param('ss', $email, $password);
        return parent::select($sql);
    }
    /**
     * Register for user
     */
    function register($name, $email, $password){
        $sql = parent::$connection->prepare("INSERT INTO `users`(`user_name`, `email`, `password`) VALUES ('?,?,?')");
        $sql->bind_param('sss', $name, $email, $password);
        return $sql->execute();
    }
}