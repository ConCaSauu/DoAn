<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }else{
        $tukhoa = '';
    }
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE pname LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
<p style="font-size: 25px; text-align: left; margin: 0 10px;">Từ khóa tìm kiếm : <?php echo $tukhoa?></p>
<ul class="list-pro">
    <?php
    while($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
        <li><a href="index.php?quanly=chitietsanpham&id=<?php echo $row_pro['pid']?>">
            <img height="200px" src="admincp/modules/quanlysanpham/uploads/<?php echo $row_pro['pimage']?>">
            <p class="pro-name"><?php echo $row_pro['pname']?></p>
            <p class="pro-price"><?php echo number_format($row_pro['pprice'],0,',','.').'vnd'?></p>
            </a>     
        </li>

    <?php
    }
    ?>
</ul>