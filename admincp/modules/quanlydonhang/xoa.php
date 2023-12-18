<?php
    include('../../config/config.php');
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql_order = "DELETE FROM tbl_order WHERE tbl_order.cartcode = '".$code."'";
        $query_order = mysqli_query($mysqli,$sql_order);
        if($query_order){
            $sql_cart = "DELETE FROM tbl_cart WHERE tbl_cart.cartcode = '".$code."'";
            $query_cart = mysqli_query($mysqli, $sql_cart);
        }
        header('Location:../../index.php?action=quanlydonhang&query=lietke');
    }
?>