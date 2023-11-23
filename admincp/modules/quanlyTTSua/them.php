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
    <h1 style="padding-top: 10px;background-color: #3ac6f9;">Thêm thông tin các loại sữa</h1>
    <table width="470px" style="margin-left: 45px; padding-bottom: 10px;">
        <form action="modules/quanlyTTSua/xuly.php" method="POST">
            <tr>
                <td class="info">Tên sữa</td>
                <td class="box"><input type="text" name="tensua" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Hãng sữa</td>
                <td class="box"><input type="text" name="hangsua" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Loại sữa</td>
                <td class="box"><input type="text" name="loaisua" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Trọng lượng</td>
                <td class="box"><input type="text" name="trongluong" style="width: 150px;"></td>
            </tr>
            <tr>
                <td class="info">Đơn giá</td>
                <td class="box"><input type="text" name="dongia" style="width: 150px;"></td>
            </tr>
            <tr>
                <input type="submit" value="Thêm mới" name="themmoi" style="width: 90px; height: 30px; margin: 10px 0;background-color: #3ac6f9; border: none;border-radius: 3px;font-size: 16px;font-weight: bold;">
            </tr>
        </form>
    </table>
</div>