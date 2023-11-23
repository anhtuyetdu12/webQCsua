<?php
$sql_sua_tts = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='$_GET[idsanpham]' LIMIT 1";
$query_sua_tts = mysqli_query($mysqli, $sql_sua_tts);
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
    <h1 style="padding-top: 10px;background-color: #3ac6f9;">Sửa thông tin các loại sữa</h1>
    <table width="470px" style="margin-left: 45px; padding-bottom: 10px;">
        <?php
        while ($row = mysqli_fetch_array($query_sua_tts)) {
        ?>
        <form action="modules/quanlyTTSua/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" method="POST">
            <tr>
                <td class="info">Tên sữa</td>
                <td class="box"><input type="text" name="tensua" value="<?php echo $row['tensua'] ?>" style="width: 100px;"></td>
            </tr>
            <tr>
                <td class="info">Hãng sữa</td>
                <td class="box"><input type="text" name="hangsua" value="<?php echo $row['hangsua'] ?>" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Loại sữa</td>
                <td class="box"><input type="text" name="loaisua" value="<?php echo $row['loaisua'] ?>" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Trọng lượng</td>
                <td class="box"><input type="text" name="trongluong" value="<?php echo $row['trongluong'] ?>" style="width: 150px;"></td>
            </tr>
            <tr>
                <td class="info">Đơn giá</td>
                <td class="box"><input type="text" name="dongia" value="<?php echo $row['dongia'] ?>" style="width: 150px;"></td>
            </tr>
            <tr>
                <input type="submit" value="Sửa" name="suahs" style="width: 90px; height: 30px; margin: 10px 0;background-color: #3ac6f9; border: none;border-radius: 3px; font-weight: bold; font-size: 16px;">
            </tr>
        <?php
        }
        ?>
    </table>
</div>