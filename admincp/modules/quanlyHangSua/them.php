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
    <h1 style="padding-top: 10px;background-color:#a3f93a;">Thêm hãng sữa</h1>
    <table width="470px" style="margin-left: 45px; padding-bottom: 10px;">
        <form action="modules/quanlyHangSua/xuly.php" method="POST">
            <tr>
                <td class="info">Mã HS</td>
                <td class="box"><input type="text" name="masua" style="width: 100px;"></td>
            </tr>
            <tr>
                <td class="info">Tên hãng sữa</td>
                <td class="box"><input type="text" name="hangsua" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Địa chỉ</td>
                <td class="box"><input type="text" name="diachi" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Số điện thoại</td>
                <td class="box"><input type="text" name="sodienthoai" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Email</td>
                <td class="box"><input type="text" name="email" style="width: 260px;"></td>
            </tr>
            <tr>
                <input type="submit" value="Thêm mới" name="themmoi" style="width: 90px; height: 30px; margin: 10px 0;background-color:#a3f93a; border: none;border-radius: 3px;font-size: 16px;font-weight: bold;">
            </tr>

        </form>
    </table>
</div>