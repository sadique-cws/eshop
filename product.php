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
   
   
   <div class="container-fluid mt-5">
       <div class="row">
           <div class="col-lg-2">
                <?php include_once('include/side.php');?>
           </div>
           <div class="col-lg-10">
               <div class="row">
                  <?php 
                   $id = $_GET['pro_id'];
                   $products = $data->callingDataQuery(
                        "SELECT * FROM products 
                        JOIN brand ON products.brand = brand.brand_id
                        JOIN categories ON products.category = categories.cat_id where products.product_id='$id'"
                    );
                    foreach($products as $product):
                   ?>
                   <div class="col-lg-12">
                      <div class="row">
                          <div class="col-lg-4">
                               <img src="image/product/<?= $product['image'];?>" class="card-img-top" alt="">
                          </div>
                          <div class="col-lg-8">
                           <h5 class="h3 text-uppercase"><?= $product['title'];?></h5>
                               <p class="h5">
                                   <span class="text-success font-weight-bold">Rs. <?= $product['price'];?>/-</span>
                                   <span class="text-muted small"><del><?= $product['price'];?>/-</del></span>
                               </p>
                               <p class="small">Rs. <?= $product['description'];?>/-</p>
                           
                            <div class="row">
                                <div class="col-lg-3">
                                    <a href="" class="btn btn-success btn-block">Add to Cart</a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="" class="btn btn-secondary btn-block">Know More</a>
                                </div>
                            </div>
                            </div>   
                            
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h6>Design</h6>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam alias natus pariatur velit deserunt, ullam cupiditate ex voluptate tenetur laboriosam sed dignissimos animi reiciendis ducimus perspiciatis? Provident possimus ut, ullam.</p>
                                        
                                            <h6>Material</h6>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam alias natus pariatur velit deserunt, ullam cupiditate ex voluptate tenetur laboriosam sed dignissimos animi reiciendis ducimus perspiciatis? Provident possimus ut, ullam.</p>
                                        
                                            <h6>Comforts</h6>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam alias natus pariatur velit deserunt, ullam cupiditate ex voluptate tenetur laboriosam sed dignissimos animi reiciendis ducimus perspiciatis? Provident possimus ut, ullam.</p>
                                        </div>
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