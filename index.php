<?php
include "./header.php";
require_once $refRoot."/model/product.php";
require_once $refRoot."/model/type_product.php";

//Get all product in database
$products = new Product();
$allProduct = $products->getAllProduct();

//Created new type of product
$typeProduct = new Typeproduct();
//Get all type 
$allTypeProduct = $typeProduct->getAllTypeProduct();

?>


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Quản lý sản phẩm</h1>
                    <a href="./add_product.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add new product</a>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách tổ yến</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Thumbnail</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá </th>
                                            <th>Số lượng </th>
                                            <th>Đang giảm giá</th>
                                            <th>Loại</th>
                                            <th>Đánh giá (<i class='bx bxs-star'></i>)</th>
                                            <th colspan="2">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Thumbnail</th>
                                            <th>Name product</th>
                                            <th>Prices</th>
                                            <th>Quantity</th>
                                            <th>Currently sale</th>
                                            <th>Manufacture</th>
                                            <th>Rating</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php foreach($allProduct as $item){ ?>
                                        <tr>
                                            <td>
                                                <img height="100" width="100%" src="./public/img/product/<?=$item['thumbnail']?>" alt="Img Product">
                                            </td>
                                            <td><?=$item['product_name']?></td>
                                            <td><?=$item['prices']?></td>
                                            <td><?=$item['quantity']?></td>
                                            <td><?=$item['sale']?></td>
                                            <?php foreach($allTypeProduct as $type){
                                                if($type['type_id'] == $item['type_id']){
                                                ?>
                                                <td><?=$type['type_name']?></td>
                                            <?php }} ?>
                                            <td><?=$item['rating']?></td>
                                            <td><a href="./edit_product.php?product_id=<?=$item['id'];?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="././action/ac_delete.php?product_id=<?=$item['id'];?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



    <?php
    include $refRoot ."./footer.php";
    ?>