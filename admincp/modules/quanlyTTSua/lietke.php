<?php
    $sql_lietke_tts = "SELECT * FROM tbl_sanpham ";
    $query_lietke_tts = mysqli_query($mysqli,$sql_lietke_tts);
?>


<p style="margin: 20px 200px;">Danh sách các loại sữa</p>
<table border="1" style="width: 80%; border-collapse:collapse;border: 5px double #254bd9; margin: 0 200px;">
    <tr>
        <th>STT</th>
        <th>Tên sữa</th>
        <th>Hãng sữa</th>
        <th>Loại sữa</th>
        <th>Trọng lượng</th>
        <th>Đơn giá</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i=0;
        while($row = mysqli_fetch_array($query_lietke_tts)){
            $i++;
    ?>
    <tr style="text-align: center;">
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensua'] ?></td>
        <td><?php echo $row['hangsua'] ?></td>
        <td><?php echo $row['loaisua'] ?></td>
        <td><?php echo $row['trongluong'] ?></td>
        <td><?php echo $row['dongia'] ?></td>
        <td>
            <a href="modules/quanlyTTSua/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" onclick="return confirm('Bạn có đồng ý xóa không?')" style="color: #0e31b5; text-decoration: none;">Xóa</a> | 
            <a href="?action=quanlythongtinsua&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>" style="color: #0e31b5; text-decoration: none;">Sửa</a>
        </td>
        
    </tr>
    <?php 
        }
    ?>
</table>