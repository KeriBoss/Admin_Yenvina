<?php
//hang xe, loai xe, ten xe, bien so xe, so cho ngoi, tai xe, tuyen duong, hinh anh xe
$fieldQuanLyXe = array(
    array('fieldtype' => 'TEXT', 'label' => 'Hình ảnh xe', 'prefixid' => 'fieldQuanLyXe'),
    array('fieldtype' => 'TEXT', 'label' => 'Tên xe', 'prefixid' => 'fieldQuanLyXe'),
    array('fieldtype' => 'TEXT', 'SELECT_CONST' => 'Hãng xe', 'prefixid' => 'fieldQuanLyXe', 'array_select_const' => array('Toyota', 'BMW', 'Huyndai', 'Ranger')),
    array('fieldtype' => 'TEXT', 'SELECT_CONST' => 'Loại xe', 'prefixid' => 'fieldQuanLyXe', 'array_select_const' => array('Xe Hơi', 'Xe Giường Nằm', 'Xe Buýt', 'Phà')),
    array('fieldtype' => 'TEXT', 'label' => 'Biển số xe', 'prefixid' => 'fieldQuanLyXe'),
    array('fieldtype' => 'TEXT', 'SELECT_CONST' => 'Số chỗ ngồi', 'prefixid' => 'fieldQuanLyXe', 'array_select_const' => array('4', '7', '9', '11', '16', '32')),
    array('fieldtype' => 'TEXT', 'label' => 'Tài xế', 'prefixid' => 'fieldQuanLyXe'),
    array('fieldtype' => 'TEXT', 'SELECT_CONST' => 'Tuyến đường', 'prefixid' => 'fieldQuanLyXe', 'array_select_const' => array('HCM - Ninh Thuận', 'HCM-Bình Thuận', 'Bình Dương-Phan Thiết'))
);

//Ten quang duong, so km se di, cac tram di qua, thoi gian du kien hoan thanh chuyen di
$fieldQuanLyQuangDuong = array(
    array('fieldtype' => 'TEXT', 'label' => 'Tên quãng đường', 'prefixid' => 'fieldQuanLyQuangDuong'),
    array('fieldtype' => 'TEXT', 'label' => 'Tên trạm', 'prefixid' => 'fieldQuanLyQuangDuong'),
    array('fieldtype' => 'NUMBER', 'label' => 'Số km phải đi', 'prefixid' => 'fieldQuanLyQuangDuong'),
    array('fieldtype' => 'NUMBER', 'label' => 'Thời gian dự kiến hoàn thành', 'prefixid' => 'fieldQuanLyQuangDuong')
);

//Ten xe, hinh anh xe, các loại tiện ích
$fieldQuanLyTienIch = array(
    array('fieldtype' => 'TEXT', 'label' => 'Hình ảnh xe' , 'prefixid' => 'fieldQuanLyTienIch'),
    array('fieldtype' => 'TEXT', 'label' => 'Tên xe' , 'prefixid' => 'fieldQuanLyTienIch'),
    array('fieldtype' => 'TEXT', 'label' => 'Các loại tiện ích' , 'prefixid' => 'fieldQuanLyTienIch', 'array_select_const' => array('Đồ ăn nhanh', 'Trái cây', 'Nhà vệ sinh', 'Máy điều hòa', 'Phục vụ nước')),
);


//$fieldInfoListAllWithPrefixid = array();
array_push($fieldInfoListAllWithPrefixid, $fieldQuanLyXe);
array_push($fieldInfoListAllWithPrefixid, $fieldQuanLyQuangDuong);
array_push($fieldInfoListAllWithPrefixid, $fieldQuanLyTienIch);


?>