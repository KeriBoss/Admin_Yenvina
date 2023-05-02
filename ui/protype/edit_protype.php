<?php
include_once "../../header.php";
require_once $refRoot . "./model/product.php";
require_once $refRoot . "./model/type_product.php";

if(isset($_GET['type_id'])){
    $type_id = $_GET['type_id'];
}else{
    header('location: ' . $url .'/404.php');
}
//Created new type of product
$protype = new Typeproduct();
//Get all type 
$getProtypeById = $protype->getProtypeById($type_id);

?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Quản lý loại sản phẩm</h1>
                    <a href="./add_protype.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Chỉnh sửa loại sản phẩm</a>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="p-4 d-flex justify-content-start align-items-center">
                        <form action="<?= $url ?>/action/protype/ac_edit_protype.php" method="post" class="w-75" enctype="multipart/form-data">
                        <input type="number" name="type_id" value="<?=$type_id?>" hidden>
                            <div class="form-group">
                                <label for="">Tên loại sản phẩm</label>
                                <input type="text" name="type_name" class="form-control" value="<?=$getProtypeById[0]['type_name']?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">Chọn hình ảnh</label>
                                <img src="<?=$url?>/public/img/protype/<?=$getProtypeById[0]['image']?>" id="img_thumbnail" alt="">
                                <input id="change_img" type="file" name="image" class="form-control" value="<?=$getProtypeById[0]['image']?>">
                                <input type="text" value="<?=$getProtypeById[0]['image']?>" name="name_img_product" hidden>
                            </div>
                            <div class="form-group w-25">
                                    <label for="">Vị trí</label>
                                    <input type="number" name="position" class="form-control" value="<?=$getProtypeById[0]['position']?>" required>
                            </div>
                            <div class="form-group">
                                    <label for="">Mô tả</label><br>
                                    <textarea name="description" id="description" cols="100%" rows="10"><?=$getProtypeById[0]['description']?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu Trạng Thái</button>
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