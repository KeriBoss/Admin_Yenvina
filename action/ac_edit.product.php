<?php
session_start();
require_once "../jpath.php";
require_once "../model/config.php";
require_once "../model/database.php";
require_once "../model/product.php";


$target_dir = JPATH_BASE . "/public/img/product/";

$target_name_file = basename($_FILES["thumbnail"]["name"]);

if($target_name_file == ''){
    $target_name_file = $_POST['name_img_product'];
}
$target_file = $target_dir . $target_name_file;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["thumbnail"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// Check file size
if ($_FILES["thumbnail"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
        $thumbnail = $target_name_file;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $thumbnail = $target_name_file;
}
if(isset($_POST['id_product'])){
    $id_product = $_POST['id_product'];
}
if(isset($_POST['product_name'])){
    $product_name = $_POST['product_name'];
}
if(isset($_POST['prices'])){
    $prices = $_POST['prices'];
}
if(isset($_POST['quantity'])){
    $quantity = $_POST['quantity'];
}
if(isset($_POST['sale'])){
    $sale = $_POST['sale'];
}
if(isset($_POST['type_id'])){
    $type_id = $_POST['type_id'];
}

$products = new Product();
try {
    $insert = $products->update($id_product , $product_name, $prices, $quantity, $sale, $thumbnail, $type_id);
    header('location: ../index.php');
} catch (Throwable $err) {
    echo $err;
}
