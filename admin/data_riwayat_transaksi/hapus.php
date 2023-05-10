<?php 

require "koneksi.php";

$id_riwayat = $_GET["id_riwayat"];

if($id_riwayat){

    $query = "DELETE FROM riwayat_transaksi WHERE id_riwayat=$id_riwayat";
    mysqli_query($koneksi, $query);

    echo "<script>
        alert('Berhasil menghapus data');    
        document.location.href = 'riwayat_transaksi.php';
    </script>";
}

?>