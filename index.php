<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán sữa</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
</head>
<body>
    <div class="wrapper">
        <?php
            session_start();
           
            include("admincp/config/config.php");
            include("pages/header.php");
            include("pages/menu.php");
            include("pages/main.php");
            include("pages/footer.php");

        ?>
    
    </div>
</body>
</html>