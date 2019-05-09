<div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading text-center">
            <h5><strong>QUẢN LÝ ĐƠN HÀNG</strong></h5>
        </div>
        <div class="panel-body">
        <form method="POST">
        <div class="form-inline">
            <div class="form-group">
            <select class="form-control" name="filterChoose">
                <option value="4">Tất cả</option>
                <option value="0">Chưa xử lý</option>
                <option value="1">Đã xử lý</option>
                <option value="2">Đã từ chối</option>
            </select>
            <input type="submit" class="btn btn-danger" value="Lọc đơn hàng" name="btnFilter">
            </div>            
        </div>
        </form>
        <?php
            if(isset($_POST['btnFilter'])){
                if($_POST['filterChoose'] == 4){
                    $queryFilter = "SELECT * FROM oder INNER JOIN customer ON oder.CustomerID = customer.CustomerID";
                }else{
                    $queryFilter = "SELECT * FROM oder INNER JOIN customer ON oder.CustomerID = customer.CustomerID WHERE oderStatus=".$_POST['filterChoose'];

                }
            }else{
                $queryFilter = "SELECT * FROM oder INNER JOIN customer ON oder.CustomerID = customer.CustomerID";
            }
        
        ?>
        <br>
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
                        return "Đã từ chối";
                        break;
                    }
                }
                    $query = $queryFilter;
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
                            <td><a href="../Action/UpdateOrder.php?OrderID=<?php echo $arrOrder['OderID'] ?>&Status=1" class="btn btn-success"><i class="fa fa-check"></i></a> <a href="../Action/UpdateOrder.php?OrderID=<?php echo $arrOrder['OderID'] ?>&Status=2" class="btn btn-danger"><i class="fa fa-times"></i></a> <a href="?page=ViewOrder&OrderID=<?php echo $arrOrder['OderID']; ?>" class="btn btn-warning"><i class="fa fa-eye"></i></a></td>
                            
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>
