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
                        <li class="nav-item active px-lg-4">
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
                                    <span class="section-heading-upper">Security check</span>
                                    <span class="section-heading-lower">About your access</span>
                                </h2>
                                <?php
                                extract( $_POST);

                                //check if user has left USERNAME or PASSWORD field blank
                                if (!$USERNAME || !$PASSWORD) {
                                    fieldsBlank();
                                    die();
                                }

                                // open file for reading
                                if (!( $file = fopen("password.txt","r"))){
                                    print("<title>Error</title></head>
                                    <body>Could not open password file</body></html>");
                                    die();
                                }

                                $userVerified = 0;

                                // read each line in file and check username
                                // and password
                                while (!feof($file) && !$userVerified) {

                                    //read line form file
                                    $line = fgets($file,255);
                                    //remove newline character from end of line
                                    $line = chop($line);

                                    //split username and password
                                    $field = explode(",", $line);

                                    //verify username
                                    if ($USERNAME == $field[0]){
                                        $userVerified = 1;

                                        //call function checkPassword to verify user's password
                                        if (checkPassword( $PASSWORD, $field) == true)
                                            accessGranted( $USERNAME );
                                        else
                                            wrongPassword();

                                    }
                                }

                                fclose($file);

                                //call function accessDenied if username ahs not been verified
                                if (!$userVerified)
                                    accessDenied();

                                function checkPassword( $userpassword, $filedata)
                                {
                                    if ( $userpassword == $filedata[1])
                                        return true;
                                    else
                                        return false;
                                }

                                //print a message indicating permission has been granted
                                function accessGranted( $name )
                                {
                                    print("<strong>Permission has been granted, $name.<br />
                                        Enjoy the site.</strong>");
                                }

                                function wrongPassword()
                                {
                                    print("<strong>You entered an invalid password.<br />
                                       Access has been denied.</strong>");
                                }

                                function accessDenied()
                                {
                                    print("<strong>You were denied access to this server.<br /></strong>");
                                }

                                function fieldsBlank()
                                {
                                    print("<strong>Please fill in all form fields.<br />
                                       </strong>");
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
