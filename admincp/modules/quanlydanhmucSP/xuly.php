<?php
    include('../../config/config.php');
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){
        //them
        $sql_them = "INSERT INTO tbl_danhmucsanpham(tendanhmuc,thutu) VALUES('".$tenloaisp."','".$thutu."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php?action=quanlyDanhMucSP&query=them');
    }else if(isset($_POST['suadanhmuc'])){
        //sua
        $sql_update = "UPDATE tbl_danhmucsanpham SET tendanhmuc = '".$tenloaisp."' , thutu ='".$thutu."' WHERE iddanhmuc = '$_GET[iddanhmuc]'";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlyDanhMucSP&query=them');
    }else{
        //xoa
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmucsanpham WHERE iddanhmuc = '".$id."' ";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlyDanhMucSP&query=them');

    }


?>