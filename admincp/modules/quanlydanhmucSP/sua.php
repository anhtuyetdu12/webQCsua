<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmucsanpham WHERE iddanhmuc ='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
?>

<div class="list" style="text-align: center; margin: 50px 200px 0;width: 500px;">
  <h3>Sửa danh mục sản phẩm</h3>
  <table border="1" style="border-collapse: collapse; width: 100%; border: 5px solid #f89b9b;">
    <form action="modules/quanlydanhmucSP/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">     
    <?php
      while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
    ?>
    <tr>
          <td colspan="2" style="height: 50px; font-size: 1.6rem; font-weight: 600;color: #db1165;">Điền danh mục sản phẩm</td>
      </tr>
      <tr style="height: 50px;">
          <td>Tên danh mục:</td>
          <td><input type="text" value="<?php echo $dong['tendanhmuc']?>" name="tendanhmuc" style="width: 90%; padding: 5px 0;"></td>
      </tr>
      <tr style="height: 50px;">
          <td>Thứ tự:</td>
          <td><input type="text" value="<?php echo $dong['thutu']?>" name="thutu" name="thutu" style="width: 90%; padding: 5px 0;"></td>
      </tr>
      <tr style="height: 50px;">
          <td colspan="2" style="text-align: center;">
              <input type="submit" value="Sửa danh mục sản phẩm" name="suadanhmuc" style="margin: 5px 0;padding: 5px 5px;background-color: #f89b9b; border: none; border-radius: 3px;font-size: 1rem; font-weight: bold;">
          </td>
      </tr>
      <?php
        }
        ?>
    </form>
  </table>
</div>