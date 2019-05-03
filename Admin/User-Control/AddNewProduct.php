<div class="container-fluid">
    <div class="panel panel-info">
        <div class="panel-heading text-center">
            <h5><strong>THÊM SẢN PHẨM MỚI</strong></h5>
        </div>
        <div class="panel-body">
            <form method="POST" action="#">
                <div class="form-group">
                    <label for="ProductName">Tên Sản Phẩm: </label>
                    <input type="text" class="form-control" name="productName">
                </div>
                <div class="form-group">
                    <label for="txtPrice">Giá Sản Phẩm: </label>
                    <input type="text" class="form-control" name="productPrice">
                </div>
                <div class="form-group">
                    <label for="">Upload Ảnh: </label>
                    <input type="file" class="form-control" name="productImage1">
                    <br>
                    <input type="file" class="form-control" name="productImage2">
                    <br>
                    <input type="file" class="form-control" name="productImage3">
                    <br>
                    <input type="file" class="form-control" name="productImage4">
                    <br>
                    <input type="file" class="form-control" name="productImage5">
                </div>
                <div>
                    <button type="button" class="btn btn-success">Xem ảnh</button>
                    <button type="button" class="btn btn-danger">Xóa ảnh</button>
                </div>
                <br />

                <br />
                <div class="form-group">
                    <label>Mô tả: </label>
                    <textarea class="form-control" name="productDecription"></textarea>
                </div>
                <div class="form-group">
                    <label for="drpCategory">Chọn Danh Mục: </label>
                    <select name="productCategory">
                        <option value="0">--Chọn--</option>
                        <?php
                            $query = "SELECT * FROM category";
                            $temp = mysqli_query($conn,$query);
                            while($array = mysqli_fetch_assoc($temp)){
                                echo '<option value="'.$array['CategoryID'].'"">'.$array['CategoryName'].'</option>';
                            }
                        ?>
                    </select>                  
                </div>
                <input type="checkbox" name="cbContinue"  value="contiune"> Tiếp tục thêm sản phẩm khác
                <br />
                <br />
                <input type="submit" name="btnAddNewProduct" class="btn btn-success" value="THÊM MỚI SẢN PHẨM">
                
                <br />
                
            </form>
            <?php
            
                if(isset($_POST['btnAddNewProduct'])){
                    echo "hello";
                     $ProductName = $_POST['productName'];
                     $ProductPrice = $_POST['productPrice'];
                     $ProductImage1 = $_POST['productImage1'];
                     $ProductImage2 = $_POST['productImage2'];
                     $ProductImage3 = $_POST['productImage3'];
                     $ProductImage4 = $_POST['productImage4'];
                    $ProductImage5 = $_POST['productImage5'];
                     $ProductImage = $ProductImage1.'**'.$ProductImage2.'**'.$ProductImage3.'**'.$ProductImage4.'**'.$ProductImage5;
                    $ProductCategoryID = $_POST['productCategory'];
                     $ProductDecription = $_POST['productDecription'];
                     $query = "INSERT INTO product (ProductName,ProductPrice,ProductImage,ProductCategoryID,ProductDecription) VALUES ('$ProductName',$ProductPrice,'$ProductImage',$ProductCategoryID,'$ProductDecription')";
                     mysqli_query($conn,$query);
                     echo '<script type"text/javascript"> history.back();</script>';
                      echo '<script type"text/javascript"> alert("'.$ProductName.'")</script>';
                    echo "tesst";
                }
            ?>
        </div>
    </div>
</div>