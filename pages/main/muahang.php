<?php
    $id = $_SESSION['uid'];
    $code = rand(1000000,9999999);
    $insert_cart = "INSERT INTO tbl_cart(uid,cartcode,cartstatus) VALUES('".$id."','".$code."','1')";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        foreach($_SESSION['cart'] as $key => $value){
            $pid = $value['pid'];
            $soluong = $value['pquantity'];
            $oder_query = "INSERT INTO tbl_order(pid,uid,cartcode,soluong) VALUES('".$pid."','".$id."','".$code."','".$soluong."')";
            mysqli_query($mysqli,$oder_query);
        }
    }
    unset($_SESSION['cart']);
    header('Location:index.php?quanly=camon')
?>