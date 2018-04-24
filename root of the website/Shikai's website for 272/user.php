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
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
                        </li>
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
                        </li>
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="contacts.php">Contacts</a>
                        </li>
                        <li class="nav-item active px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="user.php">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="page-section">
            <div class="container">
<!--                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/products-01.jpg.jpg" alt="">-->
                <div class="product-item">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">User section</span>
                                    <span class="section-heading-lower">Add user here</span>
                                </h2>
                                <form id="addForm" name="sentMessage" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" name="firstname" type="text" placeholder="Your First Name *" required data-validation-required-message="Please enter your first name.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="lastname" type="text" placeholder="Your Last Name *" required data-validation-required-message="Please enter your last name.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" name="homePhone" type="tel" placeholder="Your Home Phone *" required data-validation-required-message="Please enter your home phone number.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="cellPhone" type="tel" placeholder="Your Cell Phone *" required data-validation-required-message="Please enter your cell phone number.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" name="homeAddress" placeholder="Your Adress *" required data-validation-required-message="Please enter your address.">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-12 text-center">
                                            <div id="success"></div>
                                            <button name="addUserButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Add User</button>
                                        </div>
                                    </div>
                                </form>

                                <?php
                                    if (isset($_POST['addUserButton'])) {
//                                        print("Show some results");
                                        extract($_POST);
                                        if (!$_POST['firstname'] || !$_POST['lastname'] || !$_POST['email']) {
                                            fieldsBlank();
                                            die();
                                        }

                                        $conn = mysqli_connect('jinshikai50430.ipagemysql.com',"guest_newuser","nu123456","mydb");
                                        if (!$conn) {
                                            die("Failed to connect to the database");
                                        }
                                        $sql = "INSERT INTO users (firstname, lastname, email, homeAddress, homePhone, cellPhone) values (?,?,?,?,?,?)";
                                        $stmt = mysqli_prepare($conn,$sql);
                                        $stmt->bind_param("ssssss",$_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['homeAddress'],$_POST['homePhone'],$_POST['cellPhone']);
                                        if ($stmt->execute()){
                                            print("New record created successfully<br />");
                                            print("<strong>Please don't add the same user again!</strong>");
                                        }
                                        else {
                                            die("Error: ".$sql."<br>".$conn->error);
                                        }

                                        $conn->close();
                                    }
                                    function fieldsBlank()
                                    {
                                        print("<strong>Please fill in all form fields.<br /></strong>");
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="page-section">
        <div class="container">
<!--            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/products-02.jpg.jpg" alt="">-->
            <div class="product-item">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">User section</span>
                                <span class="section-heading-lower">Search user here</span>
                            </h2>
                            <form id="searchForm" name="searchMessage" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" novalidate>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" name="searchFName" type="text" placeholder="Your First Name *" required data-validation-required-message="Please enter your first name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="searchLName" type="text" placeholder="Your Last Name *" required data-validation-required-message="Please enter your first name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="searchEmail" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="searchPhone" type="tel" placeholder="Your home phone or cellphone number *" required data-validation-required-message="Please enter your phone number.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button name="searchUserButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['searchUserButton'])) {
//                                print("show something<br \>");
                                //connect to the mysql database
                                $conn = mysqli_connect('jinshikai50430.ipagemysql.com',"guest_newuser","nu123456","mydb");
                                if (!$conn) {
                                    die("Failed to connect to the database");
                                }
                                //define the list of fields
                                $fields = array('firstname','lastname','email','homePhone','cellPhone');
                                $conditions = array();
                                //loop through the defined fields
//                                if(isset($_POST['searchName']) && $_POST['searchName']!=''){
//                                    $names = explode(' ',$_POST['searchName']);
//                                    $conditions[] = "firstname = '".$names[0]."' ";
//                                    $conditions[] = "lastname = '".$names[1]."' ";
//                                }
                                if(isset($_POST['searchFName']) && $_POST['searchFName']!=''){
                                    $fnameSearch = $_POST['searchFName'];
                                    $conditions[] = "firstname = '".mysqli_real_escape_string($conn,$fnameSearch)."'";
                                }
                                if(isset($_POST['searchLName']) && $_POST['searchLName']!=''){
                                    $lnameSearch = $_POST['searchLName'];
                                    $conditions[] = "lastname = '".mysqli_real_escape_string($conn,$lnameSearch)."'";
                                }
                                if(isset($_POST['searchEmail']) && $_POST['searchEmail']!=''){
                                    $emailSearch = $_POST['searchEmail'];
                                    $conditions[] = "email = '".mysqli_real_escape_string($conn,$emailSearch)."'";
                                }
                                if(isset($_POST['searchPhone']) && $_POST['searchPhone']!=''){
                                    $phoneSearch = mysqli_real_escape_string($conn,$_POST['searchPhone']);
                                    $conditions[] = "homePhone = '$phoneSearch' OR cellPhone = '$phoneSearch'";
                                }

                                $sql = "SELECT * FROM users";
                                if(count($conditions)>0){
                                    $sql .=" WHERE ". implode(' AND ',$conditions);
                                    print("<strong>Search Result:</strong><br />");
                                    if ($stmt = mysqli_prepare($conn,$sql)){
                                        mysqli_stmt_execute($stmt);
                                        mysqli_stmt_bind_result($stmt,$col1, $col2, $col3, $col4, $col5, $col6,$col7);
//                                        print("<table border = '1' cellpadding = '3' cellspacing = '2'>");
//                                        while (mysqli_stmt_fetch($stmt)){
//                                            print("<tr>");
//                                            printf("<td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td>", $col2, $col3, $col4, $col5, $col6,$col7);
//                                            print("</tr>");
//                                        }
//                                        print("</table>");
                                        $counter = 0;
                                        while (mysqli_stmt_fetch($stmt)){
                                            printf("%s  %s  %s  %s  %s  %s  <br />", $col2, $col3, $col4, $col5, $col6,$col7);
                                            $counter++;
                                        }
                                        mysqli_stmt_close($stmt);
                                        if($counter>0){
                                            print("<br />Your search yielded $counter results");
                                        }
                                        else {
                                            print("<br />Your search yielded 0 result");
                                        }

                                    }
                                }
//                                print($sql);

                                mysqli_close($conn);
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
