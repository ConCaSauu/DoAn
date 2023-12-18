<?php
include('../../config/config.php');
    $tenbaiviet = $_POST['tenbaiviet'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung']; 
    //them
    if(isset( $_POST['thembaiviet'] )){
        $sql_them = "INSERT INTO  tbl_baiviet(new_name,new_summary,new_content) VALUES ('".$tenbaiviet."','".$tomtat."','".$noidung."')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlybaiviet&query=them');
    
    //sua    
    }elseif(isset( $_POST['suabaiviet'] )){   
        $sql_sua = "UPDATE tbl_baiviet SET new_name = '".$tenbaiviet."', new_summary = '".$tomtat."', new_content = '".$noidung."' WHERE new_id = '$_GET[id]'";      
        mysqli_query($mysqli, $sql_sua);     
        header('Location:../../index.php?action=quanlybaiviet&query=them');
    
    //xoa
    }else{
        $sql_xoa = "DELETE FROM tbl_baiviet WHERE new_id = '$_GET[id]'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlybaiviet&query=them');
    }    
?>