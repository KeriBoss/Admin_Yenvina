<?php
include_once "../../header.php";
require_once $refRoot . "./model/banner.php";

if(isset($_GET['banner_id'])){
    $banner_id = $_GET['banner_id'];
}else{
    header('location: ' . $url .'/404.php');
}
//Created new type of product
$banner = new Banner();
//Get all type 
$getBannerById = $banner->getBannerById($banner_id);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Chỉnh sửa banner</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="p-4 d-flex justify-content-start align-items-center">
            <form action="<?= $url ?>/action/banner/ac_edit_banner.php" method="post" class="w-50" enctype="multipart/form-data">
                <input type="number" name="banner_id" value="<?=$banner_id?>" hidden>
                <div class="form-group">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="heading" class="form-control" value="<?=$getBannerById[0]['heading']?>" required>
                </div>
                <div class="form-group">
                    <label for="">Mô tả chi tiết</label><br>
                    <textarea name="description" cols="75%" rows="0" required><?=$getBannerById[0]['description']?></textarea>
                </div>
                <div class="form-group">
                    <label for="img_web">Chọn hình ảnh cho web</label><br>
                    <img src="<?=$url?>/public/img/banner/<?=$getBannerById[0]['img_web']?>" id="img_web_thumbnail" alt="Img" class="img-fluid">
                    <input id="change_img" type="file" name="img_web" class="form-control" value="<?=$getBannerById[0]['img_web']?>">
                    <input type="text" value="<?=$getBannerById[0]['img_web']?>" name="web_img_banner" hidden>
                </div>
                <div class="form-group">
                    <label for="img_mobile">Chọn hình ảnh cho mobile</label><br>
                    <img src="<?=$url?>/public/img/banner/<?=$getBannerById[0]['img_mobile']?>" id="img_mobile_thumbnail" alt="Img" height="200" width="auto">
                    <input id="change_img_2" type="file" name="img_mobile" class="form-control" value="<?=$getBannerById[0]['img_mobile']?>">
                    <input type="text" value="<?=$getBannerById[0]['img_mobile']?>" name="mobile_img_banner" hidden>
                </div>
                <div class="form-group w-25">
                    <label for="">Vị trí</label>
                    <input type="number" name="position" class="form-control" value="<?=$getBannerById[0]['position']?>" required>
                </div>
                <div class="form-group">
                    <label for="">Link gán cho banner</label>
                    <input type="text" name="href" class="form-control" value="<?=$getBannerById[0]['href']?>">
                </div>
                <button type="submit" class="btn btn-primary">Lưu Trạng Thái</button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
        var reader1, render2;
        let change_img = document.querySelector("#change_img");
        let change_img_2 = document.querySelector("#change_img_2");
        let img_web_thumbnail = document.querySelector("#img_web_thumbnail");
        let img_mobile_thumbnail = document.querySelector("#img_mobile_thumbnail");
        change_img.onchange = e => {
            files1 = e.target.files;
                reader1 = new FileReader();
                reader1.onload = function() {
                    img_web_thumbnail.src = reader1.result;
                    img_web_thumbnail.style = 'width: 300px;';
                    img_web_thumbnail.style = 'height: 300px;';
                }
                reader1.readAsDataURL(files1[0]);
        }
        change_img_2.onchange = e => {
            files2 = e.target.files;
                render2 = new FileReader();
                render2.onload = function() {
                    img_mobile_thumbnail.src = render2.result;
                }
                render2.readAsDataURL(files2[0]);
        }
</script>

<?php
include $refRoot . "./footer.php";
?>