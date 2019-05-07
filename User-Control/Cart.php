<?php
    $TotalMoney = 0;
    $TotalQuantity = 0;
?>
<div class="section-title-category">
	<h3 class="text-center">
		GIỎ HÀNG CỦA BẠN
	</h3>
</div>
<div class="line">

</div>
<br>
<div class="row">
    <div class="col-sm-9">
        <table class="table table-responsive table-giohang">
            <tr class="cart-title text-center">
                <th class="text-center cart-product-name">Sản phẩm</th>
                <th class="text-center">Giá</th>
                <th class="text-center">Số lượng</th>
                <th class="text-center">Thành tiền</th>
            </tr>
            <?php
                if(isset($_SESSION['Cart'])){
                    foreach($_SESSION['Cart'] as $ProductID => $Quantity){
                        $query = "SELECT * FROM product WHERE ProductID=".$ProductID;
                        $temp = mysqli_query($conn,$query);
                        $Product = mysqli_fetch_assoc($temp);
                        $Imglt = explode('*',$Product['ProductImage']);                
            ?>
            <tr>
                <td class="row">
                    <div class="col-sm-4 cart-img">
                        <img src="Admin/IMG/ProductImage/<?php echo $Imglt[0]; ?>" />
                    </div>
                    <div class="col-sm-8">
                        <h4><strong><?php echo $Product['ProductName']; ?></strong></h4>
                    </div>
    
                </td>
                <td class="text-center">
                    <strong><?php echo $Product['ProductPrice'] ?> đ</strong>
                </td>
                <td class="text-center">
                    <strong><?php echo $Quantity;
                        $TotalQuantity += $Quantity;
                    ?></strong>
                </td>
                <td class="text-center">
                    <strong><?php echo $Quantity*$Product['ProductPrice'];
                        $TotalMoney += $Quantity*$Product['ProductPrice'];
                    ?> đ</strong>
                </td>
            </tr>
            <?php
            $_SESSION['TotalQuantity'] = $TotalQuantity;
            $_SESSION['TotalMoney'] = $TotalMoney;
                    }
                }else{
                    ?>
                    <tr>
                        <td colspan="4" class="text-center"><h5><strong>Bạn chưa có sản phẩm trong giỏ</strong></h5>
                        <br>
                        <a href="index.php" class="btn btn-danger"><i class="fa fa-arrow-left"></i> quay lại mua</a>
                    </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
    <div class="col-sm-3">
        <table class="table table-responsive table-money">
            <tr>
                <td>Tạm tính: <strong class="text-right"><?php echo number_format($TotalMoney); ?> đ</strong></td>
</tr>
                <tr>
                <td>Giảm giá: <strong>0 đ</strong></td>
</tr>
                <tr>
                <td>Tổng tiền: <strong><?php echo number_format($TotalMoney); ?> đ</strong></td>
</tr>
                <tr class="text-center">
                    <td><a href="?page=CheckOut" class="btn btn-danger btn-block">Tiến hành thanh toán</a></td>
</tr>
        </table>
</div>
</div>