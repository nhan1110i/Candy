<?php
    $ProductID = $_GET['ProductID'];
    $query = "SELECT * FROM product WHERE ProductID=".$ProductID;
    $temp = mysqli_query($conn,$query);
    $product = mysqli_fetch_assoc($temp);
    $image = explode('*',$product['ProductImage']);

?>
<div class="section-title-category">
	<h3 class="text-center">
		CHI TIẾT SẢN PHẨM
	</h3>
</div>
<div class="line">

</div>
<div class="row box-product">           
            <div class="col-sm-4 product-image">
                <img src="Admin/IMG/ProductImage/<?php echo $image[0]; ?>" id="imageThum0"/>
                <br>
                <br>
                <div class="row product-image">
                    <div class="col-sm-3">
                    <img src="Admin/IMG/ProductImage/<?php echo $image[1]; ?>" id="imageThum2" />
                    </div>
                    <div class="col-sm-3">
                    <img src="Admin/IMG/ProductImage/<?php echo $image[2]; ?>" id="imageThum3" />
                    </div>
                    <div class="col-sm-3">
                    <img src="Admin/IMG/ProductImage/<?php echo $image[3]; ?>" id="imageThum4" />
                    </div>
                    <div class="col-sm-3">
                    <img src="Admin/IMG/ProductImage/<?php echo $image[4]; ?>" id="imageThum5" />
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <h3><?php echo $product['ProductName'] ?></h3>
                <h3 class="product-price"><?php echo number_format($product['ProductPrice']); ?> đ</h3>
                <hr>
                <span>Thương hiệu: Vitamin House</span>
                <hr>
                <span>Mã sản phẩm: VH-<?php echo $product['ProductID']?></span><br>
                <span>Tình trạng: Còn hàng</span>
                <hr>
                <a href="Action/AddProduct.php?ProductID=<?php echo $product['ProductID']; ?>" class="btn btn-danger"><i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                &nbsp;&nbsp;
                <a href="index.php" class="btn btn-success"><i class="fa fa-cart-plus"></i> Tiếp tục mua hàng</a>
                <hr>
                <span><strong>Mô tả sản phẩm</strong></span>
                <p>
                    <?php
                        echo $product['ProductDecription']; 
                    ?>
                </p>
                
            </div>
            <div class="col-sm-3 box-qc">
                <img src="Asset/Image/tu_van.jpg">
            </div>
        </div>
        <br>
        <div class="line">

</div>