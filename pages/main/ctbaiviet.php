<?php
    if(isset($_GET['id'])){
        $sql_new = "SELECT * FROM tbl_baiviet WHERE new_id= '$_GET[id]' LIMIT 1";
        $query_new = mysqli_query($mysqli, $sql_new);         
    }
?>  

<div class="list-pro">
    <?php
    while($row_new = mysqli_fetch_array($query_new)) {
    ?>
        <h2><?php echo $row_new['new_name']?></h2>
        <p style="margin-left:20px; text-align:left"><?php echo $row_new['new_content']?></p>
    <?php
    }
    ?>
</div>