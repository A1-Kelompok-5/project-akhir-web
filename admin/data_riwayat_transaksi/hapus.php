<?php 

require "koneksi.php";

$id = $_GET["id"];

if($id){

    $query = "DELETE FROM riwayat_transaksi WHERE id=$id";
    mysqli_query($koneksi, $query);

    echo "<script>
        alert('Berhasil menghapus data');    
        document.location.href = 'riwayat_transaksi.php';
    </script>";
}

?>