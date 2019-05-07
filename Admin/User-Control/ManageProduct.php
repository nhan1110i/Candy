
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
                        
                    </tr>
                    <?php
                    
                        $query = "SELECT * FROM product INNER JOIN category ON product.ProductCategoryID = category.CategoryID";
                        $data = mysqli_query($conn,$query);
                        $order = 1;
                        while($array = mysqli_fetch_assoc($data)){
                            echo '<tr><td>'.$order.'</td>';
                            echo '<td>'.$array['ProductName'].'</td>';
                            echo '<td>'.$array['ProductPrice'],'</td>';
                            echo '<td>';
                            $arrImage = explode('*',$array['ProductImage']);
                            foreach($arrImage as $key => $value){
                                echo '<img src="../IMG/ProductImage/'.$value.'" class="img-thumbail" />&nbsp;&nbsp;';
                            }
                            echo '</td>';
                            echo '<td>'.$array['CategoryName'].'</td>';
                            echo '<td> Hiển thị </td>';
                            echo '<td><a href ="?page=UpdateProduct&ProductID='.$array['ProductID'].'"><i class="glyphicon glyphicon-edit"></i></a></td>';
                            echo '<td><a href ="../Action/DeleteProduct.php?idProduct='.$array['ProductID'].'"><i class="glyphicon glyphicon-remove"></i></a></td>';
                            $order++;                    
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>