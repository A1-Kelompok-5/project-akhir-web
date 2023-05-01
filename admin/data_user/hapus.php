<?php 

require "koneksi.php";

$id_user = $_GET["id_user"];

if($id_user){

    $query = "DELETE FROM user WHERE id_user=$id_user";
    mysqli_query($koneksi, $query);

    echo "<script>
        alert('Berhasil menghapus data');    
        document.location.href = 'user.php';
    </script>";
}

?>