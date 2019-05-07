<?php
include('../Connect/Connect.php');
?>
<div class="container-fluid">
    <div class="panel panel-danger">
        <div class="panel-heading text-center">
            <h5><strong>CHỈNH SỬA SẢN PHẨM</strong></h5>
        </div>
        <div class="panel-body">
            <?php
                if(isset($_GET['ProductID'])){
                    $productID = $_GET['ProductID'];
                    $query = 'SELECT * FROM product WHERE ProductID = '.$productID;
                    $arr = mysqli_fetch_assoc(mysqli_query($conn,$query));
                    $ImageList = explode('*',$arr["ProductImage"]);
                }
            ?>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="ProductName">Tên Sản Phẩm: </label>
                    <input type="text" class="form-control" name="productName" value="<?php echo $arr['ProductName'] ?>">
                </div>
                <div class="form-group">
                    <label for="txtPrice">Giá Sản Phẩm: </label>
                    <input type="text" class="form-control" name="productPrice" value=<?php echo $arr['ProductPrice'] ?>>
                </div>
                <div class="form-group">
                    <label for="">Upload Ảnh: </label>
                    <input type="file" class="form-control" name="productImage1" accept="image/*" value="../IMG/ProductImage/<?php echo $ImageList[0]; ?>">
                    <br>
                    <input type="file" class="form-control" name="productImage2" accept="image/*">
                    <br>
                    <input type="file" class="form-control" name="productImage3" accept="image/*">
                    <br>
                    <input type="file" class="form-control" name="productImage4" accept="image/*">
                    <br>
                    <input type="file" class="form-control" name="productImage5" accept="image/*">
                </div>
                <div>
                    <button type="button" class="btn btn-success">Xem ảnh</button>
                    <button type="button" class="btn btn-danger">Xóa ảnh</button>
                </div>
                <br />

                <br />
                <div class="form-group">
                    <label>Mô tả: </label>
                    <textarea class="form-control" name="productDecription"><?php echo $arr['ProductDecription'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="drpCategory">Chọn Danh Mục: </label>
                    <select name="productCategory">
                        <option value="0">--Chọn--</option>
                        <?php
                            $query = "SELECT * FROM category";
                            $temp = mysqli_query($conn,$query);
                            while($array = mysqli_fetch_assoc($temp)){
                                if($array['CategoryID'] == $arr['ProductCategoryID']){
                                    echo '<option value="'.$array['CategoryID'].'" selected >'.$array['CategoryName'].'</option>';
                                }else{
                                    echo '<option value="'.$array['CategoryID'].'">'.$array['CategoryName'].'</option>';
                                }
                                
                            }
                        ?>
                    </select>                  
                </div>
                
                <br />
                <input type="submit" name="btnUpdateProduct" class="btn btn-success" value="CẬP NHẬT SẢN PHẨM">
                <button class="btn btn-danger">HỦY </button>              
            </form>
            <?php               
                function moveFile($idFileUpLoad){
                    $file = $_FILES[$idFileUpLoad]['tmp_name'];
                    $fileName = explode(".",$_FILES[$idFileUpLoad]["name"]);
                    $newFileName = round(microtime(true)).rand().'.'.end($fileName);
                    $path = "../IMG/ProductImage/".$newFileName;
                    move_uploaded_file($file,$path);
                    return $newFileName;
                }
                if(isset($_POST['btnUpdateProduct'])){
                     
                                         
                       $ProductImage = moveFile("productImage1").'*'.moveFile("productImage2").'*'.moveFile("productImage3").'*'.moveFile("productImage4").'*'.moveFile("productImage5");
                       $ProductName = $_POST['productName'];
                      $ProductPrice = $_POST['productPrice'];
                      $ProductCategoryID = $_POST['productCategory'];
                       $ProductDecription = $_POST['productDecription'];
                       $query = "UPDATE product SET ProductName='$ProductName',ProductPrice='$ProductPrice',ProductImage='$ProductImage',ProductCategoryID='$ProductCategoryID',ProductDecription='$ProductDecription' WHERE ProductID='$productID'";
                       mysqli_query($conn,$query);
                       echo '<script type"text/javascript">alert("Đã cập nhật sản phẩm"); history.back(-1);</script>';
                        
                }
            ?>
        </div>
    </div>
</div>