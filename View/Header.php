<header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.php">
                            <img src="Asset/Image/logo.png" />
</a>
                        </div>
                    </div>
                    <div class="col-sm-5 header-control">
                        <div class="input-group">
                            <input id="email" type="text" class="form-control" name="email" placeholder="Tìm kiếm">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-4 header-control">
                        <a class="btn btn-success" href="Admin/index.php"><i class="fa fa-user"></i> Đăng nhập</a>
                        <a class="btn btn-info" href="?page=Cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
                        <button class="btn btn-danger"> 19002111</button>
                    </div>
                </div>
                <div class="row header-menu">
                    <div class="col-sm-3">
                        <div class="product-cat-toggle">
                            <a href="#">
                                <i class="fa fa-bars">
                                </i>
                                <span>Danh mục sản phẩm</span>
                            </a>
                        </div>
                        <div class="product-category-list">
                            <ul>
                                <?php
                                    $query = "SELECT * FROM category";
                                    $temp = mysqli_query($conn,$query);
                                    while($arrCategory = mysqli_fetch_assoc($temp)){
                                        echo '<li><a href="?page=Category&CategoryID='.$arrCategory['CategoryID'].'">'.$arrCategory['CategoryName'].'</a></li>';
                                    }
                                ?>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="main-menu-wrapper">
                            <ul>
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li><a href="?page=Intro" class="fw-600">GIỚI THIỆU</a></li>
                                <li><a href="#" class="fw-600">SALE</a></li>
                                <li><a href="#" class="fw-600">HƯỚNG DẪN MUA HÀNG</a></li>
                                <li><a href="#" class="fw-600">LIÊN HỆ</a></li>
                                <li><a href="#" class="fw-600">LIÊN HỆ MUA SỈ</a></li>
                                <li><a href="#" class="fw-600">BLOG VITAMIN</a></li>
                            </ul>
                        </div>
                        
                        <div class="banner">
                            <img src="Asset/Image/vitamin-house-1547715697.jpg">
                        </div>
                    </div>
                </div>
        </header>