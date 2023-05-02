<?php
include("./header.php");
require_once __DIR__."./model/product.php";
require_once __DIR__."./model/type_product.php";

$product = new Product();
//Created new type of product
$typeProduct = new Typeproduct();
//Get all type 
$allTypeProduct = $typeProduct->getAllTypeProduct();

if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
}
$getProductById = $product->getProductById($product_id);

?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="p-4 d-flex justify-content-start align-items-center">
                        <form action="./action/ac_edit.product.php" method="post" class="w-75" enctype="multipart/form-data">
                            <input type="number" name="id_product" value="<?=$product_id?>" hidden>
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="product_name" class="form-control" value="<?=$getProductById[0]['product_name']?>">
                            </div>
                            <div class="form-group">
                                <label for="">Chọn hình ảnh</label>
                                <img src="./public/img/product/<?=$getProductById[0]['thumbnail']?>" id="img_thumbnail" alt="">
                                <input id="change_img" type="file" name="thumbnail" class="form-control" value="<?=$getProductById[0]['thumbnail']?>">
                                <input type="text" value="<?=$getProductById[0]['thumbnail']?>" name="name_img_product" hidden>
                            </div>
                            <div class="form-group d-flex flex-wrap" style="gap: 20px;">
                                <div style="width: calc(50% - 10px);">
                                    <label for="">Giá sản phẩm</label>
                                    <input type="number" name="prices" class="form-control" value="<?=$getProductById[0]['prices']?>">
                                </div>
                                <div style="width: calc(50% - 10px);">
                                    <label for="">Số lượng</label>
                                    <input type="number" name="quantity" class="form-control" value="<?=$getProductById[0]['quantity']?>">
                                </div>
                            </div>
                            <div class="form-group w-25">
                                <label for="">Đang giảm giá (%)</label>
                                <input type="number" name="sale" class="form-control"value="<?=$getProductById[0]['sale']?>">
                            </div>
                            <div class="form-group">
                                <label for="">Loại sản phẩm</label>
                                <select name="type_id" class="form-control w-50">
                                    <?php foreach($allTypeProduct as $item){
                                        if($item['type_id'] == $getProductById[0]['type_id']){
                                        ?>
                                        <option value="<?=$item['type_id']?>" selected><?=$item['type_name']?></option>
                                        <?php
                                            } else{
                                        ?>
                                        <option value="<?=$item['type_id']?>"><?=$item['type_name']?></option>
                                    <?php }} ?>
                                </select>
                            </div>
                            <div class="form-group w-25">
                                <label for="">Đánh giá</label>
                                <input type="number" name="rating" class="form-control"value="<?=$getProductById[0]['rating']?>" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Now</button>
                        </form>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

    <script>
        var reader;
        let change_img = document.querySelector("#change_img");
        let img_thumbnail = document.querySelector("#img_thumbnail");
        change_img.onchange = e => {
            files = e.target.files;
                reader = new FileReader();
                reader.onload = function() {
                    document.querySelector("#img_thumbnail").src = reader.result;
                    document.querySelector('#img_thumbnail').style = 'width: 300px;';
                    document.querySelector('#img_thumbnail').style = 'height: 300px;';
                }
                reader.readAsDataURL(files[0]);
        }
    </script>
<?php
include $refRoot ."./footer.php";
?>