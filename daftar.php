<?php
session_start();
include "koneksi.php";

if(isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $select = "SELECT * FROM user WHERE nama='$nama' && password='$password'";
    $result = mysqli_query($koneksi, $select);
    if(isset($error)) {
        foreach($error as $error){
            echo '$error';
        }
    }
    if(mysqli_num_rows($result) > 0) {
        $error[] = 'User Tidak ada';
    }else{
        $insert = "INSERT INTO user (nama, username, password, role) VALUES ('$nama', '$username', '$password', '$role')";
        mysqli_query($koneksi, $insert);
        header('location:login.php');
    }

    //$query = mysqli_query($koneksi, "INSERT INTO user (nama, username, password, role) VALUES ('$nama'.'$username','$password','$role')");
    //mysqli_query($koneksi, $)
    //if($query) {
    //    echo "<script>alert('Selamat, pendaftaran anda berhasil. Silahkan login.')
    //    location.href='login.php';</script>";
    //}else{
    //    "<script>alert('Pendaftaran gagal, Silahkan coba kembali.')</script>";
    //}
    
}

?>
<!DOCTYPE html>
<head>
    <title>Daftar User</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><select name="role">
                            <option value="Pembeli">Pembeli</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button name="daftar" type="submit">Daftar</button>
                    <a href="login_user.php">Login</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>