<?php
    session_start();
    $ProductID = $_GET['ProductID'];
    if(isset($_SESSION['Cart'][$ProductID])){
        $Quantity = $_SESSION['Cart'][$ProductID] +1 ;
    }else{
        $Quantity = 1;
    }
    $_SESSION['Cart'][$ProductID] = $Quantity;
?>
<script type="text/javascript">
	history.back();
</script>