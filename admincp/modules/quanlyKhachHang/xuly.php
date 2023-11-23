<?php
include('../../config/config.php');
$maKH = $_POST['maKH'];
$tenKH = $_POST['tenKH'];
$gioitinh  = $_POST['gioitinh'];
$diachi  = $_POST['diachi'];
$sodienthoai  = $_POST['sodienthoai'];
$email  = $_POST['email'];

if (isset($_POST['themmoi'])) {
    //them
    $sql_them = "INSERT INTO tbl_khachhang(maKH,tenKH,gioitinh ,diachi ,sodienthoai ,email) VALUES('" . $maKH . "','" . $tenKH . "', '" . $gioitinh . "'
            ,'" . $diachi . "', '" . $sodienthoai . "', '" . $email . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlykhachhang&query=them');
} else if (isset($_POST['suakh'])) {
    //sua

    $sql_update = "UPDATE tbl_khachhang SET maKH ='" . $maKH . "', tenKH= '" . $tenKH . "' , gioitinh ='" . $gioitinh . "' , diachi ='" . $diachi . "' , sodienthoai ='" . $sodienthoai . "' 
                , email ='" . $email . "' WHERE id_khachhang = '$_GET[key]'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlykhachhang&query=them');
} else {
    //xoa
    $id = $_GET['key'];
    $sql_xoa = "DELETE FROM tbl_khachhang WHERE id_khachhang = '" . $id . "' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlykhachhang&query=them');
}
