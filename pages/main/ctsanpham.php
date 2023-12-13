
<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.cid=tbl_danhmuc.cid AND tbl_sanpham.pid='$_GET[id]' ORDER BY tbl_sanpham.pid  LIMIT 1";
    $query_chitiet = mysqli_query($mysqli, $sql_chitiet);
    while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
<div class="pro-image">
    <img width="90%" src="admincp/modules/quanlysanpham/uploads/<?php echo $row_chitiet['pimage']?>">
</div>
<form method="POST" action="pages/main/themgiohang.php?id=<?php echo $row_chitiet['pid']?>">
    <div class="pro-desc">
        <h1 style="margin-top:0">Tên sản phẩm: <?php echo $row_chitiet['pname']?></h1>
        <p style="font-size: 30px;">Giá sản phẩm:</p>
        <p style="color: red; font-size:35px;"><?php echo number_format($row_chitiet['pprice'],0,',','.').'vnđ'?></p>
        <p style="font-size: 30px;">Số sản phẩm còn lại: <?php echo $row_chitiet['pquantity']?></p>
        <p style="font-size: 30px;">Danh mục sản phẩm: <?php echo $row_chitiet['cname']?></p>
        <p><input class="themgiohang" name="themgiohang" type="submit" value="Cho sản phẩm vào giỏ"></p> 

    </div>
</form>
<?php
    }
?>