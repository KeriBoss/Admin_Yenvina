<?php
include_once "../../header.php";
require_once $refRoot . "./model/product.php";
require_once $refRoot . "./model/type_product.php";

?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Thêm loại sản phẩm mới</h1>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="p-4 d-flex justify-content-start align-items-center">
                            <form action="<?= $url ?>/action/protype/ac_add_protype.php" method="post" class="w-75" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Tên loại</label>
                                    <input type="text" name="type_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Chọn hình ảnh</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="form-group w-25">
                                    <label for="">Vị trí</label>
                                    <input type="number" name="position" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả</label><br>
                                    <textarea name="description" id="description" cols="100%" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm mới</button>
                            </form>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

    <?php
include $refRoot ."./footer.php";
    ?>