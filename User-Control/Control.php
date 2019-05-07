<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        
    }else{
        $page = "";      
    }
    switch($page){
        case 'Category':
        include('Category.php');
        break;
        case 'Product':
        include('ProductDetail.php');
        break;
        case 'Cart':
        include('Cart.php');
        break;
        case 'CheckOut':
        include('Checkout.php');
        break;
        case 'Intro':
        include('Intro.php');
        break;
        case 'CompleteOrder':
            include('CompleteOrder.php');
            break;
        default:
        include('Home.php');
        break;

    }
?>