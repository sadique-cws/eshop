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
               <blockquote class="blockqoute float-left">Manage Categories</blockquote>
                
                <div class="btn-group float-right btn-group-sm">
                    <a href="" class="btn btn-danger">Print</a>
                    <a href="" class="btn btn-info">Export</a>
                    <a href="javascript:window.open('insertCategory.php','insert category','popup','width=200')" class="btn btn-success">Insert</a>
                </div>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>description</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    
                    <!-- todo: calling products in loop -->
                    <?php 
                    $categories = $data->callingDataQuery("SELECT * FROM categories");
                    foreach($categories as $cat):
                    ?>
                    <tr>
                        <td><?= $cat['cat_id'];?></td>
                        <td><?= $cat['cat_title'];?></td>
                        <td><?= $cat['cat_description'];?></td>
                        <td><?= $cat['cat_status'];?></td>
                        <td>
                            <a href="" class="btn btn-success btn-sm">View</a>
                            <a href="" class="btn btn-info btn-sm">edit</a>
                            <a href="" class="btn btn-danger btn-sm">X</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
            
        </div>
    </div>
     <?php include_once("include/footer.php");?>

    
</body>
</html>