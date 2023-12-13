<?php
    session_start();
    if(!isset($_SESSION["dangnhapadmin"])){
        header('Location:login.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quan ly</title>
    <link rel="stylesheet" type="text/css" href="css/styleAdmin.css">
</head>

<body>
    <div class="wrapper">
        <?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/content.php");
            include("modules/footer.php")

        ?>
    </div>
</body>

</html>