<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat'] ==1){
        unset($_SESSION['dangky']);
        unset($_SESSION['dangnhap']);
        unset($_SESSION['uid']);
    }
?>
<div class="header">
    <div class="bannertop1">
        <img src="images/bannertop.webp">
    </div>
    <div class="bannertop2">
        <?php
            if(isset($_SESSION['dangky'])){
                echo '<p style="color:red;">Xin chào '.$_SESSION['dangky'].'!</p>';
                echo '<p><a style="color:black;" href="?dangxuat=1">Đăng xuất</a></p>';
            }elseif(isset($_SESSION['dangnhap'])){
                echo '<p style="color:red;">Xin chào '.$_SESSION['dangnhap'].'!</p>';
                echo '<p><a style="color:black;" href="?dangxuat=1">Đăng xuất</a></p>';
            }else{
                echo '<p><a href="?quanly=dangky">Đăng ký</a></p>';
                echo '<p><a href="?quanly=dangnhap">Đăng nhập</a></p>';
            }
        ?>      
    </div>
</div>