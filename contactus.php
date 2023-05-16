<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css\navbar.css">
    <style>
        /* Add 5% margin to form and ul */
        #contact-form,
        .list-unstyled {
            margin: 5%;
        }

        /* Center the form and ul as 2 columns */
        .row {
            display: flex;
            justify-content: center;
        }

        /* Center the submit button */
        .text-center.text-md-left {
            display: flex;
            justify-content: center;
        }

        /* Update margin bottom for form and ul */
        .col-md-7.mb-md-1.mb-5 {
            margin-bottom: 5%;
        }
    </style>

</head>

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    echo '<div class="text-center mt-4">';
    echo '<img src="bgs\green tick img.webp" alt="Tick Image" width="100">';
    echo '<h3 class="mt-3">Thank You!</h3>';
    echo '<p>Your form has been submitted successfully.</p>';
    echo '</div>';

    // Display table with user information
    echo '<div class="text-center mt-4">';
    echo '<h4>User Information</h4>';
    echo '<table class="table">';
    echo '<tr><th>Name</th><td>' . $name . '</td></tr>';
    echo '<tr><th>Email</th><td>' . $email . '</td></tr>';
    echo '<tr><th>Subject</th><td>' . $subject . '</td></tr>';
    echo '<tr><th>Message</th><td>' . $message . '</td></tr>';
    echo '</table>';
    echo '</div>';
}
?>

    
    <div class="navbarcontained">
        <nav class="navbar navbar-expand-md ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <div>
                        <img id='logo' src="logoNmainImg\logoWObg.png" alt="Logo" width="10%" height="10%"
                            class="d-inline-block align-top">
                        <span id="maintitle">Art
                            Junction</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="photos.html" photos.html>Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="funpage.html">Funpage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="questionnaire.html">Questionnaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calculationsPG.html">Frames cost</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--Section: Contact v.2-->
    <section class="mb-4" style="background-image: url(bgs\gallerybg.jpg);">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bolder text-center my-4"
            style="font-size: xxx-large; font-weight: bolder; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
            Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5"
            style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Do
            you have any questions?
            Please do not hesitate to contact us
            directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-7 mb-md-1 mb-5">
                <form id="contact-form" name="contact-form" action="" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="md-form mb-0">
                                <label for="name" class="">Your name</label>
                                <input type="text" id="name" name="name" class="form-control">

                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="md-form mb-0">
                                <label for="email" class="">Your email</label>
                                <input type="text" id="email" name="email" class="form-control">

                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control">

                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-8">

                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" rows="2"
                                    class="form-control md-textarea"></textarea>

                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Muscat, CA 94126, Oman</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 968 9900 0000</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
            <div class="col-md-7 mb-md-1 mb-5"></div>
        </div>

    </section>
    <script>
        document.querySelector(".navbar-toggler").addEventListener("click", function () {

            document.querySelector(".navbar-collapse").classList.toggle("collapse");

        });
    </script>
</body>
<footer class="bg-dark text-center text-white">
    <div class="container text-center">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <section class="">
                <table>
                    <tr>
                        <td style="float: left;">
                            <div>
                                <img id='logo' src="logoNmainImg\logoWObg.png" alt="Logo" width="10%" height="10%"
                                    class="d-inline-block align-top dontcss">

                                <span
                                    style="font-size: 2rem; color: #5ef1d1; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                                    Art Junction</span>
                                <br>
                                <br>
                                <br>
                                <a href="aboutus.html" style="color: white;">About us</a>
                                <br>
                                <br>
                                <a href="contactus.html" style="color: white;">Contact us</a>
                            </div>
                        </td>
                        <td style="text-align: left;">
                            <form action="https://formspree.io/f/meqwpjnn" method="post">
                                <!--Grid row-->
                                <div class="row d-flex justify-content-center">
                                    <!--Grid column-->
                                    <div class="col-10">
                                        <p class="pt-2">
                                            <strong>Sign up for our newsletter</strong>
                                        </p>
                                    </div>
                                    <!--Grid column-->
                                    <!--Grid column-->
                                    <div class="col-10">
                                        <!-- Email input -->
                                        <div class="form-outline form-white mb-4">
                                            <input type="email" id="form5Example29" class="form-control"
                                                placeholder="Type your email" name="Email" />
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                    <!--Grid column-->
                                    <div class="col-10">
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-outline-light mb-4">
                                            Subscribe
                                        </button>
                                    </div>
                                    <!--Grid column-->
                                </div>
                                <!--Grid row-->
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="container p-4 pb-0">
                                <!-- Section: Social media -->
                                <section class="mb-4">
                                    <!-- Facebook -->
                                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img
                                            src="bgs\icons8-facebook-24.png" alt="Facebook Icon" width="30"
                                            height="30"></a>
                                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img
                                            src="bgs\icons8-whatsapp-480.png" alt="whatsapp icon" width="30"
                                            height="30"></a>
                                    <!-- Google -->
                                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img
                                            src="bgs\icons8-instagram-480.png" alt="instagram icon" width="30"
                                            height="30"></a>
                                </section>
                                <!-- Section: Social media -->
                            </div>
                            <!-- Grid container -->
                        </td>
                    </tr>
                </table>
            </section>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </div>
</footer>

</html>