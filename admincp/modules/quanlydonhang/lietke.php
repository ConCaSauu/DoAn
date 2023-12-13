<?php
    $sql_lietke_dh = "SELECT * FROM tbl_cart, tbl_user WHERE tbl_cart.uid = tbl_user.uid ORDER BY 'uid' DESC";
    $query_lietke = mysqli_query($mysqli, $sql_lietke_dh);

?>
<table class="quanlysp" style="width: 100%"; border="1" style="border-collapse: collapse;"; >
    <tr>
        <th>Id giỏ hàng</th>
        <th>Mã giỏ hàng</th>
        <th>Mã khách hàng</th>
        <th>Tên khách hàng</th>
        <th>SĐT</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Quản lý</th>
    </tr>
    <?php
        while ($row = mysqli_fetch_array($query_lietke)){

    ?>
    <tr>
        <td> <?php echo $row['cartid'] ?></td>
        <td> <?php echo $row['cartcode'] ?></td>
        <td> <?php echo $row['uid'] ?></td>
        <td> <?php echo $row['uname'] ?></td>
        <td> <?php echo $row['uphone'] ?></td>
        <td> <?php echo $row['uemail'] ?></td>
        <td> <?php echo $row['uaddress'] ?></td>
        <td>
            <a href="index.php?action=chitietdonhang&query=xemdonhang&code=<?php echo $row['cartcode'] ?>">Xem chi tiết đơn hàng</a> 
        </td>
    </tr>
    <?php
        }
    ?>
</table>