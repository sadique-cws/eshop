<?php require_once("include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop - online shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        
</head>
<body>
   
   <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
       <div class="container">
           <a href="" class="navbar-brand">Shop</a>
           
           
           <ul class="navbar-nav ml-auto">
               <li class="nav-item"><a href="" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="" class="nav-link">About</a></li>
               <li class="nav-item"><a href="" class="nav-link">Cart</a></li>
               <li class="nav-item"><a href="" class="nav-link">Account</a></li>
           </ul>
       </div>
   </nav>
   
   
   <div class="container mt-5">
       <div class="row">
           <div class="col-lg-3">
               <div class="list-group">
                   <a href="" class="list-group-item list-group-item-action">Categories</a>
                   <?php $calling = $data->callingData('categories'); 
                   foreach($calling as $cat):?>
                   <a href="" class="list-group-item list-group-item-action"><?= $cat['cat_title'];?></a>
                   <?php endforeach; ?>
               </div>
           </div>
           <div class="col-lg-9">
               <div class="row">
                  <?php 
                   $products = $data->callingDataQuery(
                        "SELECT * FROM products 
                        JOIN brand ON products.brand = brand.brand_id
                        JOIN categories ON products.category = categories.cat_id"
                    );
                    foreach($products as $product):
                   ?>
                   <div class="col-lg-3">
                       <div class="card">
                           <img src="image/product/<?= $product['image'];?>" class="card-img-top" alt="">
                           
                           <div class="card-body">
                               <h5><?= $product['title'];?></h5>
                               <p class="small">Rs. <?= $product['price'];?>/-</p>
                           </div>
                           <div class="card-footer">
                               <a href="product.php?pro_id=<?= $product['product_id'];?>" class="btn btn-success btn-sm">Add to Cart</a>
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