<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham ='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<p>sửa sản phẩm</p>
<div class="insert" style="width: 500px;margin: 100px 600px 0;background-color: #eccdcd;">
  <h2 style="background-color: #eb6565;color:#fff;text-align: center; padding: 5px 0;">SỬA THÔNG TIN SỮA</h2>
  <table width=100%>
    <?php
    while($row = mysqli_fetch_array($query_sua_sp)){
    ?>
      <form action="modules/quanlySanPham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" method="POST" enctype="multipart/form-data">
      <tr style="margin: 20px 0;">
          <td><label for="MaSua" style="margin: 0 10px;">Mã sữa: </label></td>
          <td><input type="text" name="masua" id="MaSua" value="<?php echo $row['masua'] ?>" style="height: 20px; width:170px; margin:5px 0;"></td>
      </tr>
      <tr>
          <td><label for="TenSua" style="margin: 0 10px;">Tên sữa: </label></td>
          <td><input type="text" name="tensua" id="TenSua" value="<?php echo $row['tensua'] ?>" style="height: 20px; width:250px; margin:5px 0;"></td>
      </tr>
      <tr>
          <td><label for="HangSua" style="margin: 0 10px;">Hãng sữa: </label></td>
          <td><select name="hangsua" id="HangSua" value="<?php echo $row['hangsua'] ?>" style="height: 25px; width:170px; margin:5px 0;">
              <option value="chon">Chọn hãng sữa</option>
              <option value="Nutifood">Nutifood</option>
              <option value="vina">Vinamilk</option>
              <option value="Vinamilk">Dutch Lady</option>
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
          <td><select name="loaisua" id="LoaiSua" value="<?php echo $row['loaisua'] ?>" style="height: 25px; width:170px; margin:5px 0;">
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
          <td><input type="text" name="trongluong" id="TrongLuong" value="<?php echo $row['trongluong'] ?>" style="height: 20px; margin:5px 0;"> (gr hoặc ml)</td>
      </tr>
      <tr>
          <td><label for="DonGia" style="margin: 0 10px;">Đơn giá: </label></td>
          <td><input type="text" name="dongia" id="DonGia" value="<?php echo $row['dongia'] ?>" style="height: 20px; margin:5px 0;"> (VNĐ)</td>
      </tr>
      <tr>
          <td><label for="TPDD" style="margin: 0 10px;">Thành phần dinh dưỡng: </label></td>
          <td>
              <textarea name="tpdd" id="TPDD" style="width: 300px;margin:5px 0; height:50px; resize : none;"><?php echo $row['tpdd'] ?></textarea>
          </td>
      </tr>
      <tr>
          <td><label for="LoiIch" style="margin: 0 10px;">Lợi ích: </label></td>
          <td>
              <textarea name="loiich" id="LoiIch" style="width: 300px; height:50px; resize : none;"><?php echo $row['loiich'] ?></textarea>
          </td>
      </tr>
      <tr>
          <td><label for="HinhAnh" style="margin: 0 10px;">Hình ảnh: </label></td>
          <td>
            <input type="file" name="hinhanh" id="HinhAnh" style="width: 300px;margin:5px 0;">
            <img src="modules/quanlySanPham/uploads/<?php echo $row['$hinhanh'] ?> width=150px">
          </td>

      </tr>
      <tr>
        <td style="margin: 0 10px;">Danh mục sản phẩm</td>
        <td>
            <select name="danhmucSP" style="height: 25px; width:170px; margin:5px 0;">
                <option value="0">Chọn danh mục</option>
                <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmucsanpham ORDER BY iddanhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        if($row_danhmuc['iddanhmuc'] == $row['iddanhmuc']){

                       
                ?>
                    <option selected value="<?php echo $row_danhmuc['iddanhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php
                        }else{
                ?>
                    <option value="<?php echo $row_danhmuc['iddanhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php           
                        }
                    }
                ?>
            </select>
        </td>
      </tr>
      <tr>
          <td><label for="GiamGia" style="margin: 0 10px;">Giảm giá: </label></td>
          <td><input type="number" value="<?php echo $row['giamgia'] ?>" min="0" max="100" step="1" id="GiamGia" name="giamgia" style="padding: 0 10px; height: 20px;">(%)</td>
      </tr>
      <tr>
          <td><label for="SoLuong" style="margin: 0 10px;">Số lượng đã bán: </label></td>
          <td><input type="number" value="<?php echo $row['soluong'] ?>" min="0" max="10000" step="1" id="SoLuong" name="soluong" style="padding: 0 3px; height: 20px;">(%)</td>
      </tr>
      <tr>
          <td style="text-align: center;" colspan="2">
              <input type="submit" name="suasp" value="Sửa sản phẩm" style="padding: 3px 5px; margin:10px 0; border-radius: 5px;">
          </td>
      </tr>
  </form>
  <?php
    }
  ?>
  </table>
  
</div>
