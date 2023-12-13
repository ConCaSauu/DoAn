<?php
    if(isset($_POST['dangnhap'])){
        $uemail = $_POST['email'];
        $upassword = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_user WHERE uemail='".$uemail."' AND upassword='".$upassword."' ";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        $ten = mysqli_fetch_array($row);
        if($count>0){
            $_SESSION['dangnhap'] = $ten['uname'];
            $_SESSION['uid'] = $ten['uid'];
            header('Location:index.php');
        }else{
            echo '<p style="font-size:25px; color:red">Email hoặc mật khẩu không đúng. Vui lòng đăng nhập lại</p>';
        }
    }
?>
<form method="POST" action="" autocomplete="off">    
    <h1>ĐĂNG NHẬP</h1>
    <table class="log">

        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" ></td>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td><input type="text" name="password" ></td>
        </tr>

    </table>
    <p class="dangnhap-button"><input type="submit" name="dangnhap" value="Đăng nhập"></p>
</form>