<div class="line">

</div>

<div class="section-title-category">
	<h3 class="text-center">
		XEM THEO DANH MỤC
	</h3>
</div>
<div class="line">

</div>
<br>
<div class="filter-content">
	<div class="row filter">
		<div class="col-sm-3">
			<div class="form-group">
				<select class="form-control" id="#">
					<option>Socola Tươi</option>
					<option>Socola Rượu</option>
					<option>Socola Dừa</option>
					<option>Socola Sữa</option>
				</select>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<select class="form-control" id="#">
					<option>Vitamin House</option>
					<option>Ferrero</option>
				</select>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<select class="form-control" id="#">
					<option>Dưới 2.000.000 đ</option>
					<option>Dưới 1.000.000 đ</option>
				</select>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<select class="form-control" id="#">
					<option>Từ A-Z</option>
					<option>Từ thấp - cao</option>
				</select>
			</div>
		</div>
	</div>
	<br>
	<div class="category row">
		<?php
				$CategoryID = $_GET['CategoryID'];
				$query = "SELECT * FROM product WHERE ProductCategoryID=".$CategoryID;
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