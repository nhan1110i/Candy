<?php
    include('../Connect/Connect.php');
    if(isset($_GET['CategoryID'])){
        $query = "DELETE FROM category WHERE CategoryID=".$_GET['CategoryID'];
        mysqli_query($conn,$query);
        header("Location: ../Page/Home.php?page=ManageCategory");
    }
?>