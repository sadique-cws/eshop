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
        $fields = array(
            'user'=>$user_id,
            'start_date' => date("D d-m-y h:i:s"),
            'ordered' => false
        );
         $order_id = $data->insertData_getid('orders',$fields);
    }
    else{
        //need to update
        $order_id = $order[0]['order_id'];
    }
    
    $orderitem = $data->callingData('orderitem'," product_id='$pro_id' AND order_id='$order_id'");
    
    if(!empty($orderitem)){
        //need to update qty in case of exist
        $qty = $orderitem[0]['qty'] += 1;
        $orderitem_id = $orderitem[0]['orderitem_id'];
        if($data->updateData('orderitem',"qty ='$qty'"," orderitem_id='$orderitem_id'")){
            //successfully update your cart
            $data->alert('cart updated successfully');
            //redirect on cart page 
            $data->redirect('cart');
        }
        else{
            $data->alert('Something went wrong');
            //redirect on cart page  
            $data->redirect('cart');
        }
        
    }
    else{
        // need to create new order item with 1 qty
        $inserted = $data->insertData('orderitem',array(
            'order_id' => $order_id,
            'product_id' => $pro_id,
            'ordered' => false,
            'qty' => 1
        ));
        if($inserted){
            $data->alert('this item added to your cart successfully');
            //redirect on cart page 
            $data->redirect('cart');
        }
        else{
            $data->alert('Not added to your cart');
            //redirect on cart page  
            $data->redirect('cart');
        }
    }
}


?>