<div class="section-title-category">
	<h3 class="text-center">
		 THANH TOÁN ĐƠN
	</h3>
</div>
<div class="line">

</div>
<br>
<div class="row">
<form method="POST" action="Action/OrderTemp.php">
    <div class="col-sm-4">
        <h4 class="text-center"><strong>Thông tin thanh toán</strong></h4>
        <div class="line"></div><br>
        <br>
        <div class="form-group">
            <label>Họ và tên</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label>Mail</label>
            <input type="text" class="form-control" name="mail" >
        </div>
        <div class="form-group">
            <label>Địa chỉ nhận hàng</label>
            <textarea class="form-control" name="add"></textarea>
        </div>
    </div>
    <div class="col-sm-4">
        <h4 class="text-center"><strong>Hình thức thanh toán</strong></h4>
        <div class="line"></div><br>
        
        <div class="radio">
      <label><input type="radio" name="coradio" checked value="cod">Thanh toán tại nhà</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="coradio" value="nganluong" >Thanh toán qua Ngân Lượng</label>
      </div>
      <div class="radio">
      <label><input type="radio" name="coradio" value="baokim">Thanh toán qua Bảo Kim</label>
      </div>
    </div>
    <div class="col-sm-4">
    <h4 class="text-center"><strong>Sản phẩm sẽ thanh toán</strong></h4>
        <div class="line"></div><br>
        <?php
        $total = 0;
            iF(isset($_SESSION['Cart'])){
                foreach($_SESSION['Cart'] as $ProductID => $Quantity){
                    $query = "SELECT * FROM product WHERE ProductID=".$ProductID;
                    $temp = mysqli_query($conn,$query);
                    $product = mysqli_fetch_assoc($temp);
                    $total += $product['ProductPrice'] * $Quantity;
                    ?>
                    <h5><?php echo $product['ProductName']." x ".$Quantity; ?> </h5>
                    <br>
                    <?php

                }
            }
        ?>
        <div class="line"></div><br>
        <h4>Tổng tiền: <strong class="text-danger"><?php echo number_format($total); ?> đ</strong></h4>
        <br>
        <input type="submit" class="btn btn-danger btn-block" value="Tiến hành đặt hàng">
    </div>
    </form>
</div>
        
