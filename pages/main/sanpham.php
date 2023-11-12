<p style="color:#e74a67; margin: 10px 0; font-size: 16px; font-weight: 600;">Chi tiết sản phẩm</p>
<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmucsanpham WHERE tbl_sanpham.iddanhmuc = tbl_danhmucsanpham.iddanhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);    
  
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
        <img src="admincp/modules/quanlySanPham/uploads/<?php echo $row_chitiet['hinhanh'] ?>" class="product-img">
    
    </div>
    <form action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
        <div class="chitietsanpham">
                <div style="margin-bottom: 20px; display: flex;">
                    <div class="likes">Yêu thích</div>
                    <h3>
                        <?php echo  $row_chitiet['tensua'] ?>
                    </h3>
                </div>
                <p style="margin-bottom:10px;">Thành phần dinh dưỡng: <?php echo  $row_chitiet['tpdd'] ?></p>
                <p style="margin-bottom:10px;">Lợi ích: <?php echo  $row_chitiet['loiich'] ?></p>
                <p style="margin-bottom:10px;">Trọng lượng: <?php echo  $row_chitiet['trongluong'] ?>(gr/ml)</p>
                <p style="margin-bottom:10px;">Giá: <?php echo  number_format($row_chitiet['dongia'],0,',','.').'VNĐ' ?></p>
                <div class="btn-dathang">
                    <p class="btn-cart">
                        <i class="fa-solid fa-cart-plus" style="color: #e74a67; margin-left: 5px;cursor: pointer;"></i>
                        <input type="submit" value="Thêm Giỏ Hàng" class="Themgiohang" name="themgiohang" style="border-radius: 3px;">
                    </p>
                    <p class="btn-buy"><input type="submit" value="Mua Ngay" class="muangay" style="border-radius: 2px;"></p>

                </div>

        </div>
    </form>

</div>

<?php
    }
?>