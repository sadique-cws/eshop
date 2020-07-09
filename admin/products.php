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
               <blockquote class="blockqoute float-left">Manage Products</blockquote>
                
                <div class="btn-group float-right btn-group-sm">
                    <a href="" class="btn btn-danger">Print</a>
                    <a href="" class="btn btn-info">Export</a>
                    <a href="" class="btn btn-success">Insert</a>
                </div>
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    
                    <!-- todo: calling products in loop -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                </table>
            </div>
            
        </div>
    </div>
    <!-- JavaScript and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  
    
    
</body>
</html>