<?php
include "include/config.php";

$user = $data->GetUserId();


if(isset($_GET['pro_id'])){
    $pro_id = $_GET['pro_id'];
    $product = $data->callingData('products',"product_id='$pro_id'");
    
    if(empty($product)){
        $data->alert('Product not selected for add to cart');
        $data->redirect('index');
    }

    $user_id = $user[0]['user_id'];

    $order = $data->callingData("orders"," ordered=false AND user='$user_id'");

    if(empty($order)){
    //need to create
    }
    else{
    //need to update
    }
}


?>