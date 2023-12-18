<?php
    session_start();
    //include('../../../admincp/config/config.php');
//them binh luan
    if(isset($_POST['comment'])){
        $binhluan = $_POST['binhluan'];
        $time = getdate();
        $date = $time['year']."/".$time['mon']."/".$time['mday'];
        if(isset($_SESSION['dangky'])){
            $sql_com = "INSERT INTO tbl_binhluan(uname,com_text,com_date) VALUES('$_SESSION[dangky]','".$binhluan."','".$date."')";
            $query_com = mysqli_query($mysqli,$sql_com);
        }elseif(isset($_SESSION['dangnhap'])){
            $sql_com = "INSERT INTO tbl_binhluan(uname,com_text,com_date) VALUES('$_SESSION[dangnhap]','".$binhluan."','".$date."')";
            $query_com = mysqli_query($mysqli,$sql_com);
        }else{}
        header('Location:../../../index.php');
    }
?>