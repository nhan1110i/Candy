<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
            case 'ManageProduct':
            include('ManageProduct.php');
            break;
            case 'AddNewProduct':
            include('AddNewProduct.php');
            default:
            break;
        }
        
    }else{
        $page='';
    }
?>