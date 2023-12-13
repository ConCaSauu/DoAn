<?php
    if(isset($_POST['dangkythanhvien'])){
        $uname = $_POST['uname'];
        $uphone = $_POST['uphone'];
        $uemail = $_POST['uemail'];
        $upassword = md5($_POST['upassword']);
        $uaddress = $_POST['uaddress'];
        $sql_dangky = "INSERT INTO tbl_user(uname,uphone,uemail,upassword,uaddress) VALUES ('".$uname."','".$uphone."','".$uemail."','".$upassword."','".$uaddress."')";
        $query = mysqli_query($mysqli,$sql_dangky);
        if($query){
                $_SESSION['dangky'] = $uname;
                $_SESSION['uid'] = mysqli_insert_id($mysqli);
                echo '<p style="font: size 25px; color: green;"> Bạn đã đăng ký thành công</p>';
        }
    }

?>
<p  style="width:60%; font-weight:bold; font-size:30px; margin:0">Đăng ký người dùng</p>
<form action="" method="POST" autocomplete="off">
    <table border="1" width="60%" style="margin:15px">
        <tr>
            <td>Họ và tên:</td>
            <td><input type="text" size="35px" name="uname"></td>
        </tr>
        <tr>
            <td>Số điện thoại:</td>
            <td><input type="text" size="35px" name="uphone"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" size="35px" name="uemail"></td>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td><input type="text" size="35px" name="upassword"></td>
        </tr>
        <tr>
            <td>Địa chỉ:</td>
            <td><input type="text" size="35px" name="uaddress"></td>
        </tr>
    </table>
    <p class="dangky-button"><input type="submit" name="dangkythanhvien" value="Đăng ký"></p>
</form>
