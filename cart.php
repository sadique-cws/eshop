<?php require_once("include/config.php");


if(!isset($_SESSION['user'])){
	$data->redirect('login');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop - online shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        
</head>
<body>
   <?php require_once("include/nav.php");?>

   
   
   <div class="container mt-5">
       <div class="row">

	   <?php 

	    $items = $data->callingDataQuery(
                        "SELECT * FROM orderitem 
                        JOIN products ON products.product_id = orderitem.product_id"
                    );
		if(!empty($items)):
		?>

           <div class="col-lg-12">

               <div class="row">
			                      <div class="col-lg-9">

                  <?php 
                  

					$total_amount = 0;
					$total_netpayable = 0;
					foreach($items as $item_price):
						$total_amount += ($item_price['price'] * $item_price['qty']);
						$total_netpayable += ($item_price['discounted_price'] * $item_price['qty']);
					endforeach;

                    foreach($items as $item):
                   ?>
                      
                       <div class="card mb-2 bg-light">
                          <div class="row">
                              <div class="col-lg-1">
                                   <img src="image/product/<?= $item['image'];?>" class="card-img-top" alt="">
                             </div>
                              <div class="col-lg-11">
                                  <div class="card-body">
                               <h5><?= $item['title'];?></h5>
                               <p class="small">
										<span class="text-success font-weight-bolder">Rs. <?= $item['discounted_price']* $item['qty'];?>/-</span>
										<del class="text-muted">Rs. <?= $item['price'] * $item['qty'];?>/-</del>
								</p>
                               <a href="remove_from_cart.php?pro_id=<?= $item['product_id'];?>" class="btn btn-danger btn-sm">-</a>
                               <span class="small"><?= $item['qty'];?></span>
                               <a href="add_to_cart.php?pro_id=<?= $item['product_id'];?>" class="btn btn-success btn-sm">+</a>
							<a href="remove_item_from_cart.php?pro_id=<?= $item['product_id'];?>" class="btn btn-danger float-right">Delete</a>
						   </div>
                              </div>
                          </div>
                           
                       </div>
					   <?php endforeach; ?>
                   </div>
				   <div class="col-lg-3">
					 <div class="list-group">
						<a href="#" class="list-group-item list-group-item-action">
						Total Amount <span class="float-right font-weight-bolder">Rs. <?= $total_amount;?></span>
						</a>
						<a href="#" class="list-group-item list-group-item-action">
						Total Saving <span class="float-right font-weight-bolder">Rs. <?= $total_amount - $total_netpayable;?></span>
						</a>
						<a href="#" class="list-group-item list-group-item-action">
						Net Payable <span class="float-right font-weight-bolder">Rs. <?= $total_netpayable;?></span>
						</a>
					 </div>
					 <div class="row">
						<div class="col-lg-6">
							<a href="" class="btn btn-warning btn-block">Shopping</a>
						</div>
						<div class="col-lg-6">
							<a href="" class="btn btn-success btn-block">Checkout</a>
						</div>
					 </div>
				   </div>
                   
               </div>
           </div>

		   <?php else: ?>
			<div class="col-lg-12 text-center">
				<div class="card">
					<div class="card-body">
						<h2>Cart Empty</h2>
						<a href="#" class="btn btn-success">Shopping</a>
					</div>
				</div>
			</div>
		   <?php endif; ?>
       </div>
   </div>
    
</body>
</html>