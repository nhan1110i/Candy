<div class="line">

</div>

<div class="section-title-category">
	<h3 class="text-center">
		TÌM KIẾM
	</h3>
</div>
<div class="line">

</div>
<br>
<div class="filter-content">
    <?php
        if(isset($_GET['Keyword'])){
            $Keyword = $_GET['Keyword'];
        }
        
    ?>
    <h3><?php echo $Keyword; ?></h3>
	<br>
	<div class="category row">
		<?php
				
				$query = "SELECT * FROM product WHERE ProductName LIKE '%".$Keyword."%'";
				$temp = mysqli_query($conn,$query);
				while($arrProduct = mysqli_fetch_assoc($temp)){
					$ImageList = explode('*',$arrProduct['ProductImage'])
			
		?>
		<div class="col-sm-3">
			<div class="product-box">
			<a href="?page=Product&ProductID=<?php echo $arrProduct['ProductID'];?>">
			<img src="Admin/IMG/ProductImage/<?php echo $ImageList[0]; ?>">
			</a>
				
				<div class="text-center">
					<br>
					<a href="Action/AddProduct.php?ProductID=<?php echo $arrProduct['ProductID']; ?> " class="btn btn-danger"><i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng</a>
				</div>
				<div class="product-title text-center">
					<h4><?php echo $arrProduct['ProductName'] ?></h4>
				</div>
				<div class="product-price">
					<h3 class="text-center"><?php echo number_format($arrProduct['ProductPrice']) ?> đ</h3>
				</div>
				<br>
			</div>
		</div>
		<?php
	}

		?>
		
	</div>
</div>
