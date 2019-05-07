<?php
    include('../Connect/Connect.php');
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Login Admin</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link href="../CSS/AdminCSS.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
        <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
        <script src='../CSS/JS.js' type="text/javascript"></script>
</head>
<body>
        <!-- <%--navbar admin--%> -->
        <div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span class="glyphicon glyphicon-arrow-left"></span></a>
                <div class="admin-info">
                    <img src="../IMG/AdminImage/AvaLogin.jpg" class="img-circle" />
                    <div class="admin-text">
                        <!-- <span><strong>Login : ADMIN</strong></span>
                        <br />
                        <a href="#"><span class="glyphicon glyphicon-log-out"></span><strong></strong> Đăng xuất</a>
                        <br />
                        <a href="#"><span class="glyphicon glyphicon-map-marker"></span> Đổi mật khẩu</a> -->
                    </div>
                </div>
                <div class="container-fluid">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="?page=ManageOrder" class="item-sidebar"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Đơn Hàng</a></li>
                        <li><a href="?page=ManageProduct" class="item-sidebar"><span class="glyphicon glyphicon-align-justify"></span>&nbsp;Danh mục Sản Phẩm</a></li>
                        <li><a href="?page=AddNewProduct" class="item-sidebar"><span class="glyphicon glyphicon-plus"></span>&nbsp;Thêm sản phẩm</a></li>
                        <li><a href="?page=ManageCategory" class="item-sidebar"><span class="glyphicon glyphicon-tags"></span>&nbsp;Quản lý danh mục</a></li>
                        <li><a href="?page=ManageColor" class="item-sidebar"><span class="glyphicon glyphicon-leaf"></span>&nbsp;Quản lý màu</a></li>
                        <li><a href="?page=ManageSize" class="item-sidebar"><span class="glyphicon glyphicon-resize-full"></span>&nbsp;Quản lý Size</a></li>
                        <li><a href="?page=Member" class="item-sidebar"><span class="glyphicon glyphicon-user"></span>&nbsp;Thành viên</a></li>
                        <li><a href="?page=Member" class="item-sidebar"><span class="glyphicon glyphicon-record"></span>&nbsp;Nhân viên</a></li>
                        <li><a href="?page=Home" class="item-sidebar"><span class="glyphicon glyphicon-stats"></span>&nbsp;Thống Kê</a></li>
                        <li><a href="?page=Contact" class="item-sidebar"><span class="glyphicon glyphicon-paperclip"></span>&nbsp;Liên hệ</a></li>
                    </ul>
                </div>
            </div>
 
            <div id="main" class="">
                <nav class="navbar navbar-default container-fluid">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#"><span onclick="openNav()" class="glyphicon glyphicon-align-justify "></span></a>
                            <a href="#" class="navbar-brand">Candy Shop</a>
                        </div>
                        <div class="">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../Home.aspx"><span class="glyphicon glyphicon-home"></span><strong> Shop</strong> </a></li>
                                <li>
                                        <a href="../Home.aspx"><span class="glyphicon glyphicon-log-out"></span><strong> Thoát</strong> </a>  </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- <%--content sb admin--%> -->
                <div class="container-fluid">
                    <?php
                        include('../User-Control/Control.php');
                    ?>
                </div>
                <!-- <%--footer--%> -->
                <div class="container-fluid">
                    <h5 class="text-center text-primary"><span class="copyleft">&copy;</span> Candy Shop</h5>
                </div>
            </div>
        </div>
</body>
</html>
