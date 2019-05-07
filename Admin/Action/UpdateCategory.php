<?php
    include('../Connect/Connect.php');
    if(isset($_GET['CategoryID']) && isset($_GET['NewCategoryName'])){
        $CategoryID = $_GET['CategoryID'];
        $NewCategoryName = $_GET['NewCategoryName'];
        $query = "UPDATE category SET CategoryName ='$NewCategoryName' WHERE CategoryID='$CategoryID'";
        mysqli_query($conn,$query);
        echo $CategoryID.' '.$NewCategoryName;
        header("Location: ../Page/Home.php?page=ManageCategory");
    }
?>