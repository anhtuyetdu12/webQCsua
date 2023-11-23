<?php
include('../../config/config.php');
$tensua = $_POST['tensua'];
$hangsua = $_POST['hangsua'];
$loaisua  = $_POST['loaisua'];
$trongluong  = $_POST['trongluong'];
$dongia  = $_POST['dongia'];

if (isset($_POST['themmoi'])) {
    //them
    $sql_them = "INSERT INTO tbl_sanpham(tensua,hangsua,loaisua ,trongluong ,dongia) VALUES('" . $tensua . "','" . $hangsua . "', '" . $loaisua . "'
            ,'" . $trongluong . "', '" . $dongia . "')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlythongtinsua&query=them');
} else if (isset($_POST['suahs'])) {
    //sua

    $sql_update = "UPDATE tbl_sanpham SET tensua ='" . $tensua . "', hangsua= '" . $hangsua . "' , loaisua ='" . $loaisua . "' , trongluong ='" . $trongluong . "' , dongia ='" . $dongia . "' 
                WHERE id_sanpham = '$_GET[idsanpham]'";
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanlythongtinsua&query=them');
} else {
    //xoa
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanlythongtinsua&query=them');
    
}
