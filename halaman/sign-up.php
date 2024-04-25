<?php
ob_start(); // Menangguhkan output
require_once ('functions.php');

if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Cek apakah password dan konfirmasi password sesuai
    if ($password !== $confirm_password) {
        // Jika password dan konfirmasi password tidak sesuai, tampilkan pesan pop-up
        echo '<script>alert("Konfirmasi password tidak sesuai. Silakan coba lagi.");</script>';
    } else {
        // Cek apakah username sudah digunakan
        $check_username = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        if (mysqli_num_rows($check_username) > 0) {
            // Username sudah digunakan, tampilkan pesan pop-up
            echo '<script>alert("Username sudah digunakan. Silakan gunakan username lain.");</script>';
        } else {
            // Username tersedia, tambahkan user baru ke database
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            if (mysqli_query($conn, $query)) {
                // Registrasi berhasil, arahkan ke halaman login
                echo '<script>alert("Registrasi berhasil. Silakan login."); window.location.href="../proyek-sarah/index.php?p=sign-in";</script>';
                exit;
            } else {
                // Terjadi kesalahan, tampilkan pesan pop-up
                echo '<script>alert("Registrasi gagal. Silakan coba lagi.");</script>';
            }
        }
    }
}
ob_end_flush(); // Akhiri penangguhan output
?>

<!-- <div class="login" style="background-color:#2C3639;"> -->
<div class="container card w-50 p-5">
    <div class=" ">
        <div class="row">
            <img src="images/logos.png" style="width: 100px; height: 100px;" class="ms-5" alt="logo">
            <h5 class="text-dark mt-2 text-center" style="font-family: fantasy; letter-spacing: 8px; font-size: 30px;"> <b> REGISTER </b> </h5>
        </div>
    </div>
    <form action="" method="post">
        <div class="row mt-3">
            <div class="container">
                <div class="form-floating form-group">
                    <p class="text-dark" style="font-family: Courier New; font-size: 18px; letter-spacing: 8px;"> <b> Username </b> </p>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" autofocus required>
                </div>
                <div class="form-floating form-group mt-3">
                    <p class="text-dark" style="font-family: Courier New; font-size: 18px; letter-spacing: 8px;"> <b> Password </b> </p>
                    <input type="password" name="password" class="form-control " placeholder="Password" required>
                </div>
                <div class="form-floating form-group mt-3">
                    <p class="text-dark" style="font-family: Courier New; font-size: 18px; letter-spacing: 8px;"> <b> Konfirmasi Password </b> </p>
                    <input type="password" name="confirm_password" class="form-control " placeholder="Konfirmasi Password" required>
                </div>
                <div class="form-group mt-4" align="center">
                    <input type="submit" name="register" value="Daftar" class=" col-md-4 btn btn-outline-success mt-4">
                </div>
            </div><br>
            <a align="center" href="" style="color:#989393;" class="mt-3 tampilModalUbah text-decoration-none float-end" data-bs-toggle="modal" data-bs-target="#formModal">Sudah memiliki akun?</a>
        </div>
    </form>
</div>
<!-- </div> -->
