<?php
session_start();
require_once "../../jpath.php";
require_once "../../model/config.php";
require_once "../../model/database.php";
require_once "../../model/type_product.php";

if(isset($_GET['type_id'])){
    $type_id = $_GET['type_id'];
}

$protype = new Typeproduct();
try {
    $insert = $protype->delete($type_id);
    header('location: ../../ui/protype/protype_list.php');
} catch (Throwable $err) {
    echo $err;
}