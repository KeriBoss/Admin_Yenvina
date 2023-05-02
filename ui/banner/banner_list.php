<?php
include_once "../../header.php";
require_once $refRoot . "./model/banner.php";

//Created new type of product
$banner = new Banner();
//Get all type 
$getAllBanner = $banner->getAllBanner();

?>


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Quản lý các Banner</h1>
                    <a href="./add_banner.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Thêm banner mới</a>
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách các Banner</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">STT</th>
                                            <th width="20%">Hình ảnh Web</th>
                                            <th width="10%">Hình ảnh mobile</th>
                                            <th width="20%">Tiêu đề</th>
                                            <th width="30%">Mô tả</th>
                                            <th width="5%">Vị trí</th>
                                            <th width="10%">Link gán</th>
                                            <th colspan="2" width="10%">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        foreach($getAllBanner as $item){ ?>
                                        <tr>
                                            <td><?= $count++; ?></td>
                                            <td>
                                                <img height="150" width="auto" src="<?=$url?>/public/img/banner/<?=$item['img_web']?>" style="object-fit: cover;" alt="Img banner">
                                            </td>
                                            <td>
                                                <img height="150" width="auto" src="<?=$url?>/public/img/banner/<?=$item['img_mobile']?>" style="object-fit: cover;" alt="Img banner">
                                            </td>
                                            <td><?=$item['heading']?></td>
                                            <td><?=$item['description']?></td>
                                            <td><?=$item['position']?></td>
                                            <td><?=$item['href']?></td>
                                            <td><a href="./edit_banner.php?banner_id=<?=$item['id'];?>" class="btn btn-primary">Edit</a></td>
                                            <td><a href="../../action/ac_delete_banner.php?type_id=<?=$item['id'];?>" class="btn btn-danger">Delete</a></td>
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