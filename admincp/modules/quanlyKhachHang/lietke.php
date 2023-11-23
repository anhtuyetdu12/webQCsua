<?php
    $sql_lietke_kh = "SELECT * FROM tbl_khachhang ";
    $query_lietke_kh = mysqli_query($mysqli,$sql_lietke_kh);
?>


<p style="margin: 20px 200px;">Danh sách khách hàng</p>
<table border="1" style="width: 80%; border-collapse:collapse;border: 5px double orangered; margin: 0 200px;">
    <tr>
        <th>STT</th>
        <th>Mã KH</th>
        <th>Tên KH</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i=0;
        while($row = mysqli_fetch_array($query_lietke_kh)){
            $i++;
    ?>
    <tr style="text-align: center;">
        <td><?php echo $i ?></td>
        <td><?php echo $row['maKH'] ?></td>
        <td><?php echo $row['tenKH'] ?></td>
        <td><?php echo $row['gioitinh'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['sodienthoai'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td>
            <a href="modules/quanlykhachhang/xuly.php?key=<?php echo $row['id_khachhang'] ?>" onclick="return confirm('Bạn có đồng ý xóa không?')" style="color: orangered; text-decoration: none;">Xóa</a> | 
            <a href="?action=quanlykhachhang&query=sua&key=<?php echo $row['id_khachhang'] ?>" style="color: orangered; text-decoration: none;">Sửa</a>
        </td>
        
    </tr>
    <?php 
        }
    ?>
</table>