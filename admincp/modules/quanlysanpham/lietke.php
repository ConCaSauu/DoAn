<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.cid = tbl_danhmuc.cid ORDER BY pid DESC";
    $query_lietke = mysqli_query($mysqli, $sql_lietke_sp);

?>
<table class="quanlysp" style="width: 100%"; border="1" style="border-collapse: collapse;"; >
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Danh mục</th>
        <th>Trạng thái</th>
        <th style="width:250px";>Ảnh sản phẩm</th>
        <th>Quản lý</th>
    </tr>
    <?php
        while ($row = mysqli_fetch_array($query_lietke)){

    ?>
    <tr>
        <td> <?php echo $row['pid'] ?></td>
        <td> <?php echo $row['pname'] ?></td>
        <td> <?php echo $row['pprice']."vnd" ?></td>
        <td> <?php echo $row['pquantity'] ?></td>
        <td> <?php echo $row['cid'] ?></td>
        <td> <?php if( $row['pstatus'] == 1){
                echo 'Kích hoạt';    
            }else{
                echo 'Ẩn';
            }
        ?>
        </td>
        <td><img width="250px" src="modules/quanlysanpham/uploads/<?php echo $row['pimage'] ?>"></td>
        <td>
            <a href="modules/quanlysanpham/xuly.php?pid=<?php echo $row['pid'] ?>">Xóa</a> |
            <a href="?action=quanlysanpham&query=sua&pid=<?php echo $row['pid'] ?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>