<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Public Sans' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        <?php include '../style.css'; ?>
    </style>
    <link rel='icon' href="../Images/EZaudit-logo-only.png">
    <title>EZaudit | Home</title>
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg  fixed-top" style="
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);">
        <div class="container-fluid">
            <a class="navbar-brand me-5 ps-lg-5" href="index.php">
                <img class="img-fluid img-navbar" src="../Images/EZaudit-logo-navbar.png" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white f-med" aria-current="page" href="#">Solution</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white f-med" href="#">Blog</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active text-white f-med" href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
                <a href="auditorLogin.php" class="me-4">
                    <button type="button" class="btn btn-login text-white">Login</button>
                </a>
            </div>
        </div>
    </nav>

    <!--banner-->

    <div class="banner">
        <div class="section-banner d-flex align-items-center ">
            <div class="text-banner col-lg-6 col-sm-12 text-black d-flex justify-content-center flex-column text-black" style="padding-left: 15%;">
                <div class="d-flex flex-wrap">
                    <h1>
                        Audit System Solution
                        <a style="color: #0056B3;" class="h1 text-decoration-none ">Accurate</a>
                        And
                        <a style="color: #0056B3;" class="h1 text-decoration-none ">Easy To Use</a>
                    </h1>
                </div>
                <ul>
                    <li class="f-med">Audit System that ease the user with portability and easy-to-use system.
                    </li>
                    <li class="f-med">Use the Audit System, customize dashboard platform and connectivity for
                        business
                        effectiveness
                        productivity.</li>
                </ul>
            </div>
            <!-- <div class="image-banner">
                <img src="../images/img_audit2.jpg" class="image-fade"> </div>
            </div> -->
            <div class="image-fade">
                <img src="../images/img_audit2.jpg" class="banner-image"> </div>
            </div>
        </div>
    </div>


    <!--banner end-->


    <!--CAROUSEL-->

    <div id="carouselExampleIndicators" class="carousel slide" style="background-color: #0056B3">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" style="background-color: rgb(115, 115, 115);" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" style="background-color: rgb(115, 115, 115) !important;" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" style="background-color: rgb(115, 115, 115) !important;" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" style="background-color: rgb(115, 115, 115) !important;" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active my-lg-5">
                <div class=" row p-5">
                    <div class="col-lg-8 d-flex flex-wrap justify-content-center align-items-center">
                        <img src="../images/img_dashboard.png" class="img-fluid img-desc app" width="78%" height="500px">
                    </div>
                    <div class="desc-app-sec col-lg-4 text-center text-black d-flex flex-wrap  align-items-center align-content-center">
                        <h1 class="text-decoration-none text-black my-3">Audit with Ease</h1>
                        <h5 class="text-start f-bold" style="color: #d6d6d6 ;">
                            EZaudit provides easy-to-use audit system that can save your expenditure by eliminating paper based method and can save
                            your audit history, audit status, and audit scoring system.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item my-lg-5">
                <div class=" row p-5">
                    <div class="col-lg-8 d-flex flex-wrap justify-content-center align-items-center">
                        <img src="../images/img_dashboard_history.png" class="img-fluid" width="78%" height="500px">
                    </div>
                    <div class="desc-app-sec col-lg-4 text-center text-black d-flex flex-wrap  align-items-center align-content-center">
                        <h1 class="text-decoration-none text-black my-3">Audit History</h1>
                        <h5 class="text-start f-bold" style="color:#d6d6d6 ;">
                            EZaudit provides a screen for a history tracking report that contains information about the
                            date, time, and location for each audit.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item my-lg-5">
                <div class=" row p-5">
                    <div class="col-lg-8 d-flex flex-wrap justify-content-center align-items-center">
                        <img src="../images/img_dashboard.png" class="img-fluid" width="78%" height="500px">
                    </div>
                    <div class="desc-app-sec col-lg-4 text-center text-black d-flex flex-wrap  align-items-center align-content-center">
                        <h1 class="text-decoration-none text-black my-3">Audit Status</h1>
                        <h5 class="text-start f-bold" style="color: #d6d6d6 ;">
                            EZaudit provides an application interface to track the current status of ongoing audit or completed audit
                            with user-friendly features
                        </h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item my-lg-5">
                <div class=" row p-5">
                    <div class="col-lg-8 d-flex flex-wrap justify-content-center align-items-center">
                        <img src="../images/img_dashboard.png" class="img-fluid" width="78%" height="500px">
                    </div>
                    <div class="desc-app-sec col-lg-4 text-center text-black d-flex flex-wrap  align-items-center align-content-center">
                        <h1 class=" text-decoration-none text-black my-3">Audit Scoring</h1>
                        <h5 class="text-start f-bold" style="color:#d6d6d6 ;">
                        EZaudit’s scoring system offers a transparent, objective, and efficient way to evaluate compliance and performance metrics during audits.
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
            </span>

        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg></span>

        </button>
    </div>

    <!--END CAROUSEL-->


    <!--Cust & Part-->

    <div class="container p-md-5 p-4">
        <div style="width: 100%; height: 30px; border-bottom: 1px solid black; text-align: center" class="list-none">
            <span style="font-size: 40px; background-color: white; padding: 0 20px;" class="h1 my-3 ">
                Our Partner
            </span>
        </div>
        <div class="logo-container">
            <img src="../Images/img_AeU.png" class="logo-section ">
            <img src="../Images/img_ccit.png" class="logo-section ">
            <img src="../Images/img_kemendikbud.png" class="logo-section ">
        </div>
    </div>
    <!-- <div class="container  p-md-5 p-4">
        <div style="width: 100%; height: 30px; border-bottom: 1px solid black; text-align: center" class="list-none">
            <span style="font-size: 40px; background-color: white; padding: 0 20px;" class="h1 my-3">
                Our Customer
            </span>
        </div>
        <div class="d-flex flex-wrap my-5 justify-content-center">
            <div class="wrapper">
                <div class="item">
                    <img src="image/logo_airnav-01.png" class="logo-section ">
                </div>
                <div class="item">
                    <img src="image/logo_timor_telecom-01.png" class="logo-section ">
                </div>
                <div class="item">
                    <img src="image/logo_infokom-01.png" class="logo-section ">
                </div>
                <div class="item">
                    <img src="image/logo_angkasaputra.png" class="logo-section ">
                </div>
                <div class="item">
                    <img src="image/logo_ipnet-01.png" class="logo-section ">
                </div>
                <div class="item">
                    <img src="image/Logo_BPN-01.png" class="logo-section ">
                </div>
                <div class="item">
                    <img src="image/Logo_IMigrasi.png" class="logo-section ">
                </div>
            </div>
        </div>
    </div> -->

    <!--Cust & Part end-->

    <!--Contact Us-->

    <div class="bg-contact d-flex align-content-center justify-content-center p-lg-5">
        <div class="d-flex container   row contact-field">
            <div class="col-6 col-lg-4 d-flex align-items-center justify-items-start text-contact">
                <!-- <h1 style="font-size: 310%; color: rgba(255, 255, 255, 0.7)">
                    Don't risk it. Audit with confidence today.
                </h1> -->
                <h1 style="font-size: 310%; color:rgb(0, 0, 0)">
                    Don't risk it. Audit with confidence today.
                </h1>
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-center btn-field">
                <a href="contact_us.php">
                    <button class="btn-contact f-med">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!--Contact Us end-->

    <!--footer-->    
    <div class="container footer">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col-6 mb-3">
                    <a href="index.php" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <img src="../Images/EZaudit-logo.png" style="width: 150px;">
                    </a>
                    <p class="text-muted f-med">&copy; 2024</p>
                </div>

                <div class="col-6 item-footer">
                    <h5 class="f-bold">Contact</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                                EZaudit Team</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                                @EZauditTeam</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    <!--footer end--> 

    <script src="lottie.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
