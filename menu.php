<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iGELATO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>GELATO</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="menu.php" class="nav-item nav-link active">Menu</a>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>GELATO</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="team.html" class="nav-item nav-link">Team</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Menu iGELATO</h1>
        </div>
    </div>
    <!-- Header End -->

    <!-- Products Start Gelato -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Variant Rasa</h1>
                </div>
            </div>

            <div class="row">
                <?php
                include 'koneksi.php';
                $sql    = "SELECT * FROM rasa";
                $query  = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <h5 class="font-weight-bold mb-4"><?= $data['rasa']; ?></h5>
                            <p class="font-weight-bold mb-4">Rp <?= $data['harga_rasa']; ?></p>
                        </div>
                    </div>
                <?php }    ?>
            </div>

        </div>
    </div>
    </div>
    <!-- Products End -->

    <!-- Products Start Topping -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Variant Topping</h1>
                </div>
            </div>

            <div class="row">
                <?php
                include 'koneksi.php';
                $sql    = "SELECT * FROM topping";
                $query  = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <h5 class="font-weight-bold mb-4"><?= $data['topping']; ?></h5>
                            <p class="font-weight-bold mb-4">Rp <?= $data['harga_topping']; ?></p>
                        </div>
                    </div>
                <?php }    ?>
            </div>

        </div>
    </div>
    </div>
    <!-- Products End -->

    <!-- Products Start Cup -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Variant Cup</h1>
                </div>
            </div>

            <div class="row">
                <?php
                include 'koneksi.php';
                $sql    = "SELECT * FROM wadah";
                $query  = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <h5 class="font-weight-bold mb-4"><?= $data['wadah']; ?></h5>
                            <p class="font-weight-bold mb-4">Rp <?= $data['harga_wadah']; ?></p>

                        </div>
                    </div>
                <?php }    ?>
            </div>

        </div>
    </div>
    </div>
    <!-- Products End -->

    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">i</span>GELATO</h1>
                    </a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">UPN Yogyakarta</p>
                            <p class="mb-0">085 123 456 789</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat, 9AM – 5PM</p>
                            <p class="mb-0">Sunday : Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; 123210139_123210135_123210142</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>