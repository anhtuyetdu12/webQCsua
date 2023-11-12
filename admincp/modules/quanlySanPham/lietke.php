<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmucsanpham WHERE tbl_sanpham.iddanhmuc = tbl_danhmucsanpham.iddanhmuc 
    ORDER BY id_sanpham ASC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>

<p>Liệt kê danh mục sản phẩm</p>
<table border="1" style="width: 100%; border-collapse:collapse;border: 5px double #f89b9b;">
    <tr>
        <th>Id</th>
        <th>Mã Sữa</th>
        <th>Tên Sữa</th>
        <th>Hãng Sữa</th>
        <th>Loại Sữa</th>
        <th width="150px">Trọng Lượng</th>
        <th >Đơn Giá</th>
        <th width="300px">Thành Phần dd</th>
        <th width="300px">Lợi Ích</th>
        <th>Danh mục</th>
        <th>Giảm giá</th>
        <th>Số lượng bán</th>
        <th width="100px">Hình Ảnh</th>      
        <th>Thao Tác</th>
    </tr>
    <?php
        $i=0;
        while($row = mysqli_fetch_array($query_lietke_sp)){
            $i++;
    ?>
    <tr style="text-align: center;">
        <td><?php echo $i ?></td>
        <td><?php echo $row['masua'] ?></td>
        <td><?php echo $row['tensua'] ?></td>
        <td><?php echo $row['hangsua'] ?></td>
        <td><?php echo $row['loaisua'] ?></td>
        <td><?php echo $row['trongluong'] ?></td>
        <td><?php echo $row['dongia'] ?></td>
        <td><?php echo $row['tpdd'] ?></td>
        <td><?php echo $row['loiich'] ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td><?php echo $row['giamgia'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><img src="modules/quanlySanPham/uploads/<?php echo $row['hinhanh'] ?>" width="150px"  style="height: 150px;"></td>        
        <td>
            <a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" onclick="return confirm('Bạn có đồng ý xóa không?')">Xóa</a> | 
            <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
        </td>
        
    </tr>
    <?php 
        }
    ?>
</table>