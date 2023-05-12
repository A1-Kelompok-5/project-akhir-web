<?php 

require "koneksi.php";

$id = $_GET["id"];

if($id){

    $query = "DELETE FROM transaksi WHERE id=$id";
    mysqli_query($koneksi, $query);

    echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Berhasil Menghapus Data Transaksi',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = 'transaksi.php';
            });
            </script></body>";
}

?>