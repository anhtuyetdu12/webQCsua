<?php
    session_start();
    include('../../admincp/config/config.php');
    //cộng số lượng
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            //nếu kh thêm dấu cộng
            if($cart_item['id'] != $id){
                $product[] = array('masua'=>$cart_item['masua'] , 'tensua'=>$cart_item['tensua'] , 'id'=>$cart_item['id'] , 'SoLuong'=>$cart_item['SoLuong'], 
                            'dongia'=>$cart_item['dongia'] , 'hinhanh'=>$cart_item['hinhanh'] );
                            $_SESSION['cart'] = $product;
            }
            //nếu sp được click dấu +
            else{
                $tangsoluong = $cart_item['SoLuong'] + 1;
                //cho mua sp tối đa là 10 sp (max) , được phép tăng sl
                if($cart_item['SoLuong'] <= 9){
                    $product[] = array('masua'=>$cart_item['masua'] , 'tensua'=>$cart_item['tensua'] , 'id'=>$cart_item['id'] , 'SoLuong'=>$tangsoluong, 
                            'dongia'=>$cart_item['dongia'] , 'hinhanh'=>$cart_item['hinhanh'] );
                }else{
                    //ngược lại kh đc tăng số lượng nữa
                    $product[] = array('masua'=>$cart_item['masua'] , 'tensua'=>$cart_item['tensua'] , 'id'=>$cart_item['id'] , 'SoLuong'=>$cart_item['SoLuong'], 
                            'dongia'=>$cart_item['dongia'] , 'hinhanh'=>$cart_item['hinhanh'] );
                }

                $_SESSION['cart'] = $product;
            }
        }
        header('Location:../../index.php?quanly=giohang');
    }
    //trừ số lượng
    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            //nếu kh thêm dấu trừ
            if($cart_item['id'] != $id){
                $product[] = array('masua'=>$cart_item['masua'] , 'tensua'=>$cart_item['tensua'] , 'id'=>$cart_item['id'] , 'SoLuong'=>$cart_item['SoLuong'], 
                            'dongia'=>$cart_item['dongia'] , 'hinhanh'=>$cart_item['hinhanh'] );
                            $_SESSION['cart'] = $product;
            }
            //nếu sp được click dấu -
            else{
                $trusoluong = $cart_item['SoLuong'] - 1;
                //nếu số lượng mua > 1 sp thì được phép trừ
                if($cart_item['SoLuong'] > 1){
                    $product[] = array('masua'=>$cart_item['masua'] , 'tensua'=>$cart_item['tensua'] , 'id'=>$cart_item['id'] , 'SoLuong'=>$trusoluong, 
                            'dongia'=>$cart_item['dongia'] , 'hinhanh'=>$cart_item['hinhanh'] );
                }else{
                    //ngược lại  ít hơn 1 sp => xóa
                    $product[] = array('masua'=>$cart_item['masua'] , 'tensua'=>$cart_item['tensua'] , 'id'=>$cart_item['id'] , 'SoLuong'=>$cart_item['SoLuong'], 
                            'dongia'=>$cart_item['dongia'] , 'hinhanh'=>$cart_item['hinhanh'] );
                }

                $_SESSION['cart'] = $product;
            }
        }
        header('Location:../../index.php?quanly=giohang');
    }
    //xóa sản phẩm
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            //so sánh all sp khác id , nó sẽ chạy lại session
            if($cart_item['id'] != $id){
                $product[] = array('masua'=>$cart_item['masua'] , 'tensua'=>$cart_item['tensua'] , 'id'=>$cart_item['id'] , 'SoLuong'=>$cart_item['SoLuong'] , 
                            'dongia'=>$cart_item['dongia'] , 'hinhanh'=>$cart_item['hinhanh'] );
            }
        //tạo mới 1 sesion nữa
        $_SESSION['cart'] = $product;
        header('Location:../../index.php?quanly=giohang');

        }
    }

    //xóa tất cả sp
    if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
        //xóa destroy : toàn bộ ss có trong bài , unset(): chỉ định 1 sesion cần xóa
        // session_unset();
        unset($_SESSION['cart']);
        header('Location:../../index.php?quanly=giohang');

    }

    //thêm sản phẩm
    if(isset($_POST['themgiohang'])){
        // session_destroy();
        $id = $_GET['idsanpham'];
        $soluong=1;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($query);
        
        if($row){
            $new_product = array(array('masua'=>$row['masua'] , 'tensua'=>$row['tensua'] , 'id'=>$id , 'SoLuong'=>$soluong , 
                            'dongia'=>$row['dongia'] , 'hinhanh'=>$row['hinhanh']));
            //kiem tra session đã tồn tại chưa
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    //nếu sp đã có trong giỏ hàng
                    if($cart_item['id']==$id){
                        $product[] = array('masua'=>$cart_item['masua'] , 'tensua'=>$cart_item['tensua'] , 'id'=>$cart_item['id'] , 'SoLuong'=>$cart_item['SoLuong'] + 1 , 
                            'dongia'=>$cart_item['dongia'] , 'hinhanh'=>$cart_item['hinhanh'] );
                            $found = true;
                    }
                    //nếu sp chưa có trong giỏ hàng
                    else{
                        $product[] = array('masua'=>$cart_item['masua'] , 'tensua'=>$cart_item['tensua'] , 'id'=>$cart_item['id'] , 'SoLuong'=>$cart_item['SoLuong'] , 
                            'dongia'=>$cart_item['dongia'] , 'hinhanh'=>$cart_item['hinhanh'] );
                    }
                }
                //nếu dlieu không tìm thấy
                if($found == false){
                    //liên kết mảng lại với nhau 
                    $_SESSION['cart'] = array_merge($product,$new_product);
                }else{
                    $_SESSION['cart'] = $product;

                }

            }else{
                $_SESSION['cart'] = $new_product;
            }
            
        }
        header('Location:../../index.php?quanly=giohang');
        // print_r($_SESSION['cart']);
    }
?>