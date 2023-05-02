<?php
include_once "../../header.php";
require_once $refRoot . "./model/banner.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm banner mới</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="p-4 d-flex justify-content-start align-items-center">
            <form action="<?= $url ?>/action/banner/ac_add_banner.php" method="post" class="w-50" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="heading" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Mô tả chi tiết</label><br>
                    <textarea name="description" cols="75%" rows="0" required></textarea>
                </div>
                <div class="form-group">
                    <label for="img_web">Chọn hình ảnh cho web</label>
                    <input type="file" name="img_web" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="img_mobile">Chọn hình ảnh cho mobile</label>
                    <input type="file" name="img_mobile" class="form-control" required>
                </div>
                <div class="form-group w-25">
                    <label for="">Vị trí</label>
                    <input type="number" name="position" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Link gán cho banner</label>
                    <input type="text" name="href" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include $refRoot . "./footer.php";
?>