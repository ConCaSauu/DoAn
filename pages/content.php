<?php
    $sql_cat = "SELECT * FROM tbl_danhmuc ORDER BY cid DESC";
    $query_cat = mysqli_query($mysqli, $sql_cat);
?>
<div class="content">
    <?php
        include("sidebar/sidebar.php");
    ?>
    <div class="main">
        
    <?php
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam = '';
        }
        if($tam =='danhmuc' ){
            include("main/danhmuc.php");
        }elseif($tam =='sanpham' ){
            include("main/thumbnail.php");
            include("main/index.php");
            include("main/binhluan/binhluan.php");           
        }elseif($tam =='baiviet'){
            include("main/baiviet.php");
        }elseif($tam =='giohang'){
            include("main/giohang.php");
        }elseif($tam =='lienhe'){
            include("main/lienhe.php");
        }elseif($tam =='chitietsanpham'){
            include("main/ctsanpham.php");
        }elseif($tam =='timkiem'){
            include("main/timkiem.php");
        }elseif($tam =='dangky'){
            include("main/dangky.php");
        }elseif($tam =='muahang'){
            include("main/muahang.php");
        }elseif($tam =='dangnhap'){
            include("main/dangnhap.php");
        }elseif($tam =='camon'){
            include("main/thank.php");
        }elseif($tam =='chitietbaiviet'){
            include("main/ctbaiviet.php");
        }else{
            include("main/thumbnail.php");
            include("main/index.php");
            include("main/binhluan/binhluan.php");
        }    
    ?>    
    </div>
</div>