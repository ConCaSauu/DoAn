<p>Them san pham</p>
<table>
  <form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">  
    <tr>
      <td>Ten san pham:</td>
      <td><input type="text" name="pname"></td>
    </tr>
    <tr>
      <td>Gia san pham:</td>
      <td><input type="number" name="pprice"></td>
    </tr>
    <tr>
      <td>So luong:</td>
      <td><input type="number" name="pquantity"></td>
    </tr>
    <tr>
      <td>Danh muc san pham:</td>
      <td>
          <select name="cid">
            <?php
              $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY cid DESC";
              $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){       
            ?>
              <option value="<?php echo $row_danhmuc['cid'] ?>"><?php echo $row_danhmuc['cname'] ?></option>

            <?php
              }
            ?>
          </select>
      </td>
    </tr>
    <tr>
      <td>Trang thai</td>
      <td>
          <select name="pstatus">
            <option value="1">Kích hoạt</option>
            <option value="0">Ẩn</option>
          </select>
      </td>
    </tr>
    <tr>
      <td>Hinh anh:</td>
      <td><input type="file" name="pimage"></td>
    </tr>

    <tr>
      <td></td>
      <td><input type="submit" name="themsanpham" value="Thêm"></td>
    </tr>
  </form>
</table>