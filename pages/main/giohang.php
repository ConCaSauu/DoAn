
<table class="giohang" border="1">
    <tr>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng mua</th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
    </tr>
    <?php
        if(isset($_SESSION['cart'])){
            $tongtien = 0;
            foreach($_SESSION['cart'] as $cart_pro){
                
                $thanhtien = $cart_pro['pprice'] * $cart_pro['pquantity'];
                $tongtien += $thanhtien;
    ?>
    
    <tr>
        <td><?php echo $cart_pro['pname']?></td>
        <td><image width="100px" src="admincp/modules/quanlysanpham/uploads/<?php echo $cart_pro['pimage']?>"></td>
        <td><?php echo number_format($cart_pro['pprice'],0,',','.').'vnđ'?></td>
        <td>
            <a href="pages/main/themgiohang.php?cong=<?php echo $cart_pro['pid']?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
            <?php echo $cart_pro['pquantity']?>
            <a href="pages/main/themgiohang.php?tru=<?php echo $cart_pro['pid']?>"><i class="fa fa-minus" aria-hidden="true"></i></a>
        </td>
        <td><?php echo number_format($thanhtien,0,',','.').'vnđ'?></td>
        <td><a class="xoa" style="color: black; text-decoration:none" href="pages/main/themgiohang.php?xoa1=1&id=<?php echo $cart_pro['pid']?>">Xóa</a></td>
    </tr>
    <?php
            }
    ?>            
    <tr>
        <td colspan="6" >
            <p class="xoagiohang" style="float: right;"><a href="pages/main/themgiohang.php?xoaall=1">Xóa toàn bộ giỏ hàng</a></p></br>
            <p style="font-size:30px;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ'?></p>
            <?php
            if(isset($_SESSION['dangky'])){
            ?>
                <p><a href="index.php?quanly=muahang"><i class="fa fa-shopping-cart" aria-hidden="true">Đặt hàng ngay</i></a></p>
            <?php
            }elseif(isset($_SESSION['dangnhap'])){
            ?>
                <p><a href="index.php?quanly=muahang"><i class="fa fa-shopping-cart" aria-hidden="true">Đặt hàng ngay</i></a></p>
            <?php
            }else{
            ?>
                <p><a href="index.php?quanly=dangky"><i class="fa fa-shopping-cart" aria-hidden="true">Đăng ký ngay</i></a></p>
            <?php
            }
            ?>
        </td>
    </tr>

    <?php        
        }else{
    ?>
    <tr>
        <td colspan="6"><p style="font-size:30px">Hiện tại chưa có sản phẩm nào trong giỏ</p></td>
    </tr>
    <?php
        }
    ?>
</table>
