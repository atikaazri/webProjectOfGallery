<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css\stuff.css">
    <title>Artists Blog</title>

    <style>
        .arttable {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid #000;
            margin: 0 auto;
            margin-bottom: 20px;
            max-width: 80%;
            align-items: center;
        }

        /* Style for table cells */
        .thelement,
        .tdelement {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        /* Style for table header */
        .thelement {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        /* Style for alternating row colors */
        .trelement:nth-child(even) {
            background-color: #f9f9f9;
        }

        .uploadip {
            margin: auto 10px;
        }

        h2 {
            font-weight: bolder;
            color: #ffffff;
            margin: 10px;
            font-size: 3rem;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }
    </style>
    <link rel="stylesheet" href="css\navbar.css">

</head>

<body style="text-align: center;">
<?php
echo 'hi';
echo 'working';

session_start();

// Check if the artists array exists in the session
if (!isset($_SESSION['artists'])) {
    // If it doesn't exist, initialize it as an empty array
    $_SESSION['artists'] = array();
}
class Artist {
    private $name;
    private $nationality;
    private $birthyear;
    private $artwork1;
    private $artwork2;
    private $artwork3;

    function __construct($name, $nationality, $birthyear, $artwork1, $artwork2, $artwork3) {
        $this->name = $name;
        $this->nationality = $nationality;
        $this->birthyear = $birthyear;
        $this->artwork1 = $artwork1;
        $this->artwork2 = $artwork2;
        $this->artwork3 = $artwork3;
    }

    function getname() {
        return $this->name;
    }

    function getnationality() {
        return $this->nationality;
    }

    function getbirthyear() {
        return $this->birthyear;
    }

    function getartwork1() {
        return $this->artwork1;
    }

    function getartwork2() {
        return $this->artwork2;
    }

    function getartwork3() {
        return $this->artwork3;
    }
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
                            <a class="nav-link" href="photos.html">Gallery</a>
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





    <div class='container' style="background-image: linear-gradient(rgba(195, 195, 195, 0.3), rgba(195, 195, 195, 0.3)), url('https://okcredit-blog-images-prod.storage.googleapis.com/2020/12/art2.jpg');;
                background-size: contain;
                background-position: center;
                background-color: #f2f2f2;
                height: 10vw;
                width: 100vw; align-content: center; align-items:center;display: flex; justify-content: center;">
        <h2>Artist Blog</h2>
    </div>
    <br>
    <br>

    <table class="arttable" id="artists">
        <tr class="trelement">
            <th class="thelement">Artist</th>
            <th class="thelement">Nationality</th>
            <th class="thelement">Birth year</th>
            <th class="thelement" colspan="3">Art works</th>
        </tr>
        <tr class="trelement">
            <td class="tdelement">Leonardo da Vinci</td>
            <td class="tdelement">Italian</td>
            <td class="tdelement">1452</td>
            <td class="tdelement">Mona Lisa</td>
            <td class="tdelement">The Last Supper</td>
            <td class="tdelement">Vitruvian Man</td>

        </tr>
        <tr class="trelement">
            <td class="tdelement">Vincent van Gogh</td>
            <td class="tdelement">Dutch</td>
            <td class="tdelement">1853</td>
            <td class="tdelement">Starry Night</td>
            <td class="tdelement">The Botato Eaters</td>
            <td class="tdelement">Sun Flowers</td>
        </tr>
        <tr class="trelement">
            <td class="tdelement">Pablo Picasso</td>
            <td class="tdelement">Spanish</td>
            <td class="tdelement">1881</td>
            <td class="tdelement">Les Demoiselles d'Avignon</td>
            <td class="tdelement">Guernica</td>
            <td class="tdelement">The Weeping Woman</td>
        </tr>
    </table>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $nationality = $_POST['nationality'];
        $birthyear = $_POST['birthYear'];
        $artwork1 = $_POST['artwork1'];
        $artwork2 = $_POST['artwork2'];
        $artwork3 = $_POST['artwork3'];
        $artist = new Artist($name, $nationality, $birthyear, $artwork1, $artwork2, $artwork3);

    // Retrieve the artists array from the session
    $artists = $_SESSION['artists'];

    // Add the artist to the artists array
    $artists[] = $artist;

    // Update the artists array in the session
    $_SESSION['artists'] = $artists;
    }
   

    // Display the added artists in the new table
    if (!empty($_SESSION['artists'])) {
        echo '<h2>Added Artists</h2>';
        displayArtistsAsTable($_SESSION['artists']);
    }
    ?>
    <?php
    function displayArtistsAsTable($artists)
{
    echo '<table style="width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #000;
        margin: 0 auto;
        margin-bottom: 20px;
        max-width: 80%;
        align-items: center;">';
    echo '<tr class="trelement">';
    echo '<th class="thelement">Name php</th>';
    echo '<th class="thelement"> >Nationality php</th>';
    echo '<th class="thelement">>Birth Year php</th>';
    echo '<th class="thelement">>Artwork 1</th>';
    echo '<th class="thelement">>Artwork 2</th>';
    echo '<th class="thelement">>Artwork 3</th>';
    echo '</tr>';

    foreach ($artists as $artist) {
        echo '<tr class="trelement">';
        echo '<td class= "tdelement">' . $artist->getname() . '</td>';
        echo '<td class= "tdelement">' . $artist->getnationality() . '</td>';
        echo '<td class= "tdelement">' . $artist->getbirthyear() . '</td>';
        echo '<td class= "tdelement">' . $artist->getartwork1() . '</td>';
        echo '<td class= "tdelement">' . $artist->getartwork2() . '</td>';
        echo '<td class= "tdelement">' . $artist->getartwork3() . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}

    
    ?>


    <button type="button" id="uploadBtn" onclick=popup()
        style="margin: 1rem; border-color: transparent; color: #19b9c1; background-color: #f2f2f2; border-radius: 0.5rem;">Upload
        Artist</button>
    <div class="modal" id="uploadArtist"
        style="position: fixed; top:50%; left: 50%; transform: translate(-50%, -50%); border: none; border-radius: 3rem; z-index:999; width: 400px; max-width: 80%; max-height: 80%; background-color: #24646ae6;">
        <div class="head" style="align-content: space-between; margin-top: 1rem;">
            <h5
                style="color:white; float: left; margin: 0.5rem; font-size: 2.5rem; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight: bold;">
                upload artist</h5>
            <button class="btn btn-close close" style="margin: 0.5rem; width: 3rem; height: 3rem; float: right;">
                <span aria-hidden="true">&times;</span>
            </button>
            <br>
        </div>
        <br>
        <form action="" name="uploadform" id="uploadform" style="text-align: center;" method="POST">
            <br>
            <div style="margin-bottom: 10px;">
                <label for="name" style="color: white; display: inline-block; text-align: left; width: 150px;">Artist
                    name:</label>
                <input type="text" required name="name" id="artistName" style="display: inline-block;">
            </div>

            <div style="margin-bottom: 10px;">
                <label for="nationality"
                    style="color: white; display: inline-block; text-align: left; width: 150px;">Artist
                    Nationality:</label>
                <input type="text" required name="nationality" id="artistNationality" style="display: inline-block;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="birthYear" style="color: white; display: inline-block; text-align: left; width: 150px;"
                    min="1500">Artist Birth
                    Year:</label>
                <input type="number" required name="birthYear" id="artistBY" style="display: inline-block;">
            </div>
            <p style="font-weight: bold; color: gainsboro;">optional:</p>
            <div style="margin-top: 5px;">
                <label for="artwork1"
                    style="color: white; display: inline; margin-bottom: 10px; text-align: left;">Artwork
                    1:</label>
                <input type="text" name="artwork1" id="artwork1" style="display: inline; margin: 0 auto;">
            </div>

            <div style="margin-top: 5px;">
                <label for="artwork2"
                    style="color: white; display: inline; margin-bottom: 10px; text-align: left;">Artwork
                    2:</label>
                <input type="text" name="artwork2" id="artwork2" style="display: inline; margin: 0 auto;">
            </div>
            <div style="margin-top: 5px;">
                <label for="artwork2"
                    style="color: white; display: inline; margin-bottom: 10px; text-align: left;">Artwork
                    1:</label>
                <input type="text" name="artwork3" id="artwork3" style="display: inline; margin: 0 auto;">
            </div>

            <br>
            <br>
            <input type="submit" name='submit' id='uploadbtn' value="Upload"
                style="border-radius: 1rem; border:none; color:rgb(0, 0, 0); background-color: gainsboro; width: 30%; margin-top: 10px;">
        </form>

    </div>
    

    <script>

        document.querySelector(".navbar-toggler").addEventListener("click", function () {

            document.querySelector(".navbar-collapse").classList.toggle("collapse");

        });
        //create an object of an artist with some attributes
        function artist(name, nationality, birthYear, art = []) {
            this.name = name,
                this.nationality = nationality,
                this.birthYear = birthYear,
                this.art = art;


        }
        //create a list of artists and initialize it
        var artists = [
            new artist("Leonardo da Vinci", "Italian", "1452", ["Mona Lisa", "The Last Supper", "Vitruvian Man"]),
            new artist("Vincent van Gogh", "Dutch", "1853", ["Starry Night", "The Potato Eaters", "Sunflowers"]),
            new artist("Pablo Picasso", "Spanish", "1881", ["Les Demoiselles d'Avignon", "Guernica", "The Weeping Woman"])
        ];
        //this is for the uploading form
        function popup() {
            var modal = document.getElementById('uploadArtist');
            modal.style.display = 'block';
        }
        //this is to close uploading form, note that submit also closes form
        function closeModal() {
            var modal = document.getElementById('uploadArtist');
            modal.style.display = 'none';
        }
        document.querySelector('.close').addEventListener('click', closeModal);
        addArtistForm = document.getElementById('uploadform');
        addArtistForm.addEventListener('submit', function (event) {
            var modal = document.getElementById('uploadArtist');
            modal.style.display = 'none';
        });
        //if the uploading form was submitted, call function
        /*
        addArtistForm = document.getElementById('uploadform');
        addArtistForm.addEventListener('submit', function (event) {
            event.preventDefault();
            var modal = document.getElementById('uploadArtist');
            modal.style.display = 'none';
            //add artist and display so the table is updated
            addArtist();
            displayArtistTable();
        });
        //this function is to add artist with attributes retrieved from form to the artists list
        function addArtist() {
            event.preventDefault();
            //get the attributes values
            let name = document.getElementById("artistName").value;
            let nat = document.getElementById("artistNationality").value;
            let BY = document.getElementById("artistBY").value;
            let artwork1 = document.getElementById("artwork1").value;
            let artwork2 = document.getElementById("artwork2").value;
            let artwork3 = document.getElementById("artwork3").value;
            let arts = [artwork1, artwork2, artwork3]
            //create new artist instance
            let anonyArtist = new artist(name, nat, BY, arts);
            //add it to the list
            artists.push(anonyArtist)

        }
        // Get table elements from the DOM
        var artistTable = document.getElementById("artistTable");
        var artStyleTable = document.getElementById("artStyleTable");

        // Function to display artist information in the artist table
        function displayArtistTable() {
            console.log("called")
            console.log(artists)
            var artistTable = document.getElementById('artists')
            artistTable.innerHTML = "";

            // Add header row
            var headerRow = artistTable.insertRow();
            headerRow.className = "trelement";
            var header1 = headerRow.insertCell();
            header1.className = "thelement";
            header1.textContent = "Artist";
            var header2 = headerRow.insertCell();
            header2.className = "thelement";
            header2.textContent = "Nationality";
            var header3 = headerRow.insertCell();
            header3.className = "thelement";
            header3.textContent = "Birth Year";
            var header4 = headerRow.insertCell();
            header4.className = "thelement";
            header4.setAttribute("colspan", "3");
            header4.textContent = "Artworks";
            //add a row for each artist
            for (var i = 0; i < artists.length; i++) {
                var artist = artists[i];
                var row = artistTable.insertRow();
                row.className = "trelement";

                var stuff = Object.values(artist)
                for (var j = 0; j < 3; j++) {
                    var cell = row.insertCell();
                    cell.className = "tdelement";
                    cell.textContent = stuff[j];
                }
                var arts = artist.art;
                for (art of arts) {
                    var cell = row.insertCell();
                    cell.className = "tdelement";
                    cell.textContent = art;
                }
            }
        }*/
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