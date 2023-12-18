<?php
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
    $sql_new = "SELECT * FROM tbl_baiviet ORDER BY new_id DESC LIMIT $batdau,$ketthuc";
    $query_new = mysqli_query($mysqli, $sql_new);
?>
<p style="font-size: 35px; text-align: center; margin: 5px;">Các bài viết mới</p>
<ul class="list-new">
    <?php
    while($row_new = mysqli_fetch_array($query_new)) {
    ?>
        <li><a href="index.php?quanly=chitietbaiviet&id=<?php echo $row_new['new_id']?>">
            <p></p><?php echo $row_new['new_name']?></p>
            <p><?php echo $row_new['new_summary']?></p>
            </a>     
        </li>

    <?php
    }
    ?>
</ul>

<div style="clear: both"></div>
<?php
    $sql_page = mysqli_query($mysqli,"SELECT * FROM tbl_baiviet");
    $row_count = mysqli_num_rows($sql_page);
    $page = ceil($row_count/12);
?>
<ul class="pages">
    <?php
    for($i=1; $i <= $page; $i++){
    ?>
        <li><a <?php if($i == $tam){ echo 'style=" background-color: darksalmon"';}else{ echo '';}?> href="index.php?quanly=baiviet&trang=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php
    }
    ?>
    

</ul>