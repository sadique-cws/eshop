<?php include_once("../include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin panel | shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    
</head>
<body class="bg-light">
      <?php include_once("include/nav.php");?>

    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                  <?php include_once("include/side.php");?>

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
                                <label for="image">image</label>
                                 <input type="file" rows=10 name="image" id="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="insert_product" class="btn btn-success btn-block">
                            </div>
                        </form>
                        
                        <?php
                        if(isset($_POST['insert_product'])){
                            
                            $img = $_FILES['image']['name'];
                            $tmp_img = $_FILES['image']['tmp_name'];
                            
                            $fields = [
                                'title' => $_POST['title'],
                                'brand' => $_POST['brand'],
                                'category' => $_POST['category'],
                                'description' => $_POST['description'],
                                'price' => $_POST['price'],
                                'discounted_price' => $_POST['discount_price'],
                                'image' => $img
                                
                            ];
                            
                            //insert data
                            
                            move_uploaded_file($tmp_img,"../image/product/$img");
                            
                            $result = $data->insertData("products",$fields);
                            $data->redirect("products");
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>   <?php include_once("include/footer.php");?>

    
</body>
</html>