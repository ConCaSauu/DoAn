<div class="content">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $t = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $t = '';
            $query = '';    
        }    
        if($t == 'quanlysanpham'&& $query == 'them'){
            include("modules/quanlysanpham/them.php");
            include("modules/quanlysanpham/lietke.php");
        }elseif($t == 'quanlysanpham'&& $query == 'sua'){
            include("modules/quanlysanpham/sua.php");
        }elseif($t == 'quanlydonhang'&& $query == 'lietke'){
            include("modules/quanlydonhang/lietke.php");
        }elseif($t == 'chitietdonhang'&& $query == 'xemdonhang'){
            include("modules/quanlydonhang/chitietdonhang.php");
        }elseif($t == 'quanlybaiviet'&& $query == 'them'){
            include("modules/quanlybaiviet/them.php");
            include("modules/quanlybaiviet/lietke.php");
        }elseif($t == 'quanlybaiviet'&& $query == 'sua'){
            include("modules/quanlybaiviet/sua.php");
        }else{
            include("modules/dashboard.php");
        }       
    ?>
</div>