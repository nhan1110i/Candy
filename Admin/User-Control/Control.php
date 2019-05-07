<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
            case 'ManageProduct':
            include('ManageProduct.php');
            break;
            case 'AddNewProduct':
            include('AddNewProduct.php');
            break;
            case 'UpdateProduct':
            include('UpdateProduct.php');
            break;
            case 'ManageCategory':
            include('ManageCategory.php');
            break;
            case 'ManageOrder':
            include('ManageOrder.php');
            break;
            default:
            break;
        }
        
    }else{
        $page='';
    }
?>