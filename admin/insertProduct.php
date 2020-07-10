<?php include_once("../include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin panel | shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container">
            <a href="" class="navbar-brand">Admin Panel</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="" class="nav-link">Logout</a></li>
            </ul>
       </div>
    </nav>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action">DashBoard</a>
                    <a href="" class="list-group-item list-group-item-action">Products</a>
                    <a href="" class="list-group-item list-group-item-action">Categories</a>
                    <a href="" class="list-group-item list-group-item-action">Brand</a>
                    <a href="" class="list-group-item list-group-item-action">Users</a>
                    <a href="" class="list-group-item list-group-item-action bg-danger text-white">Logout</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                   <div class="card-header">Insert Products....</div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="brand">Brand</label>
                                <select name="brand" id="brand" class="form-control">
                                   <option value="">Select Brand</option>
                                    <?php 
                                    $brand = $data->callingData('brand');
                                    foreach($brand as $b):
                                    ?>
                                        <option value="<?= $b['brand_id'];?>"><?= $b['brand_name'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                   <option value="">Select Category</option>
                                    <?php 
                                    $category = $data->callingData('categories');
                                    foreach($category as $cat):
                                    ?>
                                        <option value="<?= $cat['cat_id'];?>"><?= $cat['cat_title'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                             <div class="mb-3">
                                <label for="price">price</label>
                                <input type="text" name="price" id="price" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label for="discount_price">Discount Price</label>
                                <input type="text" name="discount_price" id="discount_price" class="form-control">
                            </div>
                             <div class="mb-3">
                                <label for="description">description</label>
                                 <textarea rows=10 name="description" id="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="insert_product" class="btn btn-success btn-block">
                            </div>
                        </form>
                        
                        <?php
                        if(isset($_POST['insert_product'])){
                            $fields = [
                                'title' => $_POST['title'],
                                'brand' => $_POST['brand'],
                                'category' => $_POST['category'],
                                'description' => $_POST['description'],
                                'price' => $_POST['price'],
                                'discounted_price' => $_POST['discount_price'],
                                
                            ];
                            
                            //insert data
                            $result = $data->insertData("products",$fields);
                            $data->redirect("products");
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  
    
    
</body>
</html>