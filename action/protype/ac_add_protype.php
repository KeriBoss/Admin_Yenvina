<?php
session_start();
require_once "../../jpath.php";
require_once "../../model/config.php";
require_once "../../model/database.php";
require_once "../../model/type_product.php";


$target_dir = JPATH_BASE . "/public/img/protype/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
// var_dump($target_file);die();
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image = basename($_FILES["image"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if(isset($_POST['type_name'])){
    $type_name = $_POST['type_name'];
}
if(isset($_POST['position'])){
    $position = $_POST['position'];
}
if(isset($_POST['description'])){
    $description = $_POST['description'];
}

$protype = new Typeproduct();
try {
    $insert = $protype->insert($type_name, $image, $position, $description);
    header('location: ../../ui/protype/protype_list.php');
} catch (Throwable $err) {
    echo $err;
}