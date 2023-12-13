<div class="sidebar">
        <p 
            style="font-size: 25px; font-weight: bold;
            border-bottom: 5px solid darksalmon;
            padding-top: 2px; padding-bottom: 4px; margin: 0;">
        Danh mục sản phẩm
        </p>
        <ul class="list-cat">
        <?php
            while ($row_cat = mysqli_fetch_array($query_cat)) {
        ?>
            <li><a href="index.php?quanly=danhmuc&id=<?php echo $row_cat['cid']?>"> <?php echo $row_cat['cname'] ?></a></li>
        <?php
            }
        ?>
        </ul>
</div>