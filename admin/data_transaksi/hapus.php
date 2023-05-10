<?php 

require "koneksi.php";

$id = $_GET["id"];

if($id){

    $query = "DELETE FROM transaksi WHERE id=$id";
    mysqli_query($koneksi, $query);

    echo "<script>
        alert('Berhasil menghapus data');    
        document.location.href = 'transaksi.php';
    </script>";
}

?>