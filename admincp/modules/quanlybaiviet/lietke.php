<?php
    $sql_lietke_bv = "SELECT * FROM tbl_baiviet ORDER BY new_id DESC";
    $query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);

?>
<table class="quanlysp" style="width: 100%"; border="1" style="border-collapse: collapse;"; >
    <tr>
        <th>Id</th>
        <th>Tên bài viết</th>
        <th>Tóm tắt</th>
        <th>Quản lý</th>
    </tr>
    <?php
        while ($row = mysqli_fetch_array($query_lietke_bv)){

    ?>
    <tr>
        <td> <?php echo $row['new_id'] ?></td>
        <td> <?php echo $row['new_name'] ?></td>
        <td> <?php echo $row['new_summary'] ?></td>
        <td>
            <a href="?action=quanlybaiviet&query=sua&id=<?php echo $row['new_id'] ?>">Sửa</a> |
            <a href="modules/quanlybaiviet/xuly.php?id=<?php echo $row['new_id'] ?>">Xóa</a> 
        </td>
    </tr>
    <?php
        }
    ?>
</table>