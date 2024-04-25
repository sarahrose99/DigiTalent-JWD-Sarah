<?php
ob_start(); // Menangguhkan output
require_once('functions.php');
if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = mysqli_query($conn, "SELECT * FROM users where username = '$username'");

    // cek username
    if (mysqli_num_rows($user) === 1) {
        // cek password
        $row_user = mysqli_fetch_assoc($user);
        if ($password == $row_user["password"]) {
            // Login berhasil, arahkan ke halaman beranda
            echo '<script>alert("Login berhasil. Selamat datang di halaman beranda.");window.location.href="../proyek-sarah/index.php?p=home";</script>';
            // header("Location: ../index.php");
            exit;
        } else {
            // Password salah, tampilkan pesan popup
            echo '<script>alert("Password yang Anda masukkan salah. Silakan coba lagi.");</script>';
        }
    } else {
        // Username tidak ditemukan, tampilkan pesan popup
        echo '<script>alert("Username tidak ditemukan. Silakan coba lagi.");</script>';
    }
}
ob_end_flush(); // Akhiri penangguhan output
?>

    <div class="login" style="background-color:#2C3639;">
        <div class="container card w-50 p-5">
            <div class=" ">
                <div class="row">
                    <!-- <div class="col-4"> -->
                        <img src="images/logos.png" style="width: 100px; height: 100px;" class="ms-5" alt="logo">
                    <!-- </div>
                    <div class="col me-5"> -->
                        <h5 class="text-dark mt-2 text-center"
                            style="font-family: fantasy; letter-spacing: 8px; font-size: 30px;"> <b> LOGIN </b> </h5>
                    <!-- </div> -->
                </div>
            </div>
            <form action="" method="post">
                <div class="row mt-3">
                    <div class="container">
                        <div class="form-floating form-group">
                            <p class="text-dark"
                                style="font-family: Courier New; font-size: 18px; letter-spacing: 8px;"> <b> Username
                                </b> </p>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                                autofocus required>
                        </div>
                        <div class="form-floating form-group mt-3">
                            <p class="text-dark"
                                style="font-family: Courier New; font-size: 18px; letter-spacing: 8px;"> <b> Password
                                </b> </p>
                            <input type="password" name="password" class="form-control " placeholder="Password">

                        </div>
                        <?php if (isset($error)): ?>
                            <p style="color:red; font-style: italic;">username salah </p>
                        <?php endif;
                        if (isset($error1)): ?>
                            <p style="color:red; font-style: italic;">password salah </p>
                        <?php endif; ?>
                        <div class="form-group mt-4" align="center">
                            <input type="submit" name="login" value="Masuk"
                                class=" col-md-4 btn btn-outline-success mt-4">
                        </div>
                    </div><br>
                    <a align="center" href="" style="color:#989393;"
                        class="mt-3 tampilModalUbah text-decoration-none float-end" data-bs-toggle="modal"
                        data-bs-target="#formModal">Belum memiliki akun?</a>
                </div>

            </form>
        </div>
    </div>
