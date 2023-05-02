<?php
include_once "../../header.php";
require_once $refRoot . "./model/product.php";
require_once $refRoot . "./model/type_product.php";

//Created new type of product
$typeProduct = new Typeproduct();
//Get all type 
$allTypeProduct = $typeProduct->getAllTypeProduct();

?>


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Quản lý loại sản phẩm</h1>
                    <a href="./add_protype.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add new type product</a>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách các loại tổ yến</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">STT</th>
                                            <th width="20%">Hình ảnh</th>
                                            <th width="20%">Tên loại</th>
                                            <th width="5%">Vị trí</th>
                                            <th width="30%">Mô tả</th>
                                            <th colspan="2">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        foreach($allTypeProduct as $item){ ?>
                                        <tr>
                                            <td><?= $count++; ?></td>
                                            <td>
                                                <img height="150" width="auto" src="<?=$url?>/public/img/protype/<?=$item['image']?>" style="object-fit: cover;" alt="Img Protype">
                                            </td>
                                            <td><?=$item['type_name']?></td>
                                            <td><?=$item['position']?></td>
                                            <td><?=$item['description']?></td>
                                            <td><a href="./edit_protype.php?type_id=<?=$item['type_id'];?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="../../action/protype/ac_delete_protype.php?type_id=<?=$item['type_id'];?>" class="btn btn-danger">Delete</a></td>
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