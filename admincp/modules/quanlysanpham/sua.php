<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE pid = '$_GET[pid]' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua_sp);

?>
<p>Sua san pham</p>
<table>
    <?php
        while ($row = mysqli_fetch_array($query_sua)){
     
    ?>
    <form method="POST" action="modules/quanlysanpham/xuly.php?pid=<?php echo $row['pid']?>"  enctype="multipart/form-data">  
        <tr>
            <td>Ten san pham:</td>
            <td><input type="text" value="<?php echo $row['pname'] ?>" name="pname"></td>
        </tr>
        <tr>
            <td>Gia san pham:</td>
            <td><input type="number" value="<?php echo $row['pprice'] ?>" name="pprice"></td>
        </tr>
        <tr>
            <td>So luong:</td>
            <td><input type="number" value="<?php echo $row['pquantity'] ?>" name="pquantity"></td>
        </tr>    
        <tr>
            <td>Danh muc san pham:</td>       
            <td>
                <select name="cid">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY cid DESC";
                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){     
                            if($row_danhmuc['cid'] == $row['cid']){  
                    ?>
                    <option selected value="<?php echo $row_danhmuc['cid'] ?>"><?php echo $row_danhmuc['cname'] ?></option>
                    <?php
                            }else{   
                    ?> 
                    <option value="<?php echo $row_danhmuc['cid'] ?>"><?php echo $row_danhmuc['cname'] ?></option>
                    <?php            
                            }   
                    ?>
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
                    <?php
                    if($row['pstatus'] == 1){
                    ?>
                        <option value="1" selected>Kích hoạt</option>
                        <option value="0">Ẩn</option>
                    <?php
                    }else{
                    ?>
                        <option value="1">Kích hoạt</option>
                        <option value="0" selected>Ẩn</option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hinh anh:</td>
            <td>
                <input type="file" value="<?php echo $row['pimage'] ?>" name="pimage">
                <img width="250px" src="modules/quanlysanpham/uploads/<?php echo $row['pimage'] ?>">
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="suasanpham" value="Sửa"></td>
        </tr>
    </form>
    <?php
        }
    ?>
</table>