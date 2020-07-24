<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container"> <a href="index.php" class="navbar-brand">Shop</a>
        <form action="" class="d-flex mx-auto">
            <input type="search" class="form-control" size="70" placeholder="search product">
            <input type="submit" class="btn btn-success"> </form>
        <ul class="navbar-nav ml-auto">
            <?php 
            if(isset($_SESSION['user'])):
            ?>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <?= $_SESSION['user'];?>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Logout.php" class="btn btn-danger">
                        Logout
                    </a>
                </li>
                <?php else: ?>
                    <li class="nav-item"><a href="signup.php" class="nav-link">SignUp</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <?php endif;?>
                        <li class="nav-item"><a href="" class="nav-link">Cart</a></li>
        </ul>
    </div>
</nav>