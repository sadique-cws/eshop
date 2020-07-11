<?php include_once("../include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin panel | shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    
</head>
<body class="bg-light">

    
    <div class="container mt-5">
        <div class="row">
           
            <div class="col-lg-12">
                <div class="card">
                   <div class="card-header">Insert Products....</div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="cat_title">Title</label>
                                <input type="text" name="cat_title" id="cat_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="cat_description">description</label>
                                 <textarea rows=10 name="cat_description" id="cat_description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="insert_category" class="btn btn-success btn-block">
                            </div>
                            <div class="mb-3">
                                <button type="button" onclick="window.close();window.opener.location.reload(true);" class="btn btn-danger btn-block">close</button>
                            </div>
                        </form>
                        
                        <?php
                        if(isset($_POST['insert_category'])){
                            
                            $fields = [
                                'cat_title' => $_POST['cat_title'],
                                'cat_description' => $_POST['cat_description'],
                            ];
                            
                            //insert data
                            $result = $data->insertData("categories",$fields);
                            $data->redirect("insertCategory");
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>   <?php include_once("include/footer.php");?>

    
</body>
</html>