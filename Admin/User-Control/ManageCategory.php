<div class="container-fluid row">
    <div class="col-sm-8">
        <div class="panel panel-success">
        <div class="panel-heading text-center">
            <h5><strong>QUẢN LÝ DANH MỤC SẢN PHẨM</strong></h5>
        </div>
        <div class="panel-body">
            <table class="table table-responsive">
                <tr>
                    <td><strong>STT</strong></td>
                    <td><strong>Tên danh mục</strong></td>
                    <td><strong>Cập nhật</strong></td>
                    <td><strong>Xóa</strong></td>
                </tr>
                <?php
                    $query = "SELECT * FROM category";
                    $temp = mysqli_query($conn,$query);
                    $order = 1;
                    while($array = mysqli_fetch_assoc($temp)){
                        echo '<form method="GET" action="../Action/UpdateCategory.php">';
                        echo '<tr><td>'.$order.'</td>';
                        echo '<td><input type="hidden" value="'.$array['CategoryID'].'" name="CategoryID"> <input type="text" class="form-control" height="36px" name="NewCategoryName" value="'.$array["CategoryName"].'"></td>';
                        echo '<td><input type="submit" value="CẬP NHẬT" class="btn btn-info"></td>';
                        echo '</form>';
                        echo '<td><a href ="../Action/DeleteCategory.php?CategoryID='.$array['CategoryID'].'"><i class="glyphicon glyphicon-remove"></i></a><td>';
                        $order++;
                    }
                ?>
            </table>
        </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h5></strong>THÊM MỚI DANH MỤC</strong></h5>
            </div>
            <div class="panel-body">
            <form method="POST">
                <div class="form-group">
                        <h5 class="text-center"></strong>Nhập tên danh mục</strong></h5>
                        <input type="text" class="form-control" height="36px" name="CategoryName">
                        <br />
                </div>
                <input type="submit" name="btnAddNewCategory" value="THÊM MỚI DANH MỤC" class="btn btn-block btn-warning">
            </form>
            <?php
                if(isset($_POST['btnAddNewCategory'])){
                    $CategoryName = $_POST['CategoryName'];
                    $query1 = "INSERT INTO category (CategoryName) VALUES ('$CategoryName')";
                    mysqli_query($conn,$query1);
                    
                }
            ?>
        </div>
        </div>
        <div>
        <div class="alert alert-danger">
    <strong>Lưu ý</strong><br> Nếu bạn xóa một danh mục tương đương với xóa toàn bộ sản phẩm thuộc danh mục đó.
  </div>   </div>
    </div>
</div>
