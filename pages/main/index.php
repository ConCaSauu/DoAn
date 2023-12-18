<?php
    //include('../../admincp/config/config.php');
    if(isset($_GET['trang'])){
        $tam = $_GET['trang'];
    }else{
        $tam = 1;
    }
    if($tam == ''|| $tam == '1'){
        $batdau = 0;
    }else{
        $batdau = ($tam*12) - 12;
    }
    $ketthuc = $batdau + 12;
    $sql_pro = "SELECT * FROM tbl_sanpham ORDER BY pid DESC LIMIT $batdau,$ketthuc";
    $query_pro = mysqli_query($mysqli, $sql_pro);
?>
<p style="font-size: 35px; text-align: center; margin: 5px;">Các sản phẩm mới</p>
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

<div style="clear: both"></div>
<?php
    $sql_page = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
    $row_count = mysqli_num_rows($sql_page);
    $page = ceil($row_count/12);
?>
<ul class="pages">
    <?php
    for($i=1; $i <= $page; $i++){
    ?>
        <li><a <?php if($i == $tam){ echo 'style=" background-color: darksalmon"';}else{ echo '';}?> href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php
    }
    ?>
    

</ul>