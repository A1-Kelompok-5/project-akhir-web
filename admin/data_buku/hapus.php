<?php 

require "koneksi.php";

$id_buku = $_GET["id_buku"];

if($id_buku){

    $query = "DELETE FROM buku WHERE id_buku=$id_buku";
    mysqli_query($koneksi, $query);

    echo "<script>
        alert('Berhasil menghapus data');    
        document.location.href = 'buku.php';
    </script>";
}

?>