<?php
include('../../config/config.php');
$masua = $_POST['masua'];
$hangsua = $_POST['hangsua'];
$diachi  = $_POST['diachi'];
$sodienthoai  = $_POST['sodienthoai'];
$email  = $_POST['email'];

if (isset($_POST['themmoi'])) {
    //them
    $sql_them = "INSERT INTO tbl_sanpham(masua,hangsua,diachi ,sodienthoai ,email) VALUES('" . $masua . "', '" . $hangsua . "','" . $diachi . "','" . $sodienthoai . "', '" . $email . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlyhangsua&query=them');
} else if (isset($_POST['suahs'])) {
    //sua
    $sql_update = "UPDATE tbl_sanpham SET masua= '" . $masua . "' , hangsua ='" . $hangsua . "', diachi ='" . $diachi . "' , sodienthoai ='" . $sodienthoai . "' , email ='" . $email . "' 
                WHERE id_sanpham = '$_GET[idsanpham]'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlyhangsua&query=them');
} else {
    //xoa
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlyhangsua&query=them');
    
}
