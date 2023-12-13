<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['tendangnhap'];
        $matkhau = md5($_POST['matkhau']);
        $sql = "SELECT * FROM tbl_admin WHERE aname='".$taikhoan."' AND apassword='".$matkhau."' ";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhapadmin'] = $taikhoan;
            header('Location:index.php');
        }else{
            echo "Tài khoản hoặc mật khẩu không đúng. Vui lòng đăng nhập lại";
            //header('Location:login.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG ĐĂNG NHẬP</title>
    <link rel="stylesheet" type="text/css" href="css/styleAdmin.css">
</head>

<body>
<div class="login">
<form method="POST" action="" autocomplete="off">    
    <h1>TRANG ĐĂNG NHẬP</h1>
    <table class="log">

        <tr>
            <td>Tên đăng nhập:</td>
            <td><input type="text" name="tendangnhap"></td>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td><input type="text" name="matkhau"></td>
        </tr>
        <tr>
            <td>    </td>
            <td>
                <input type="submit" name="dangnhap" value="Đăng nhập">
            </td>
        </tr>
    </table>
</form>
</div>
</body>