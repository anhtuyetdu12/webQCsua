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

    $sql_update = "UPDATE tbl_khachhang SET masua ='" . $masua . "', tensua= '" . $tensua . "' , hangsua ='" . $hangsua . "' , loaisua ='" . $loaisua . "' , trongluong ='" . $trongluong . "' 
                , dongia ='" . $dongia . "' , tpdd ='" . $tpdd . "' , loiich ='" . $loiich . "' , iddanhmuc ='" . $danhmucSP . "' , giamgia ='" . $giamgia . "' , soluong ='" . $soluong . "'  WHERE id_sanpham = '$_GET[idsanpham]'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlykhachhang&query=them');
} else {
    //xoa
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_khachhang WHERE id_sanpham = '" . $id . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_khachhang WHERE id_sanpham = '" . $id . "' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlykhachhang&query=them');
}
