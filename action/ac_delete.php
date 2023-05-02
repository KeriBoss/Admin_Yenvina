<?php
session_start();
require_once "../jpath.php";
require_once "../model/config.php";
require_once "../model/database.php";
require_once "../model/product.php";

if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
}

$products = new Product();
try {
    $insert = $products->delete($product_id);
    header('location: ../index.php');
} catch (Throwable $err) {
    echo $err;
}