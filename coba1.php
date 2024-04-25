<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor - KitaFun</title>
    
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--====== Bootstrap js ======-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--====== FONT ======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@600&family=Comfortaa:wght@600&family=Lato:wght@700&family=Open+Sans:ital,wght@0,700;1,600&family=Rammetto+One&family=Rokkitt:wght@400;500;600&family=Sriracha&display=swap" rel="stylesheet">

    <style>
       .nav-item a{
            text-decoration: none;
        }
        body {
            /* background-image: url('assets/img/mahasiswa.png'); */
            height: 100%;
            width: 100%;
        }
        .sidebar {
            height: 100%;
            width: 300px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            ; /* Set the background color of the sidebar */
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 20px; /* Add top padding */
            background-color:rgb(96, 125, 96);
        }
        .content {
            margin-left: 300px; /* Same as the width of the sidebar */
            /* Add some padding inside the content */
            
        }
        a{
            
        }
    </style>
    
</head>
<body class="">
    <div class="" >
        <div class="sidebar container">
            <div class="mb-3"><center>
                <img src="images/logo.jpg" width="80px" alt="Logo">
            </center></div>
            <div>
                <a href="home.php">Home</a>
            </div>
            <div>
                <a href="artikel.php">Artikel</a>
            </div>
            <div>
                <a href="event.php">Event</a>
            </div>
            <div>
                <a href="galeri.php">Galery Foto</a>
            </div>
            <div>
                <a href="klien.php">Klien Kami</a>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">Sign Up</a>
                    <a class="dropdown-item" href="#">Sign In</a>
                </div>
            </div>

        </div>
        <div class="content">
            <div style="background-color:rgb(96, 125, 96);" class="container-fluid pt-4 pb-4">
                <h1>KitaFun Motor Club</h1>
            </div>
                <!-- <div class="row p-4">
                <div class="col-md-4">
                </div>
                <div class="col-md-8 d-flex align-items-center" width="100%" style="background-color:rgb(96, 125, 96);">
                    <h1>KitaFun Motor Club</h1>
                </div> -->
            <!-- </div> -->
            <div class="row p-4">
                <div class="col-lg-3">
                    <a href="profile.php">Profile</a>
                </div>
                <div class="col-lg-3">
                    <a href="visimisi.php">Visi dan Misi</a>
                </div>
                <div class="col-lg-2">
                    <a href="produk.php">Produk kami</a>
                </div>
                <div class="col-lg-2">
                    <a href="kontak.php">Kontak kami</a>
                </div>
                <div class="col-lg-2">
                    <a href="about.php">About Us</a>
                </div>
                </div>
            </div>
    </div>
    
</body>
</html>