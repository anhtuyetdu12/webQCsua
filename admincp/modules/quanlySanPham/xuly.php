<?php
    include('../../config/config.php');
    $masua = $_POST['masua'];
    $tensua = $_POST['tensua'];
    $hangsua  = $_POST['hangsua'];
    $loaisua  = $_POST['loaisua'];
    $trongluong  = $_POST['trongluong'];
    $dongia  = $_POST['dongia'];
    $tpdd  = $_POST['tpdd'];
    $loiich  = $_POST['loiich'];
    //xu ly hinh anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_time = time().'_'.$hinhanh;
    $hinhanh_tmp  = $_FILES['hinhanh']['tmp_name'];
    $danhmucSP  = $_POST['danhmucSP'];
    $giamgia  = $_POST['giamgia'];
    $soluong  = $_POST['soluong'];



    if(isset($_POST['themmoi'])){
        //them
        $sql_them = "INSERT INTO tbl_sanpham(masua,tensua,hangsua ,loaisua ,trongluong ,dongia ,tpdd, loiich, hinhanh, iddanhmuc,giamgia,soluong) VALUES('".$masua."','".$tensua."', '".$hangsua."'
            ,'".$loaisua."', '".$trongluong."', '".$dongia."', '".$tpdd."', '".$loiich."', '".$hinhanh_time."', '".$danhmucSP."', '".$giamgia."', '".$soluong."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh_time);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }else if(isset($_POST['suasp'])){
        //sua
        if($hinhanh!=''){
             //upload hinh anh
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh_time);
            
            $sql_update = "UPDATE tbl_sanpham SET masua ='".$masua."', tensua= '".$tensua."' , hangsua ='".$hangsua."' , loaisua ='".$loaisua."' , trongluong ='".$trongluong."' 
                , dongia ='".$dongia."' , tpdd ='".$tpdd."' , loiich ='".$loiich."' , hinhanh ='".$hinhanh_time."', iddanhmuc ='".$danhmucSP."', giamgia ='".$giamgia."', soluong ='".$soluong."' 
                WHERE id_sanpham = '$_GET[idsanpham]'";
            //xóa hình ảnh cũ
            $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
        }else{
            $sql_update = "UPDATE tbl_sanpham SET masua ='".$masua."', tensua= '".$tensua."' , hangsua ='".$hangsua."' , loaisua ='".$loaisua."' , trongluong ='".$trongluong."' 
                , dongia ='".$dongia."' , tpdd ='".$tpdd."' , loiich ='".$loiich."' , iddanhmuc ='".$danhmucSP."' , giamgia ='".$giamgia."' , soluong ='".$soluong."'  WHERE id_sanpham = '$_GET[idsanpham]'";
        }
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }else{
        //xoa
        $id = $_GET['idsanpham'];
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."' ";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');

    }


?>