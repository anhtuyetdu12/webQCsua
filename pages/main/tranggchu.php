<?php
    $sql_product = "SELECT * FROM tbl_sanpham,tbl_danhmucsanpham WHERE tbl_sanpham.iddanhmuc = tbl_danhmucsanpham.iddanhmuc ORDER BY tbl_sanpham.id_sanpham ASC LIMIT 20";
    $query_product = mysqli_query($mysqli,$sql_product);    
  
?>
<h3>Sản phẩm mới nhất</h3>
<div class="product">
    <!-- Sản phẩm 1 -->
    <?php 
        while($row = mysqli_fetch_array($query_product)){
    ?>
    <a class="product-item" href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
        <img src="admincp/modules/quanlySanPham/uploads/<?php echo $row['hinhanh'] ?>" class="product-img">
        <h4 class="name-product"><?php echo $row['tensua'] ?></h4>
        <div class="price">
            <span class="price-old"><?php echo number_format($row['trongluong']).'g/ml' ?></span>
            <span class="price-new"><?php echo number_format($row['dongia'],0,',','.').'vnđ' ?></span>
        </div>

        <div class="action-product">
            <span class="heart liked">
                <i class="like-icon-empty fa-regular fa-heart"></i>   
                <i class="like-icon-fill fa-solid fa-heart"></i>                          
            </span>
            <div class="star">
                <i class="star-gold fa-solid fa-star"></i>
                <i class="star-gold fa-solid fa-star"></i>
                <i class="star-gold fa-solid fa-star"></i>
                <i class="star-gold fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
         
        </div>

        <div class="origin">
            <span class="origin-brand"><?php echo $row['masua'] ?></span>
            <span class="origin-name"><?php echo $row['hangsua'] ?></span>
        </div>

        <div class="favourite">
            <i class="fa-solid fa-check"></i>
            <span>Yêu thích</span>
        </div>
        <!-- nhãn giảm giá -->
        <div class="sale-off">
            <span class="sale-percent"><?php echo number_format($row['giamgia']).'%' ?></span>
            <span class="sale-label">GIẢM</span>
        </div>
    </a>
    <?php 
        }
    ?> 
</div>  
