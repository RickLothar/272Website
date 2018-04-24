<!DOCTYPE html>
<html lang="en">

<?php
include( 'head.php' );
?>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="news.php">News</a>
                </li>
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="contacts.php">Contacts</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="user.php">Users</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/products-01.jpg" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Great product</span>
                    <span class="section-heading-lower">Worth Ordering</span>
                </h2>
                <p class="mb-3"> Not sure what to order? Find out what others are seeing, and give them a try!
                </p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="product_recents.php">See our favorites!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <h2 class="section-heading mb-5">
                    <span class="section-heading-upper">Check out</span>
                    <span class="section-heading-lower">our menu</span>
                </h2>
                <p></p>


                <p><STRONG><u>DRINK</u></STRONG></p>
                <p>
                    <a href="product_americano.php">American Coffee</a>
                </p>
                <p><a href="product_latte.php">Latte</a></p>

                <p><a href="product_cappuccino.php">Cappuccino</a> </p>
                <p><a href="product_flatwhite.php">Flat White</a> </p>
                <p><a href="product_greentea.php">Green Tea</a> </p>
                <p><a href="product_blacktea.php"> Black Tea</a></p>
                <p><STRONG><u>FOOD</u></STRONG></p>
                <p><a href="product_croissant.php">Croissant</a> </p>
                <p><a href="product_toast.php">Toast</a> </p>
                <p><a href="product_twist.php">Twist</a> </p>
                <p><a href="product_sandwich.php">Sandwich</a> </p>

            </div>
        </div>
    </div>
</section>



<footer class="footer text-faded text-center py-5">
    <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
        <p class="m-0 small">Images from this page credit to starbucks</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
