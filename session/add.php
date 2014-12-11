<?php session_start();
if(strtolower($_SERVER['REQUEST_METHOD'])=='post'){
    $product_name=$_POST['product_name'];
    $product_qty=$_POST['product_qty'];

    addItemToSession($product_name, $product_qty);
}

else {
    header('location:'.WWW_PATH.'add.html');
}
header('location:'.WWW_PATH.'list.php');


?>