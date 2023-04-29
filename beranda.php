<?php
session_start();
if(!isset($_SESSION['role'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<head>
    <title>Beranda</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div class="text-box">
        <h1>Selamat Datang <?php echo $_SESSION['role']; ?></h1> 
        </div>
    </div>
</body>
</html>
