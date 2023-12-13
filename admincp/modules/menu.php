<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat'] ==1){
        unset($_SESSION['dangnhapadmin']);
        header('Location:login.php');
    }
?>
<ul class="admin-list">
    <li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
    <li><a href="index.php?action=quanlynguoidung&query=them">Quản lý người dùng</a></li>
    <li><a href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></li>
    <li><a href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a></li>
    <li><a style="text-decoration:underline; color:crimson" href="index.php?dangxuat=1">Đăng xuất: <?php echo $_SESSION['dangnhapadmin']?></a></li>
</ul>