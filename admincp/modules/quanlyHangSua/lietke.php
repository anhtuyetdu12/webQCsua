<?php
    $sql_lietke_hs = "SELECT * FROM tbl_sanpham ";
    $query_lietke_hs = mysqli_query($mysqli,$sql_lietke_hs);
?>


<p style="margin: 20px 200px;">Danh sách hãng sữa</p>
<table border="1" style="width: 80%; border-collapse:collapse;border: 5px double #79d608 ; margin: 0 200px;">
    <tr>
        <th>STT</th>
        <th>Mã HS</th>
        <th>Tên hãng sữa</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i=0;
        while($row = mysqli_fetch_array($query_lietke_hs)){
            $i++;
    ?>
    <tr style="text-align: center;">
        <td><?php echo $i ?></td>
        <td><?php echo $row['masua'] ?></td>
        <td><?php echo $row['hangsua'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['sodienthoai'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td>
            <a href="modules/quanlyhangsua/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" onclick="return confirm('Bạn có đồng ý xóa không?')" style="color: green; text-decoration: none;">Xóa</a> | 
            <a href="?action=quanlyhangsua&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>" style="color: green; text-decoration: none;">Sửa</a>
        </td>
        
    </tr>
    <?php 
        }
    ?>
</table>