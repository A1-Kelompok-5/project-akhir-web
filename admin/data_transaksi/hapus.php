<?php 

require "koneksi.php";

$id_transaksi = $_GET["id_transaksi"];

if($id_transaksi){

    $query = "DELETE FROM transaksi WHERE id_transaksi=$id_transaksi";
    mysqli_query($koneksi, $query);

    echo "<script>
        alert('Berhasil menghapus data');    
        document.location.href = 'transaksi.php';
    </script>";
}

?>