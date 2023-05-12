<?php
session_start();
session_destroy();
echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Berhasil Logout',
        showConfirmButton: false,
        timer: 1500
        }).then(() => {
        window.location.href = 'login.php';
        });
        </script></body>";
?>