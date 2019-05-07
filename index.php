<?php
    include("Connect/Connect.php");
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Candy Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Category.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Product.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Cart.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="CSS/JS.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fuild ff">
        <?php
            include("View/Header.php");
        ?>
    </div>
    <!-- Hết menu-bar -->
    <div class="container ff">
        <?php
              include("User-Control/Control.php");
            
        ?>
        <!-- test -->
        
        <!-- test -->
        <div class="info-box">
            <?php
            include("View/BoxInfo.php");
            ?>
        </div>
        <?php
            include("View/Footer.php");
        ?>
    </div>
    <br>
    <br>
    
    <!-- Hết container -->
</body>

</html>