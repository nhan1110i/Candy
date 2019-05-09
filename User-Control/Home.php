<?php
            $query = "SELECT * FROM category LIMIT 3";
            $temp = mysqli_query($conn,$query);
            while($arrCategory = mysqli_fetch_assoc($temp)){
                
            
        ?> 
        <div class="row">
        
            <div class="col-sm-3">
                <div class="section-title">
                    <a href="#">
                        <span><?php echo $arrCategory['CategoryName']; ?></span>
                    </a>
                </div>
                <div class="product-cat-image">
                    <a href="#"><img src="Asset/Image/qua-tang-1548073943.jpg" /></a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="product-category-tabs">
                    
                </div>
                <div class="row tab-content">
                    <?php
                        $query2 = 'SELECT * FROM product  WHERE ProductCategoryID='.$arrCategory['CategoryID'].' LIMIT 4';
                        $temp2 = mysqli_query($conn,$query2);
                        if(mysqli_num_rows($temp2) != 0){
                            while($arrProduct = mysqli_fetch_assoc($temp2)){
                                $ImageList = explode('*',$arrProduct['ProductImage']);                      
                    ?>
                    <div class="col-sm-3">
                        <div class="product-thumbnail-item"><a href="?page=Product&ProductID=<?php echo $arrProduct['ProductID']; ?>">
                        <img src="Admin/IMG/ProductImage/<?php echo $ImageList[0]; ?>" />
                    </a>
                            
                        </div>
                        <br>
                        <div class="text-center">
                            <a href="Action/AddProduct.php?ProductID=<?php echo $arrProduct['ProductID'];?>" class="btn btn-danger" ><i class="fa fa-cart-plus"></i>  Thêm vào giỏ hàng </a>
                            </div>
                        <h3 class="product-title"><?php echo $arrProduct['ProductName']; ?></h3>
                        <p class="product-price text-center">
                            <span><?php echo number_format($arrProduct['ProductPrice']); ?> đ</span>
                        </p>
                    </div>
                    <?php
                        }
                    }
                    ?>
                    <hr>
                </div>
                <div class="container-fuild tab-content-bot">
                    <a href="?page=Category&CategoryID=<?php echo $arrCategory['CategoryID']; ?>"><i class="fa fa-arrow-right"></i>Xem tất cả</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <?php
            }
        ?>