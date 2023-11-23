<?php
$sql_sua_kh = "SELECT * FROM tbl_khachhang WHERE id_khachhang ='$_GET[key]' LIMIT 1";
$query_sua_kh = mysqli_query($mysqli, $sql_sua_kh);
?>
<style>
    .wrap {
        background-color: antiquewhite;
        width: 500px;
        text-align: center;
        margin: 0 450px;
    }

    .info {
        text-align: left;
    }

    .box {
        text-align: left;
        padding: 5px 10px;
    }

    input {
        height: 25px;
    }
</style>

<div class="wrap">
    <h1 style="padding-top: 10px;background-color: #f98f12;">Thêm thông tin khách hàng</h1>
    <table width="470px" style="margin-left: 45px; padding-bottom: 10px;">
        <?php
        while ($row = mysqli_fetch_array($query_sua_kh)) {
        ?>
        <form action="modules/quanlyKhachHang/xuly.php?key=<?php echo $row['id_khachhang'] ?>" method="POST">
            <tr>
                <td class="info">Mã khách hàng</td>
                <td class="box"><input type="text" name="maKH" value="<?php echo $row['maKH'] ?>" style="width: 100px;"></td>
            </tr>
            <tr>
                <td class="info">Tên khách hàng</td>
                <td class="box"><input type="text" name="tenKH" value="<?php echo $row['tenKH'] ?>" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Giới tính</td>
                <td class="box">
                    <input type="radio" name="gioitinh" value="Nam" checked>Nam
                    <input type="radio" name="gioitinh" value="Nữ" checked>Nữ
                </td>
            </tr>
            <tr>
                <td class="info">Địa chỉ</td>
                <td class="box"><input type="text" name="diachi" value="<?php echo $row['diachi'] ?>" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Điện thoại</td>
                <td class="box"><input type="text" name="sodienthoai" value="<?php echo $row['sodienthoai'] ?>" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Email</td>
                <td class="box"><input type="text" name="email" value="<?php echo $row['email'] ?>" style="width: 260px;"></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <input type="submit" value="Sửa" name="suakh" style="width: 90px; height: 30px; margin: 10px 0;background-color: #f98f12; border: none;border-radius: 3px; font-weight: 600; font-size: 16px;">
</div>