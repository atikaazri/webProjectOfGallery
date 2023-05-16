<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css\navbar.css">
    <title>Questionnaire</title>
    <style>
        /* Center the form */
        form {
            max-width: 500px;
            margin: 0 auto;
        }

        /* Add some padding between form elements */
        form>* {
            margin: 8px 0;
        }

        /* Style form labels */
        label {
            font-size: 1em;
            font-weight: bold;
        }

        /* Style text inputs */
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="date"] {
            display: block;
            width: 100%;
            padding: 8px;
            font-size: 1em;
            border: none;
            border-bottom: 1px solid #343a40;
            transition: border-bottom-color 0.3s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus {
            border-bottom-color: #3c4248;
            outline: none;
        }

        /* Style range input */
        input[type="range"] {
            display: block;
            width: 100%;
        }

        /* Style checkboxes */
        input[type="checkbox"] {
            margin-right: 3px;
            display: inline;
        }

        /* Style submit and reset buttons */
        input[type="submit"],
        input[type="reset"] {
            display: inline-block;
            padding: 8px 16px;
            margin: 10px;
            font-size: 1em;
            font-weight: bold;
            color: white;
            background-color: #343a40;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #3c4248;
        }
    </style>

</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<div class="text-center mt-4">';
    echo '<img src="bgs\green tick img.webp" alt="Tick Image" width="100">';
    echo '<h3 class="mt-3">Thank You!</h3>';
    echo '<p>Your form has been submitted successfully.</p>';
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
    <div>
        <br>

        <h2 style="font-size: 2em; color: #333; font-weight: bold; text-align: center;">Your Opinion Matters</h2>
        <p style="font-size: 1.2em; color: #666; text-align: center;">Thank you for taking the time to answer this. We
            would
            love to hear from you!</p>
        <br>
        <form action="" onsubmit="return validate()" name="questionnaire" method="POST">
            <label for="name">Enter your name:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="phone">Enter your phoneNumber:</label>
            <input type="tel" name="phone" id="phone">
            <br>
            <label for="email">Enter your email:</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="date">Enter yor birthdate:</label>
            <input type="date" name="date" id="date">
            <br>
            <label for="satisfaction">Overall, how was your experience?</label>
            <input type="range" name="satisfaction" id="satisfaction">
            <br>
            <label for="like">what did you like about our website?</label>
            <br>
            <input type="checkbox" id="interface" name="interface" value="interface">
            <label for="interface"> Interface</label>
            <br>
            <input type="checkbox" id="services" name="services" value="services">
            <label for="services"> Services</label>
            <br>
            <input type="checkbox" id="pictures" name="pictures" value="pictures">
            <label for="pictures"> Pictures</label>
            <br>
            <br>


            <input type="submit" value="submit">
            <input type="reset" value="reset">




        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.querySelector(".navbar-toggler").addEventListener("click", function () {

            document.querySelector(".navbar-collapse").classList.toggle("collapse");

        });
        function validate() {
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;
            //name has to be at least 3 letters 
            if (name.length <= 1 || !name.match(/^[a-z\s]{3,}/i)) {
                alert('invalid name')
                return false
            }
            if (!email.match(/^\w+@\w+\.com/)) {
                alert('invalid email')
                return false
            }
            if (phone < 10000000 || phone > 99999999) {
                alert('invalid phone number')
                return false
            }
            return true
        }



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