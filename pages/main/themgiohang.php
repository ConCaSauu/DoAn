<?php
    session_start();
    include("../../admincp/config/config.php");
    //
    //tang giam so luong
    if(isset($_GET['cong'])){
        $i = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_pro){
            if($cart_pro['pid'] != $i){
                $pro[] = array('pname' => $cart_pro['pname'],'pprice' => $cart_pro['pprice'],'pid' => $cart_pro['pid'],'pquantity' => $cart_pro['pquantity'] ,'pimage' => $cart_pro['pimage']);
                $_SESSION['cart'] = $pro;
            }else{
                $tangsoluong = $cart_pro['pquantity'] + 1;
                if($cart_pro['pquantity'] < 10){
                    $pro[] = array('pname' => $cart_pro['pname'],'pprice' => $cart_pro['pprice'],'pid' => $cart_pro['pid'],'pquantity' => $tangsoluong ,'pimage' => $cart_pro['pimage']);
                }else{
                    $pro[] = array('pname' => $cart_pro['pname'],'pprice' => $cart_pro['pprice'],'pid' => $cart_pro['pid'],'pquantity' => $cart_pro['pquantity'] ,'pimage' => $cart_pro['pimage']);
                }
                $_SESSION['cart'] = $pro;
            }
        
        }
        header('Location:../../index.php?quanly=giohang');
    }

    if(isset($_GET['tru'])){
        $i = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_pro){
            if($cart_pro['pid'] != $i){
                $pro[] = array('pname' => $cart_pro['pname'],'pprice' => $cart_pro['pprice'],'pid' => $cart_pro['pid'],'pquantity' => $cart_pro['pquantity'] ,'pimage' => $cart_pro['pimage']);
                $_SESSION['cart'] = $pro;
            }else{
                $giamsoluong = $cart_pro['pquantity'] - 1;
                if($cart_pro['pquantity'] > 1){
                    $pro[] = array('pname' => $cart_pro['pname'],'pprice' => $cart_pro['pprice'],'pid' => $cart_pro['pid'],'pquantity' => $giamsoluong ,'pimage' => $cart_pro['pimage']);
                }else{
                    $pro[] = array('pname' => $cart_pro['pname'],'pprice' => $cart_pro['pprice'],'pid' => $cart_pro['pid'],'pquantity' => $cart_pro['pquantity'] ,'pimage' => $cart_pro['pimage']);
                }
                $_SESSION['cart'] = $pro;
            }
        
        }
        header('Location:../../index.php?quanly=giohang');
    }

    //xoa
    if(isset($_SESSION["cart"]) && isset($_GET['xoa1']) ==1){
        $i = $_GET['id'];
        foreach($_SESSION['cart'] as $cart_pro){
            if($cart_pro['pid'] != $i){
                $pro[] = array('pname' => $cart_pro['pname'],'pprice' => $cart_pro['pprice'],'pid' => $cart_pro['pid'],'pquantity' => $cart_pro['pquantity'] ,'pimage' => $cart_pro['pimage']);
            }
            $_SESSION['cart'] = $pro;
            header('Location:../../index.php?quanly=giohang');
        }
    }
    //xoa all
    if(isset($_SESSION['cart']) && isset($_GET['xoaall']) ==1){
        unset($_SESSION['cart']);
        header('Location:../../index.php?quanly=giohang');
    }
    //them san pham
    if(isset($_POST['themgiohang'])){
        $soluong = 1;
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_sanpham WHERE pid = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new_pro = array(array('pname' => $row['pname'],'pprice' => $row['pprice'],'pid' => $id,'pquantity' => $soluong,'pimage' => $row['pimage']));
            //kiem tra ton tai
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_pro){
                    //du lieu trung
                    if($cart_pro['pid'] == $id){
                        $pro[] = array('pname' => $cart_pro['pname'],'pprice' => $cart_pro['pprice'],'pid' => $cart_pro['pid'],'pquantity' => $cart_pro['pquantity'] +1,'pimage' => $cart_pro['pimage']);
                        $found = true;
                    //du lieu ko trung
                    }else{
                        $pro[] = array('pname' => $cart_pro['pname'],'pprice' => $cart_pro['pprice'],'pid' => $cart_pro['pid'],'pquantity' => $cart_pro['pquantity'] ,'pimage' => $cart_pro['pimage']);
                        
                    }
                }
                if($found == false){
                    $_SESSION['cart'] = array_merge($pro,$new_pro);
                }else{
                    $_SESSION['cart'] = $pro;
                }    
            }else{
                $_SESSION['cart'] = $new_pro;
            
            }
        }
        header('Location:../../index.php?quanly=giohang');
    }

?>