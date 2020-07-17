<?php require_once("include/config.php");?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Shop - online shop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> </head>

    <body>
        <?php require_once("include/nav.php");?>
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h6>Login Here</h6>
                                <form action="signup.php" method="post">
                                    <div class="mb-3">
                                        <label>name</label>
                                        <input type="text" name="name" class="form-control"> </div>
                                    <div class="mb-3">
                                        <label>contact</label>
                                        <input type="text" name="contact" class="form-control"> </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="text" name="password" class="form-control"> </div>
                                    <div class="mb-3">
                                        <label>gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="m">male</option>
                                            <option value="f">Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>city</label>
                                        <input type="text" name="city" class="form-control"> </div>
                                    <div class="mb-3">
                                        <label>pincode</label>
                                        <input type="text" name="pincode" class="form-control"> </div>
                                    <div class="mb-3">
                                        <input type="submit" name="signup" class="btn btn-success btn-block"> </div>
                                </form>
                                <?php
                                if(isset($_POST['signup'])){
                                    
                                    $fields = [
                                        'name' => $_POST['name'],
                                        'contact' => $_POST['contact'],
                                        'password' => $_POST['password'],
                                        'gender' => $_POST['gender'],
                                        'city' => $_POST['city'],
                                        'pincode' => $_POST['pincode']
                                ];
                                   if($data->insertData('users',$fields)){

                                        $data->alert('account created');
                                        $data->redirect('login');
                                    }
                                    else{
                                        $data->alert('fail');
                                        $data->redirect("signup");
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>