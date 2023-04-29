<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($query);
    $cekdata = mysqli_num_rows($query);

if($cekdata > 0) {
if($data['role']=="PEMILIK") {
    $_SESSION['role']=$data['role'];
    $_SESSION['username']=$data['username'];
    header('location:beranda.php');
}elseif($data['role']=="ADMIN") {
    $_SESSION['role']=$data['role'];
    $_SESSION['username']=$data['username'];
    header('location:beranda.php');
}elseif($data['role']=="PEMBELI") {
    $_SESSION['role']=$data['role'];
    $_SESSION['username']=$data['username'];
    header('location:beranda.php');
}
}else{
    echo "login gagal";
}
}

?>
<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button name="login" type="submit">Login</button>
                    <a href="daftar.php">Daftar</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>