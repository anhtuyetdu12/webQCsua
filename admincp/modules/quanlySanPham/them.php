
<div class="insert" style="width: 500px;background-color: #eccdcd;">
  <h2 style="background-color: #eb6565;color:#fff;text-align: center;margin: 0 120px; padding: 5px 0;">THÊM SỮA MỚI</h2>
  <table width=100%>
      <form action="modules/quanlySanPham/xuly.php" method="POST" enctype="multipart/form-data">
      <tr style="margin: 20px 0;">
          <td><label for="MaSua" style="margin: 0 10px;">Mã sữa: </label></td>
          <td><input type="text" name="masua" id="MaSua" style="height: 20px; width:170px; margin:5px 0;"></td>
      </tr>
      <tr>
          <td><label for="TenSua" style="margin: 0 10px;">Tên sữa: </label></td>
          <td><input type="text" name="tensua" id="TenSua" style="height: 20px; width:250px; margin:5px 0;"></td>
      </tr>
      <tr>
          <td><label for="HangSua" style="margin: 0 10px;">Hãng sữa: </label></td>
          <td><select name="hangsua" id="HangSua" style="height: 25px; width:170px; margin:5px 0;">
              <option value="chon">Chọn hãng sữa</option>
              <option value="Nutifood">Nutifood</option>
              <option value="Vinamilk">Vinamilk</option>
              <option value="Dutch Lady">Dutch Lady</option>
              <option value="TH Group">TH Group</option>
              <option value="Nestle">Nestle</option>
              <option value="Mộc Châu">Mộc Châu</option>
              <option value="Abbott">Abbott</option>
              <option value="Vinasoy">Vinasoy</option>
          </select>
          </td>
      </tr>
      <tr>
          <td><label for="LoaiSua" style="margin: 0 10px;">Loại sữa: </label></td>
          <td><select name="loaisua" id="LoaiSua" style="height: 25px; width:170px; margin:5px 0;">
              <option value="0">Chọn loại sữa</option>
              <option value="Sữa bột">Sữa bột</option>
              <option value="Sữa pha sẵn">Sữa pha sẵn</option>
              <option value="Sữa tươi">Sữa tươi</option>
              <option value="Sữa chua">Sữa chua</option>
              <option value="Sữa không đường">Sữa không đường</option>
              <option value="Sữa đặc">Sữa đặc</option>
          </select>
          </td>
      </tr>
      <tr>
          <td><label for="TrongLuong" style="margin: 0 10px;">Trọng lượng: </label></td>
          <td><input type="text" name="trongluong" id="TrongLuong" style="height: 20px; margin:5px 0;"> (gr hoặc ml)</td>
      </tr>
      <tr>
          <td><label for="DonGia" style="margin: 0 10px;">Đơn giá: </label></td>
          <td><input type="text" name="dongia" id="DonGia" style="height: 20px; margin:5px 0;"> (VNĐ)</td>
      </tr>
      <tr>
          <td><label for="TPDD" style="margin: 0 10px;">Thành phần dinh dưỡng: </label></td>
          <td>
              <textarea name="tpdd" id="TPDD" style="width: 300px;margin:5px 0; height:50px; resize : none;"></textarea>
          </td>
      </tr>
      <tr>
          <td><label for="LoiIch" style="margin: 0 10px;">Lợi ích: </label></td>
          <td>
              <textarea name="loiich" id="LoiIch" style="width: 300px; height:50px; resize : none;"></textarea>
          </td>
      </tr>
      <tr>
          <td><label for="HinhAnh" style="margin: 0 10px;">Hình ảnh: </label></td>
          <td><input type="file" name="hinhanh" id="HinhAnh" style="width: 300px;margin:5px 0;"></td>
      </tr>
      <tr>
        <td> <label for="DanhMuc"  style="margin: 0 10px;">Danh mục sản phẩm</label></td>
        <td>
            <select name="danhmucSP" style="height: 25px; width:170px; margin:5px 0;" id="DanhMuc">
                <option value="0">Chọn danh mục</option>
                <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmucsanpham ORDER BY iddanhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                ?>
                    <option value="<?php echo $row_danhmuc['iddanhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php
                    }
                ?>
            </select>
        </td>
      </tr>
      <tr>
          <td><label for="GiamGia" style="margin: 0 10px;">Giảm giá: </label></td>
          <td><input type="number" value="0" min="0" max="100" step="1" id="GiamGia" name="giamgia" style="padding: 0 10px; height: 20px;">(%)</td>
      </tr>
      <tr>
          <td><label for="SoLuong" style="margin: 0 10px;">Số lượng đã bán: </label></td>
          <td><input type="number" value="0" min="0" max="10000" step="1" id="SoLuong" name="soluong" style="padding: 0 3px; height: 20px;"></td>
      </tr>
      <tr>
          <td style="text-align: center;" colspan="2">
              <input type="submit" name="themmoi" value="Thêm mới" style="padding: 3px 5px; margin:10px 0; border-radius: 5px;">
          </td>
      </tr>
  </form>
  </table>
  
</div>
