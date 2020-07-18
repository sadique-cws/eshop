<?php require_once("include/config.php");?>
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
           <div class="col-lg-12">
               <div class="row">
                  <?php 
                   $items = $data->callingDataQuery(
                        "SELECT * FROM orderitem 
                        JOIN products ON products.product_id = orderitem.product_id"
                    );
                    foreach($items as $item):
                   ?>
                   <div class="col-lg-12">
                      
                       <div class="card mb-2 bg-light">
                          <div class="row">
                              <div class="col-lg-1">
                                   <img src="image/product/<?= $item['image'];?>" class="card-img-top" alt="">
                             </div>
                              <div class="col-lg-11">
                                  <div class="card-body">
                               <h5><?= $item['title'];?></h5>
                               <p class="small">Rs. <?= $item['price'];?>/-</p>
                               <a href="" class="btn btn-danger btn-sm">-</a>
                               <span class="small"><?= $item['qty'];?></span>
                               <a href="add_to_cart.php?pro_id=<?= $item['product_id'];?>" class="btn btn-success btn-sm">+</a>
                           </div>
                              </div>
                          </div>
                           
                       </div>
                   </div>
                   <?php endforeach; ?>
               </div>
           </div>
       </div>
   </div>
    
</body>
</html>