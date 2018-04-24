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

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">what did you see</span>
                            <span class="section-heading-lower">Our recent visit products</span>
                        </h2>
                        <?php
//                        print("test");
                        $timearray=array();
                        $products=array("american"=> "American Coffee","latte"=>"Latte","cappuccino"=>"Cappuccino","flatwhite"=>"Flat White","greentea"=>"Green Tea","blacktea"=>"Black Tea","croissant"=>"Croissant","twist"=>"Twist","sandwich"=>"Sandwich");
//                        foreach ($_COOKIE as $key=>$value)
//                            print("<p>$key</p><p>$value</p>");

                        foreach ($products as $key=>$value){
//                            print("<p>$value</p>");
                            if(isset($_COOKIE[$key])){
//                                print("Key found!");
                                $timearray[$value]=$_COOKIE[$key];
                            }


                        }

//                        print($timearray);
                        arsort($timearray);
                        $count=0;

                        foreach ($timearray as $key=>$value) {
                            print("<p>$key</p>");
                            $count++;
                            if($count>=5) break;
                        }
                        ?>
                       </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer text-faded text-center py-5">
    <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
