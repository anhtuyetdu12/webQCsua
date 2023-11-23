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
        <form action="modules/quanlyKhachHang/xuly.php" method="POST">
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
                    <input type="radio" name="gioitinh" checked value="Nam">Nam
                    <input type="radio" name="gioitinh" checked value="Nữ">Nữ
                </td>
            </tr>
            <tr>
                <td class="info">Địa chỉ</td>
                <td class="box"><input type="text" name="diachi" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Điện thoại</td>
                <td class="box"><input type="text" name="sodienthoai" style="width: 260px;"></td>
            </tr>
            <tr>
                <td class="info">Email</td>
                <td class="box"><input type="text" name="email" style="width: 260px;"></td>
            </tr>
            
            <tr>
                <input type="submit" value="Thêm mới" name="themmoi" style="width: 90px; height: 30px; margin: 10px 0;background-color: #f98f12; border: none;border-radius: 3px; font-weight: 600; font-size: 16px;">
            </tr>
        </form>
    </table>
</div>