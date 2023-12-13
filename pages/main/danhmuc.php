<?php
    if(isset($_GET['id'])){
        $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.cid= '$_GET[id]' ORDER BY pid DESC";
        $query_pro = mysqli_query($mysqli, $sql_pro);

        
        $sql_cat = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.cid= '$_GET[id]' ORDER BY cid DESC";
        $query_cat = mysqli_query($mysqli, $sql_cat);
        while($row_ten = mysqli_fetch_array($query_cat)){
?>
            <p style="font-size: 35px;"> <?php echo $row_ten['cname']?></p>
<?php
        }
    }    

?>   

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

