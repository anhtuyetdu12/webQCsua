<?php
    $sql_product = "SELECT * FROM tbl_sanpham,tbl_danhmucsanpham WHERE tbl_sanpham.iddanhmuc = tbl_danhmucsanpham.iddanhmuc AND tbl_sanpham.iddanhmuc = '$_GET[id]' ORDER BY tbl_sanpham.id_sanpham ASC";
    $query_product = mysqli_query($mysqli,$sql_product);    
    //lay tên danh mục
    $sql_cate= "SELECT * FROM tbl_danhmucsanpham WHERE tbl_danhmucsanpham.iddanhmuc = '$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli,$sql_cate);    
    $row_title = mysqli_fetch_array($query_cate);
?>
<h3>Danh mục sản phẩm : <?php echo $row_title['tendanhmuc'] ?></h3>
<div class="product">
    <!-- Sản phẩm 1 -->
    <?php 
        while($row_product = mysqli_fetch_array($query_product)){
    ?>
    <a class="product-item" href="index.php?quanly=sanpham&id=<?php echo $row_product['id_sanpham'] ?>">
        <img src="admincp/modules/quanlySanPham/uploads/<?php echo $row_product['hinhanh'] ?>" class="product-img">
        <h4 class="name-product"><?php echo $row_product['tensua'] ?></h4>
        <div class="price">
            <span class="price-old"><?php echo number_format($row_product['trongluong']).'g/ml' ?></span>
            <span class="price-new"><?php echo number_format($row_product['dongia'],0,',','.').'vnđ' ?></span>
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
            <span class="sold"><?php echo number_format($row_product['soluong']).' đã bán' ?></span>
        </div>

        <div class="origin">
            <span class="origin-brand"><?php echo $row_product['masua'] ?></span>
            <span class="origin-name"><?php echo $row_product['hangsua'] ?></span>
        </div>

        <div class="favourite">
            <i class="fa-solid fa-check"></i>
            <span>Yêu thích</span>
        </div>
        <!-- nhãn giảm giá -->
        <div class="sale-off">
            <span class="sale-percent"><?php echo number_format($row_product['giamgia']).'%' ?></span>
            <span class="sale-label">GIẢM</span>
        </div>
    </a>
    <?php 
        }
    ?>
                    
</div>  