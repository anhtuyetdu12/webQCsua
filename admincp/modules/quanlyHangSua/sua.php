<?php
$sql_sua_hs = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='$_GET[idsanpham]' LIMIT 1";
$query_sua_hs = mysqli_query($mysqli, $sql_sua_hs);
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
    <h1 style="padding-top: 10px;background-color:#a3f93a;">Sửa thông hãng sữa</h1>
    <table width="470px" style="margin-left: 45px; padding-bottom: 10px;">
        <?php
        while ($row = mysqli_fetch_array($query_sua_hs)) {
        ?>
        <form action="modules/quanlyHangSua/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" method="POST">
            <tr>
                <td class="info">Mã HS</td>
                <td class="box"><input type="text" name="masua" value="<?php echo $row['masua'] ?>" style="width: 100px;"></td>
            </tr>
            <tr>
                <td class="info">Tên hãng sữa</td>
                <td class="box"><input type="text" name="hangsua" value="<?php echo $row['hangsua'] ?>" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Địa chỉ</td>
                <td class="box"><input type="text" name="diachi" value="<?php echo $row['diachi'] ?>" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Số điện thoại</td>
                <td class="box"><input type="text" name="sodienthoai" value="<?php echo $row['sodienthoai'] ?>" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Email</td>
                <td class="box"><input type="text" name="email" value="<?php echo $row['email'] ?>" style="width: 260px;"></td>
            </tr>
            <tr>
                <input type="submit" value="Sửa" name="suahs" style="width: 90px; height: 30px; margin: 10px 0;background-color:#a3f93a; border: none;border-radius: 3px; font-weight: bold; font-size: 16px;">
            </tr>
        <?php
        }
        ?>
    </table>
</div>