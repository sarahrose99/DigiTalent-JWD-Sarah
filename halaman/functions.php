<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_club");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tanggalIndo($waktu)
{
    $strt = strtotime($waktu);
    $hariarr = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
    $bulanarr = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

    $jam = date('H', $strt);
    $menit = date('i', $strt);
    $hari = $hariarr[date('w', $strt)];
    $bulan = $bulanarr[date('n', $strt) - 1];
    $tanggal = date('j', $strt);
    $tahun = date('Y', $strt);

    return "$hari, $tanggal $bulan $tahun / $jam:$menit";
}


?>