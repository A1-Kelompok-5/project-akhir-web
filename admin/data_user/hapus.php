<?php 

require "koneksi.php";

$id_user = $_GET["id_user"];

if($id_user){

    $query = "DELETE FROM user WHERE id_user=$id_user";
    mysqli_query($koneksi, $query);

    echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Berhasil Menghapus Data User',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = 'user.php';
            });
            </script></body>";
}

?>