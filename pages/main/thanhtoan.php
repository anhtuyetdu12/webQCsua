<?php
    session_start();
    include("../../admincp/config/config.php");
    $id_khachhang = $_SESSION['id_khachhang'];
    $madonhang = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_giohang(id_khachhang,madonhang,thanhtoan) VALUES('".$id_khachhang."', '".$madonhang."', 1)";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        //thêm chi tiết giỏ hàng
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order = "INSERT INTO chitietdonhang(madonhang,id_sanpham,soluong) VALUES('".$id_sanpham."', '".$madonhang."', '".$soluong."')";

            mysqli_query($mysqli,$insert_order);
        }

    }
    // unset($_SESSION['cart']);
    header('Location:../../index.php?quanly=camon');
    
?>