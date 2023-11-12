<p>Giỏ hàng</p>

<?php
    if(isset($_SESSION['dangky'])){
        echo 'xin chào: '.'<span style="color: red;">'.$_SESSION['dangky'].'</span>';
    }
?>

<?php

    if(isset($_SESSION['cart'])){
       
        // session_destroy();
    }
?>

<div class="carting">
    <form action="">
        <table style="width: 100%;text-align: center;margin: 10px -30px;">
            <tr>
                <th>Thứ tự</th>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr>
            <?php
                if(isset($_SESSION['cart'])){
                    $i = 0;
                    $thanhtien = 0;
                    $tongtien = 0;
                    foreach($_SESSION['cart'] as $cart_item){
                        $i++;
                        $thanhtien = $cart_item['SoLuong'] * $cart_item['dongia'];
                        $tongtien += $thanhtien;
                        
                
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><img src="admincp/modules/quanlySanPham/uploads/<?php echo $cart_item['hinhanh']; ?>" width="100px" style="border-radius: 6px;border: 1px solid #ccc; height: 100px;"></td>
                <td style="width: 200px;"><?php echo $cart_item['tensua']; ?></td>
                <td>
                    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-regular fa-square-minus" style="font-size: 25px; color:#e74a67; margin: 0 5px;"></i></a>
                    <?php echo $cart_item['SoLuong']; ?>
                    <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-regular fa-square-plus" style="font-size: 25px; color:#e74a67; margin: 0 5px;"></i></a>
                </td>
                <td><?php echo number_format($cart_item['dongia'],0,',','.').'vnđ'; ?></td>
                <td><?php echo  number_format($thanhtien,0,',','.').'vnđ'; ?></td>
                <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>" style="text-decoration: none;color: #000; font-weight: 600;">Xóa</a></td>
                <!-- <td><a href="">Sửa</a></td> -->

            </tr>
            <?php
                    }
            ?>
            <!-- tính tổng tiền khi chạy hết vong lặp   -->
            <tr>
                <td colspan="8">
                    <p style="float: left; font-size: 1.1rem; font-weight: 600;color: #e74a67;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ'; ?></p>
                    <p style="float: right; margin: 0 30px;"><a href="pages/main/themgiohang.php?xoatatca=1"  style="text-decoration: none;color: #e74a67; font-weight: 600;">Xóa tất cả</a></p>
                    <div style="clear: both;" class="">
                        <?php
                            if(isset($_SESSION['dangky'])){
                        ?>
                        <p><a href="index.php?quanly=thanhtoan">Đặt hàng</a></p>
                        <?php
                               }else{

                              
                        ?>
                        <?php
                             }
                        
                        ?>

                                
                    </div>
                </td>
            </tr>
            
        </table>
        <?php
                }else{
                    
            ?>
                <div class="no-cart">
                    <img src="../../img/no-cart.png" alt="giỏ hàng trống">
                    <p>Hiện tại giỏ hàng trống</p>
                </div>
                
            
            <?php
                }
            ?>

    </form>
</div>

