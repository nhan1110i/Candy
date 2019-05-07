
<?php
    include('../Connect/Connect.php');
    if(isset($_GET['idProduct'])){
        $productID = $_GET['idProduct'];
        $query = 'SELECT * FROM product WHERE ProductID='.$productID;
        $temp = mysqli_query($conn,$query);
        while($array = mysqli_fetch_assoc($temp)){
            $ImageList = explode('*',$array["ProductImage"]);
            foreach($ImageList as $key => $value){
                unlink('../IMG/ProductImage/'.$value);
            }
        }
        $query1 = 'DELETE FROM product WHERE ProductID='.$productID;
        mysqli_query($conn,$query1);
        header("Location: ../Page/Home.php?page=ManageProduct");
    }
?>