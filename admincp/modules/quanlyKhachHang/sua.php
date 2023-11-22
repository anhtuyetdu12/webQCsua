<style>
    .wrap {
        background-color: antiquewhite;
        width: 500px;
        text-align: center;
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
<?php
    $sql_sua_kh = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='$_GET[idsanpham]' LIMIT 1";
    $query_sua_kh = mysqli_query($mysqli, $sql_sua_kh);
?>
<div class="wrap">
    <h1 style="padding-top: 10px;background-color: #f98f12;">Thêm thông tin khách hàng</h1>
    <table width="470px" style="margin-left: 45px; padding-bottom: 10px;">
        <tr>
            <td class="info">Mã khách hàng</td>
            <td class="box"><input type="text" name="maKH" style="width: 100px;"></td>
        </tr>
        <tr>
            <td class="info">Tên khách hàng</td>
            <td class="box"><input type="text" name="tenKH" style="width: 260px;"></td>
        </tr>
        <tr>
            <td class="info">Giới tính</td>
            <td class="box">
                <input type="radio" name="gioitinh" checked>Nam
                <input type="radio" name="gioitinh" checked>Nữ
            </td>
        </tr>
        <tr>
            <td class="info">Địa chỉ</td>
            <td class="box"><input type="text" name="diachi" style="width: 260px;"></td>
        </tr>
        <tr>
            <td class="info">Điện thoại</td>
            <td class="box"><input type="text" name="sdt" style="width: 260px;"></td>
        </tr>
        <tr>
            <td class="info">Email</td>
            <td class="box"><input type="text" name="email" style="width: 260px;"></td>
        </tr>
    </table>
    <input type="submit" value="Sửa" name="suakh" style="width: 90px; height: 30px; margin: 10px 0;background-color: #f98f12; border: none;border-radius: 3px; font-weight: 600; font-size: 16px;">
</div>