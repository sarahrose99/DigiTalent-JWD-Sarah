<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor - KitaFun</title>

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
    <!--====== FONT ======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bitter:wght@600&family=Comfortaa:wght@600&family=Lato:wght@700&family=Open+Sans:ital,wght@0,700;1,600&family=Rammetto+One&family=Rokkitt:wght@400;500;600&family=Sriracha&display=swap"
        rel="stylesheet">


</head>

<body>
    <div>
    <div class="container-fluid">
		<div id="header">
            <div class="row">
                <div class="col-sm-4"><image id="logo-motor" src="images/logos.png"></div>
                <div class="col-sm-8 d-flex align-items-center justify-content-center"><h1 style="color:white"> KitaFun Motor Club </h1></div>
            </div>
			<!-- <div >
				<image id="logo-motor" src="images/logos.png"> 
			</div>
			<div id="judul">
					<h1 style="color:white"> KitaFun Motor Club </h1>
				</div>
			</div> -->
		</div>
		<div id="sidebar">
			<ul>
                <li><a href="index.php?p=home">Home</a></li>
				<li><a href="index.php?p=artikel">Artikel</a></li>
				<li><a href="index.php?p=event">Event</a></li>
				<li><a href="index.php?p=galery">Galery Foto</a></li>
                <li><a href="index.php?p=klien">Klien Kami</a></li>
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="" role="button" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">Sign Up</a>
                            <a class="dropdown-item" href="#">Sign In</a>
                        </div>
                    </div>    
                </li>
			</ul>
		</div>
        <div class="content-container">
            <div class="header2">
                <div class="row">
                    <div class="col">
                        <a class="hov" href="index.php?p=profile">Profile</a>
                    </div>
                    <div class="col">
                        <a class="hov" href="index.php?p=visi-misi">Visi dan Misi</a>
                    </div>
                    <div class="col">
                        <a class="hov" href="index.php?p=produk">Produk kami</a>
                    </div>
                    <div class="col">
                        <a class="hov" href="index.php?p=kontak">Kontak kami</a>                        </div>
                    <div class="col">
                        <a class="hov" href="index.php?p=about">About Us</a>
                    </div>
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
             </div>
        </div>
		
    </div>
		<!-- <div id="bawah"></div> -->
	</div>
</body>

</html>