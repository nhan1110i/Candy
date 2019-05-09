<?php
    include('../Connect/Connect.php');
    if(isset($_GET['OrderID'])){
        $OrderID = $_GET['OrderID'];
        $Status = $_GET['Status'];
        $query = "UPDATE oder SET OderStatus=$Status WHERE OderID = $OrderID";
        mysqli_query($conn,$query);
        header("Location: ../Page/Home.php?page=ManageOrder");
    }
?>