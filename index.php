<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor - KitaFun</title>

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
    <!--====== FONT ======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bitter:wght@600&family=Comfortaa:wght@600&family=Lato:wght@700&family=Open+Sans:ital,wght@0,700;1,600&family=Rammetto+One&family=Rokkitt:wght@400;500;600&family=Sriracha&display=swap"
        rel="stylesheet">
    <style>
        *{margin:0px; padding:0px}
        body {
                height: 100%;
        }
        .header{
            background-color: #2C3639;
        }
        #logo-motor{
            width:104px;
            display: block;
            margin: 0 auto;
        }
        .sidebar{
            float: left;
    width: 15%;
    height: 200vh;
    /* Mengatur tinggi sidebar agar sesuai dengan tinggi kontennya */
    /* height: calc(100vh - 100px); */
    overflow-y:auto;/*Menambahkan bilah gulir vertikal jika konten melebihi ketinggian sidebar */
    background-color: #617277;
    position: relative;
}
        
        .sidebar a{
            font-size: 20px;
        }
        .sidebar ul{
            list-style:none;
        }
        .sidebar a:link, .sidebar a:visited{
            color:black;
            display:block;
            padding:10px;
            text-decoration:none;
        }
        .sidebar a{
            margin-left: 10px;
        }

        .sidebar li:hover{
            background-color:#EEEEEE;
            color:black;
        }
        .nav-head {
            padding:5px;
            background-color: white;
            border-right: 1px solid #1A4D2E;
            text-align: center;
            font-size: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            
        }

        .hov{
            color: black;
            text-decoration: none;
        }

        .nav-head:hover {
            background-color: #718374;
        }

        .nav-head:hover .hov {
            color: #1A4D2E;
        }

        .hov:hover {
            color: #1A4D2E;
            text-decoration: none;
        }
        .text-overlay {
      position: absolute;
      top: 50vh;
      left: 50vw;
      transform: translate(-50%, -50%);
      z-index: 1;
      color: white;
      background-color: rgb(176, 176, 176, 50%);
      
    }
    .bg{
        width: 80%;
        height: 500px;
        object-fit: cover;
    }

    /* Container holding the image and the text */
.cont {
  position: relative;
  text-align: center;
  color: white;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgb(91, 91, 91, 50%);
  padding: 120px;
  padding-left: 450px;
  padding-right: 450px;
}

.container2 {
            /* max-width: 80px; */
            /* margin: auto; */
            padding: 50px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product {
            margin-bottom: 20px;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .contact-info {
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-submit {
            background-color: #1A4D2E;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #144028;
        }
        .polaroid {
margin: 30px;
width: 270px;
height: 350px;
background-color: white;
padding: 1rem;
box-shadow: 0 0.2rem 1.2rem rgba(0, 0, 0, 0.2);
}
.polaroid__content-image {
height: 270px;
width: 100%;
overflow: hidden;
}
.polaroid__content-image > img {
height: 100%;
width: 100%;
display: block;
object-fit: cover;
}
.polaroid__content-caption {
display: flex;
justify-content: center;
align-items: center;
font-size: 25px;
}
header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        article {
            /* padding: 10px; */
            background-color: #fff;
            /* margin: 20px auto; */
            max-width: 1000px;
        }
         .client-list {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            list-style: none;
        }
        .client-item {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .client-item img {
            max-width: 100px;
            height: auto;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div>
        <div class="container-fluid header">
            <div class="row">
                <div class="col-sm-4"><image id="logo-motor" src="images/logos.png"></div>
                <div class="col-sm-8 d-flex align-items-center" ><h1 style="color:white">KitaFun Motor Club</h1></div>
            </div>
        </div>
        <div class="container-fluid sidebar pt-4">
            <nav class="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="index.php?p=home">Home</a></li>
                    <li class="nav-item"><a href="index.php?p=artikel">Artikel</a></li>
                    <li class="nav-item"><a href="index.php?p=event">Event</a></li>
                    <li class="nav-item"><a href="index.php?p=galery">Galery Foto</a></li>
                    <li class="nav-item"><a href="index.php?p=klien">Klien Kami</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" style="width: 100px;" href="index.php?p=sign-in">Sign In</a>
                        <a class="dropdown-item" style="width: 100px;" href="index.php?p=sign-up">Sign Up</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <div class="row" style="border-bottom: 1px solid #1A4D2E">
                <div class="col nav-head">
                    <a class="hov" href="index.php?p=profile">Profile</a>
                </div>
                <div class="col nav-head">
                    <a class="hov" href="index.php?p=visi-misi">Visi dan Misi</a>
                </div>
                <div class="col nav-head">
                    <a class="hov" href="index.php?p=produk">Produk kami</a>
                </div>
                <div class="col nav-head">
                    <a class="hov" href="index.php?p=kontak">Kontak kami</a>                        
                </div>
                <div class="col nav-head">
                    <a class="hov" href="index.php?p=about">About Us</a>
                </div>
            </div>
            
                <?php
                $pages_dir = 'halaman';
                if (!empty($_GET['p'])) {
                    $pages = scandir($pages_dir, 0);
                    unset($pages[0], $pages[1]);
                    $p = $_GET['p'];
                    if (in_array($p . '.php', $pages)) {
                        include ($pages_dir . '/' . $p . '.php');
                    } else {
                        echo 'Halaman Tidak Ditemukan';
                    }
                } else {
                    include ($pages_dir . '/home.php');
                }
                ?>
            <!-- </div> -->
        </div>
    </div>
    
</body>

    <!--====== Bootstrap JS ======-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>