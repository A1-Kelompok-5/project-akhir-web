<?php
session_start();
if(!isset($_SESSION['role'])) {
    header('location:../login.php');
}

require "koneksi.php";

$id_transaksi = $_GET["id_transaksi"];

$query = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
$result = mysqli_query($koneksi, $query);

if($id_transaksi){

    $tanggal = date("Y/m/d");
    $status = "BERHASIL";

    $query = "INSERT INTO riwayat_transaksi VALUES ('','$id_transaksi','$tanggal','$status')";
    mysqli_query($koneksi, $query);

    echo "<script>
        alert('Berhasil');    
        document.location.href = 'keranjang.php';
    </script>";
}

?>