<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading text-center">
            <h5><strong>QUẢN LÝ ĐƠN HÀNG</strong></h5>
        </div>
        <div class="panel-body">
            <table class="table table-responsive">
                <tr class="bg-success">
                    <th>STT</th>
                    <th>Mã đơn</th>
                    <th>Khách hàng</th>
                    <th>Ngày đặt </th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                function status($status){
                    switch($status){
                        case 0;
                        return "Chưa xử lý";
                        break;
                        case 1:
                        return "Đã gửi hàng";
                        default:
                        return "";
                        break;
                    }
                }
                    $query = "SELECT * FROM oder INNER JOIN customer ON oder.CustomerID = customer.CustomerID";
                    $temp = mysqli_query($conn,$query);
                    $order = 1;
                    while($arrOrder = mysqli_fetch_assoc($temp)){
                        ?>
                        <tr>
                            <td><?php echo $order; ?></td>
                            <td>DH0<?php echo $arrOrder['OderID']; ?></td>
                            <td><?php echo $arrOrder['CustomerName']; ?> </td>
                            <td><?php echo $arrOrder['OderDate']; ?></td>
                            <td><?php echo $arrOrder['TotalQuantity']; ?></td>
                            <td><?php echo number_format($arrOrder['TotalMoney']);?> đ </td>
                            <td><?php echo status($arrOrder['OderStatus']); ?></td>
                            <td><a href="" class="btn btn-success"><i class="fa fa-check"></i></a> <a href="" class="btn btn-danger"><i class="fa fa-times"></i></a> <a href="" class="btn btn-warning"><i class="fa fa-eye"></i></a></td>
                            
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>