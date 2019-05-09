<?php
    if(isset($_GET['OrderID'])){
        $OrderID = $_GET['OrderID'];
        $query = "SELECT * FROM oder INNER JOIN customer ON oder.CustomerID = customer.CustomerID WHERE OderID=".$OrderID;
        $data = mysqli_query($conn,$query);
        $Customer = mysqli_fetch_assoc($data);
        $queryOrderDetail = "SELECT * FROM oderdetail INNER JOIN product ON oderdetail.ProductID = product.ProductID WHERE OrderID=".$OrderID;
        $data1 = mysqli_query($conn,$queryOrderDetail);
        $Order = 1;
    }
    
    
?>
<div class="container-fluid row">
    <div class="col-sm-6">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h5> <strong>CHI TIẾT ĐƠN HÀNG</strong></h5>
            </div>
            <div class="panel-body">
                <table class="table table-responsive">
                    <tr>
                        <th>STT</td>
                        <th>Mã hàng</th>
                        <th>Tên mặt hàng</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                    </tr>
                    <?php
                        while($arrOrderDetail = mysqli_fetch_assoc($data1)){
                    ?>
                    <tr>
                            <td><?php echo $Order; ?></td>
                            <td>DH-<?php echo $arrOrderDetail['ProductID'] ?></td>
                            <td><?php echo $arrOrderDetail['ProductName'] ?></td>
                            <td><?php echo number_format($arrOrderDetail['ProductPrice']) ?></td>
                            <td><?php echo $arrOrderDetail['Quantity'] ?></td>
                    </tr>
                    <?php
                        $Order++;
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                <h5><strong>CHI TIẾT KHÁCH HÀNG</strong></h5>
            </div>
            <div class="panel-body">
                <table>
                    <tr>
                        <td>Tên khách hàng: </td>
                        <td><strong><?php echo $Customer['CustomerName']; ?></strong></td>
                        
                    </tr>
                    <tr>
                        <td>Số điện thoại:</td><td><?php echo $Customer['CustomerPhone'] ?></td>
                        
                    </tr>
                    <tr>
                        <td>E-Mail: </td><td><?php echo $Customer['CustomerEmail'] ?></td>
                    </tr>
                    <tr><td>Địa chỉ: </td><td><?php echo $Customer['CustomerAdd'] ?></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
