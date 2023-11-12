<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmucsanpham ORDER BY iddanhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>
<div class="side-bar">
   
    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['iddanhmuc'] ?>" class="side-barList"> <h3 class="category">
        <i class="fa-solid fa-list"></i>  DANH MỤC SẢN PHẨM</h3></a>
    
    <ul class="list-sidebar">
    <?php
    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
    ?>
        <li><a href="index.php?quanly=danhmucsanpham&id= <?php echo $row_danhmuc['iddanhmuc'] ?>">
            <?php echo $row_danhmuc['tendanhmuc'] ?>
        </a></li>
    <?php
    }
    ?>
    </ul>
</div>