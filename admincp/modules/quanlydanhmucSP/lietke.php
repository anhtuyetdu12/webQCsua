<?php
$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmucsanpham ORDER BY thutu ASC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<div class="list_danhmuc" style="margin: 0 400px;">
    <p>Danh mục sản phẩm</p>
    <table border="1" style="width: 700px; border-collapse:collapse;text-align: center;">
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Thao tác</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tendanhmuc'] ?></td>

                <td>
                    <a href="modules/quanlydanhmucSP/xuly.php?iddanhmuc=<?php echo $row['iddanhmuc'] ?>" onclick="return confirm('Bạn có đồng ý xóa không?')" style="color: #db1165;text-decoration: none;">Xóa</a> |
                    <a href="?action=quanlyDanhMucSP&query=sua&iddanhmuc=<?php echo $row['iddanhmuc'] ?>" style="color: #db1165;text-decoration: none;">Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>