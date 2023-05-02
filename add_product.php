<?php
include("./header.php");
require_once __DIR__."./model/type_product.php";

//Created new type of product
$typeProduct = new Typeproduct();
//Get all type 
$allTypeProduct = $typeProduct->getAllTypeProduct();

?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Add new product</h1>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="p-4 d-flex justify-content-start align-items-center">
                        <form action="./action/ac_add_product.php" method="post" class="w-75" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="product_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Chọn hình ảnh</label>
                                <input type="file" name="thumbnail" class="form-control">
                            </div>
                            <div class="form-group d-flex flex-wrap" style="gap: 20px;">
                                <div style="width: calc(50% - 10px);">
                                    <label for="">Giá sản phẩm</label>
                                    <input type="number" name="prices" class="form-control">
                                </div>
                                <div style="width: calc(50% - 10px);">
                                    <label for="">Số lượng</label>
                                    <input type="number" name="quantity" class="form-control">
                                </div>
                            </div>
                            <div class="form-group w-25">
                                <label for="">Đang giảm giá (%)</label>
                                <input type="number" name="sale" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Loại sản phẩm</label>
                                <select name="type_id" class="form-control w-50">
                                    <?php foreach($allTypeProduct as $item){ ?>
                                        <option value="<?=$item['type_id']?>"><?=$item['type_name']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add New</button>
                        </form>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


    <?php
include $refRoot ."./footer.php";
    ?>