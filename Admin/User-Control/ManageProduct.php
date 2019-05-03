<div class="container-fluid">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                <h5><strong>DANH MỤC SẢN PHẨM</strong></h5>
            </div>
            <div class="panel-body">
                <table class="table table-responsive">
                    <tr class="bg-primary">
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Danh mục </td>
                        <th>Trạng thái</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                        <th>Xem</th>
                    </tr>
                    <?php
                        $query = "SELECT * FROM product";
                        $data = mysqli_query($conn,$query);
                        $order = 1;
                        while($array = mysqli_fetch_assoc($data)){
                            echo '<tr><td>'.$order.'</td>';
                            echo '<td>'.$array['ProductName'].'</td>';
                            echo '<td>'.$array['ProductPrice'],'</td>';
                            echo '<td>'.$array['ProductImage'].'</td>';
                            echo '<td>'.$array['ProductCategoryID'].'</td>';
                            echo '<td> Hiển thị </td>';
                            echo '<td><a href ="#"><i class="glyphicon glyphicon-edit"></i></a></td>';
                            echo '<td><a href ="#"><i class="glyphicon glyphicon-remove"></i></a></td>';
                            echo '<td><a href ="#"><i class="glyphicon glyphicon-eye-open"></i></a></td>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>