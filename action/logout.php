<?php
session_start();
require_once "../model/config.php";
require_once "../model/database.php";
require_once "../model/users.php";

if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
}
header("location: ../login.php");