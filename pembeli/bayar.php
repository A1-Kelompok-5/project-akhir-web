<?php
session_start();
if(!isset($_SESSION['role'])) {
    header('location:../login.php');
}

require "koneksi.php";

$id_user = $_SESSION["id_user"];
$id = $_GET["id"];

$query = "SELECT * FROM keranjang WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if($id){

    $query2 = "DELETE FROM keranjang WHERE id=$id";
    mysqli_query($koneksi, $query2);

    $tanggal = date("Y/m/d");
    $status = "BERHASIL";

    $query1 = "INSERT INTO riwayat_transaksi VALUES ('','$id','$tanggal','$status')";
    mysqli_query($koneksi, $query1);

    echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Berhasil Membayar Pesanan.',
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = 'keranjang.php';
        });
    </script></body>";
    exit;
}

?>

