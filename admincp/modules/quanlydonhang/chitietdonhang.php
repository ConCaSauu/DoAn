<?php
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM tbl_order,tbl_sanpham WHERE cartcode = '$code' AND tbl_order.pid=tbl_sanpham.pid ORDER BY 'oid'";
        $query = mysqli_query($mysqli,$sql);
        ;
    }
?>
<table class="chitiet" style="width:100%;" border=1>
    <tr>
        <th>Mã đơn hàng</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
    </tr>
    <?php
    $tongtien = 0;
        while($row = mysqli_fetch_array($query)){
            $thanhtien = $row['pprice'] * $row['soluong'];
            $tongtien += $thanhtien;
    ?>
    <tr>
        <td><?php echo $row['cartcode']?></td>
        <td><?php echo $row['pid']?></td>
        <td><?php echo $row['pname']?></td>
        <td><image width="200px" src="modules/quanlysanpham/uploads/<?php echo $row['pimage']?>"></td>
        <td><?php echo number_format($row['pprice'],0,',','.').'vnd'?></td>
        <td><?php echo $row['soluong']?></td>
        <td><?php echo number_format($thanhtien,0,',','.').'vnd' ?></td>
    </tr>
    <?php
        }
    ?>
    <tr>
        <td colspan="6"><p style="font-weight:bold; font-size: 25px;">TỔNG TIỀN</p></td>
        <td><?php echo number_format($tongtien,0,',','.').'vnd' ?></td>
    </tr>
</table>
