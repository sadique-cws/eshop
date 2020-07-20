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
	
	$order_id = $order[0]['order_id'];
    
    $orderitem = $data->callingData('orderitem'," product_id='$pro_id' AND order_id='$order_id'");
    
    if(!empty($orderitem)){
        //need to update qty in case of exist
        $qty = $orderitem[0]['qty'] -= 1;
        $orderitem_id = $orderitem[0]['orderitem_id'];
       $data->deleteData('orderitem',"orderitem_id=$orderitem_id");
	   $data->redirect('cart');
        
    }
    
}




?>