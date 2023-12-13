<?php
include('../../config/config.php');
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pquantity = $_POST['pquantity'];
    $pstatus = $_POST['pstatus'];
    $pimage = $_FILES['pimage']['name'];
    $pimage_tmp = $_FILES['pimage']['tmp_name'];
    $cid = $_POST['cid'];     
    //them
    if(isset( $_POST['themsanpham'] )){
        $sql_them = "INSERT INTO  tbl_sanpham(pname,pprice,pquantity,cid,pstatus,pimage) VALUES ('".$pname."','".$pprice."','".$pquantity."','".$cid."','".$pstatus."','".$pimage."')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($pimage_tmp,'uploads/'.$pimage);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    //sua    
    }elseif(isset( $_POST['suasanpham'] )){
        if($pimage != ''){
            move_uploaded_file($pimage_tmp,'uploads/'.$pimage);
            $sql = "SELECT * FROM tbl_sanpham WHERE pid = '$_GET[pid]' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while ($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['pimage']);
            }
            $sql_sua = "UPDATE tbl_sanpham SET pname = '".$pname."', pprice = '".$pprice."', pquantity = '".$pquantity."', cid = '".$cid."', pstatus = '".$pstatus."', pimage = '".$pimage."' WHERE pid = '$_GET[pid]'";
            
        }else{
            $sql_sua = "UPDATE tbl_sanpham SET pname = '".$pname."', pprice = '".$pprice."', pquantity = '".$pquantity."', cid = '".$cid."', pstatus = '".$pstatus."' WHERE pid = '$_GET[pid]'";
        }
        mysqli_query($mysqli, $sql_sua);     
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }else{
        $id = $_GET['pid'];
        $sql = "SELECT * FROM tbl_sanpham WHERE pid = '$id' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while ($row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['pimage']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE pid = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }    
?>