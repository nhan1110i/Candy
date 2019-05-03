<?php 
    $severname="localhost";
    $user="root";
    $password = "";
    $db = "candyshop";
    $conn = mysqli_connect($severname,$user,$password,$db);
    if(isset($conn)){
        
    }else{
        echo "Ket noi that bai";
    }
    mysqli_set_charset($conn,"utf8");
    mysqli_query($conn,"SET NAMES 'uft8'");
?>
