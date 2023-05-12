<?php 

require "koneksi.php";

$id_riwayat = $_GET["id_riwayat"];

if($id_riwayat){

    $query = "DELETE FROM riwayat_transaksi WHERE id_riwayat=$id_riwayat";
    mysqli_query($koneksi, $query);

    echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Berhasil Menghapus Data Riwayat Transaksi',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = 'riwayat_transaksi.php';
            });
            </script></body>";
}

?>