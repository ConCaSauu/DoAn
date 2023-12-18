<div style="clear: both;"></div>
<?php
    
    //hien thi binh luan
    echo '<p style="font-weight:bold; font-size:20px; text-align:left">Bình luận khách hàng</p>';
    $sql_lietke_com = "SELECT * FROM tbl_binhluan ORDER BY com_id DESC";
    $query_lietke = mysqli_query($mysqli,$sql_lietke_com);
    while($row = mysqli_fetch_array($query_lietke)){
?>
        <ul class="binhluan">
            <li>
                <p style="font-weight:bold"><?php echo "Khách hàng ".$row['uname']?></p>
                <p><?php echo "vào lúc ".$row['com_date']?></p>
                <p><?php echo "đã bình luận "?></p>
                <p><?php echo $row['com_text']?></p>
            </li>
        </ul>
<?php
    }

    if(isset($_SESSION['dangky']) || isset($_SESSION['dangnhap'])){
?>
    
    <table class="binhluan" width="100%">
        <form method="POST" action="pages/main/binhluan/xuly.php">
            <tr>
                <td><p>Bình luận một điều gì đó về chúng tôi:</p></td>
                <td><input type="text" name="binhluan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="comment" value="Gửi bình luận"></td>
            </tr>
        </form>
    </table>
    
<?php
    }else{}
?>