<?php
    $sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE new_id = '$_GET[id]' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua_bv);

?>
<p>Sửa bài viết</p>
<table>
    <?php
        while ($row = mysqli_fetch_array($query_sua)){
     
    ?>
    <form method="POST" action="modules/quanlybaiviet/xuly.php?id=<?php echo $row['new_id']?>">  
        <tr>
            <td>Tên bài viết:</td>
            <td><input width="600px" type="text" value="<?php echo $row['new_name'] ?>" name="tenbaiviet"></td>
        </tr>
        <tr>
            <td>Tóm tắt:</td>
            <td><input type="text" value="<?php echo $row['new_summary'] ?>" name="tomtat"></td>
        </tr>
        <tr>
            <td>Nội dung:</td>
            <td><textarea style="width:601px;height:300px" name="noidung"><?php echo $row['new_content'] ?></textarea></td>
        </tr>    
        <tr>
            <td></td>
            <td><input type="submit" name="suabaiviet" value="Sửa"></td>
        </tr>
    </form>
    <?php
        }
    ?>
</table>