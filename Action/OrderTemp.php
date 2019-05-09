<?php
    include('../Connect/Connect.php');
    session_start();
     if($_POST['coradio'] == 'cod'){
        $name = $_SESSION['name'] = $_POST['name'];
        $phone = $_SESSION['phone'] = $_POST['phone'];
        $mail = $_SESSION['mail'] = $_POST['mail'];
        $add = $_SESSION['add'] = $_POST['add'];
        $_paymet= $_SESSION['payment'] = $_POST['coradio'];
        $TotalQuantity = $_SESSION['TotalQuantity'];
        $TotalMoney = $_SESSION['TotalMoney'];
         $query = "INSERT INTO customer (CustomerName,CustomerPhone,CustomerEmail,CustomerAdd) VALUES ('$name','$phone','$mail','$add')";
         mysqli_query($conn,$query);
         $queryLastCustomer = "SELECT * FROM customer ORDER BY CustomerID DESC LIMIT 1";
         $temp = mysqli_query($conn,$queryLastCustomer);
         $LastCustomer = mysqli_fetch_assoc($temp);
         $LastCustomerID = $LastCustomer['CustomerID'];
         $date = date("Y-m-d");
         $queryInsertOrder = "INSERT INTO oder (CustomerID,OderDate,OderStatus,OrderPayment,TotalMoney,TotalQuantity) VALUES($LastCustomerID,'$date',0,0,$TotalMoney,$TotalQuantity)";
         mysqli_query($conn,$queryInsertOrder);
         $queryLastOrder = "SELECT * FROM oder ORDER BY OderID DESC LIMIT 1";
         $temp2 = mysqli_query($conn,$queryLastOrder);
         $LastOrder = mysqli_fetch_assoc($temp2);
         $LastOrderID = $LastOrder['OderID'];
         foreach($_SESSION['Cart'] as $ProductID =>$Quantity){
             $queryInsertOderDetail = "INSERT INTO oderdetail (OrderID,ProductID,Quantity) VALUES ($LastOrderID,$ProductID,$Quantity)";
             mysqli_query($conn,$queryInsertOderDetail);
         }
         header("Location: ../index.php?page=CompleteOrder");
     }
     if($_POST['coradio' == 'nganluong']){

     }
    

?>
