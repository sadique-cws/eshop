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

   
   
   <div class="container-fluid mt-5">
       <div class="row">
           <div class="col-lg-2">
                <?php include_once('include/side.php');?>
           </div>
           <div class="col-lg-10">
               <div class="row">
                  <?php 
                   if(isset($_GET['cat_id'])){
                       $cat_id = $_GET['cat_id'];
                   $products = $data->callingDataQuery(
                        "SELECT * FROM products 
                        JOIN brand ON products.brand = brand.brand_id
                        JOIN categories ON products.category = categories.cat_id where products.category = '$cat_id'"
                    );
                    foreach($products as $product):
                   ?>
                   <div class="col-lg-3">
                      
                       <div class="card">
                           <a href="product.php?pro_id=<?= $product['product_id'];?>" class="stretched-link">
                               <img src="image/product/<?= $product['image'];?>" class="card-img-top" alt="">
                           </a>
                           <div class="card-body">
                               <h5><?= $product['title'];?></h5>
                               <p class="small">Rs. <?= $product['price'];?>/-</p>
                               <p class="small">Category:  <?= $product['cat_title'];?>/-</p>
                           </div>
                       </div>
                   </div>
                   <?php endforeach; 
                   
                   }
                   ?>
               </div>
           </div>
       </div>
   </div>
    
</body>
</html>