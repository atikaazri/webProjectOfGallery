<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css\navbar.css">
    <title>Calculate framing cost</title>
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
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form input values
        $height = $_POST['height'];
        $width = $_POST['width'];
        $materialType = $_POST['materialType'];
        $currency = $_POST['currency'];
        $discounts = isset($_POST['discounts']) ? $_POST['discounts'] : array();
    
        // Perform the necessary calculations
        $frame = 2 * ($height + $width);
        $cost = 0;
    
        if ($materialType == 'Wood') {
            $cost = $frame * 1.5;
        } elseif ($materialType == 'Metal') {
            $cost = $frame * 1.0;
        } elseif ($materialType == 'Plastic') {
            $cost = $frame * 0.75;
        } else {
            $cost = $frame * 0.5;
        }
    
        // Apply discounts
        foreach ($discounts as $discount) {
            if ($discount == 'student') {
                $cost *= 0.75;
            } elseif ($discount == 'omani') {
                $cost *= 0.9;
            } elseif ($discount == 'ship') {
                $cost *= 0.95;
            }
        }
    
        // Convert currency
        if ($currency == 'USD') {
            $cost /= 2.6;
        } elseif ($currency == 'AED') {
            $cost /= 9.54;
        }
    
        // Render the result
        echo '<h2 style="font-size: 2em; color: #333; font-weight: bold; text-align: center;">Calculation Result</h2>';
        echo '<p style="font-size: 1.2em; color: #666; text-align: center;">The cost is: ' . number_format($cost, 2) . ' ' . $currency . '</p>';
    } else {
        echo '<p style="font-size: 1.2em; color: #666; text-align: center;">Form not submitted.</p>';
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
    <br>
    <h2 style="font-size: 2em; color: #333; font-weight: bold; text-align: center;">Calculate framing cost!</h2>
    <p style="font-size: 1.2em; color: #666; text-align: center;">This page was made to help you approximate the cost of
        framing your art works.</p>
    <br>

    <div style="text-align: center; ">
        <p id="cost" style="font-size: 2em; color: #333; font-weight: bold; text-align: center;"></p>
    </div>

    <form action="" method="POST">
        <label for="height">Picture height:</label>
        <input type="number" required name="height" id="height" min="5">
        <br>
        <label for="width">Picture width:</label>
        <input type="number" required name="width" id="width" min="5">
        <br>
        <label for="materialType">Frame material type:</label>
        <input list="materialType" required name="materialType" id="toretrieveValue">
        <br>
        <datalist id="materialType">
            <option value="Wood">
            <option value="Metal">
            <option value="Plastic">
        </datalist>
        <br>
        <br>

        <label for="currency">Currency:</label>
        <br>
        <input type="radio" id="omr" name="currency" value="OMR">
        <label for="omr">OMR</label>
        <br>
        <input type="radio" id="usd" name="currency" value="USD">
        <label for="usd">USD</label>
        <br>
        <input type="radio" id="aed" name="currency" value="AED">
        <label for="aed">AED</label>

        <br>
        <br>
        <input type="checkbox" id="discount1" name="student" value="dis1">
        <label for="student">student 25% off</label><br>
        <input type="checkbox" id="discount2" name="omani" value="dis2">
        <label for="omani">omani 10% off</label><br>
        <input type="checkbox" id="discount3" name="ship" value="dis3">
        <label for="ship">w/out shipping 5% off</label><br>
        <br>
        <input type="submit">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        //this function will be called when form is submitted
        function whatever() {
            //get input values
            let height = document.getElementById('height').value;
            console.log(height)
            let width = document.getElementById('width').value;
            console.log(width)
            var selectedMaterial = $('#toretrieveValue').val();
            //initialize random stuff
            const woodCost = 1.5;
            const metalCost = 1.0;
            const plasticCost = 0.75;
            const anyThingElse = 0.5;
            let cost;
            //calculate circumstance
            let frame = 2 * (parseInt(height) + parseInt(width));
            //decide cost based on material
            if (selectedMaterial == 'Wood') {
                cost = frame * woodCost
            }
            else if (selectedMaterial == 'Metal') {
                cost = frame * metalCost
            }
            else if (selectedMaterial == 'Plastic') {
                cost = frame * plasticCost
            }
            else {
                cost = frame * anyThingElse
            }
            console.log(cost)
            //if there is any discounts apply all checked
            let checkedDiscounts = document.querySelectorAll('input[type="checkbox"]:checked')
            for (i of checkedDiscounts) {
                if (i.value == 'dis1') {
                    cost = cost * 0.75
                }
                else if (i.value == 'dis2') {
                    cost = cost * 0.9
                }
                else {
                    cost = cost * 0.95
                }
            }


            console.log(cost)
            //exchange currency, this is just a basic exchange rate
            var checkedRadio = document.querySelector('input[name="currency"]:checked');
            if (checkedRadio) {
                var selectedCurrency = checkedRadio.value;
                if (selectedCurrency == 'USD') {
                    cost = cost / 2.6
                }
                else if (selectedCurrency == 'AED') {
                    cost = cost / 9.54
                }
            } else {
                alert("Please select a currency");
            }
            //write the value
            let calculation = document.getElementById('cost');
            calculation.innerHTML = 'The cost is: ' + cost.toFixed(2) + ' ' + selectedCurrency

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