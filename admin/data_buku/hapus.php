<?php 

require "koneksi.php";

$id_buku = $_GET["id_buku"];

if($id_buku){

    $query = "DELETE FROM buku WHERE id_buku=$id_buku";
    mysqli_query($koneksi, $query);

    $query1 = "DELETE FROM transaksi WHERE id_buku=$id_buku";
    mysqli_query($koneksi, $query1);

    $query2 = "DELETE FROM keranjang WHERE id_buku=$id_buku";
    mysqli_query($koneksi, $query2);

    echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Berhasil Menghapus Buku',
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = 'buku.php';
        });
        </script></body>";
    }

?>