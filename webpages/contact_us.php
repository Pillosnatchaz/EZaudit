
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
    <title>EZaudit | Contact Us</title>
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

    <!--navbar end-->

    <div class="bg-contact-us">
        <div class="container">
            <div class="col-12">
                <div class="text-white text-center d-flex flex-column align-items-center mb-4">
                    <h1>
                        Connect With Us
                    </h1>
                    <p>
                        Get a solution from us for your audit needs, by filling out the form or you can contact us at
                        the
                        contact information below.
                    </p>
                </div>
                <form method="POST" id="form-contact-us" enctype="multipart/form-data">
                    <!-- <form action="./script.php" method="POST"> -->
                    <div class="card-contact">
                        <div class="mb-3">
                            <label for="input-name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="input-name" name="name" aria-describedby="nameHelp" pattern=".{3,}" title="Please enter at least 3 characters">
                        </div>
                        <div class="mb-3">
                            <label for="input-email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="input-email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="input-number" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="input-number" name="number" aria-describedby="telpHelp">
                        </div>
                        <div class="mb-3">
                            <label for="input-request" class="form-label">Request</label>
                            <select type="text" class="form-select" aria-label="Default select example" id="input-request" name="request">
                                <option disabled selected>-- Select Request --</option>
                                <option value="Demo">Demo</option>
                                <option value="Discussion">Discussion</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="input-description" class="form-label">Description</label>
                            <textarea type="text" class="form-control" id="input-description" name="description" rows="3" style="height: 200px;"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                        </div>
                        <button type="submit" id="submit" name="submit" class="btn btn-submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

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
                            EZaudit Team
                        </a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                            @EZauditTeam
                        </a></li>
                </ul>
            </div>
        </footer>
    </div>
    <!--footer end-->

    <script src="lottie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<script src="../scripts/emailSender.js"></script>
<!-- <script src="../scripts/reCaptcha.php"></script> -->
<script>
    $(function() {
        function rescaleCaptcha() {
            var width = $('.g-recaptcha').parent().width();
            var scale;
            if (width < 302) {
                scale = width / 302;
            } else {
                scale = 1.0;
            }

            $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
            $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
            $('.g-recaptcha').css('transform-origin', '0 0');
            $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
        }
        rescaleCaptcha();
        $(window).resize(function() {
            rescaleCaptcha();
        });
    });
</script>