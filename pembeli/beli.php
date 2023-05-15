<?php
session_start();
if(!isset($_SESSION['role'])) {
    header('location:../login.php');
}

require "koneksi.php";

$id_buku = $_GET["id_buku"];

$query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
$result = mysqli_query($koneksi, $query);

if (!isset($_GET["id_buku"])){
    header("Location: buku.php");
    exit;
}else if(mysqli_num_rows($result) == 1){

}else{
    header("Location: buku.php");
    exit;
}    

if(isset($_GET["keranjang"])){

    $id_user = $_SESSION["id_user"];
    $id_buku = $_GET["id_buku"];
    $jumlah = $_GET["jumlah"];
    $total = $_GET["total"];

    $query1 = "INSERT INTO transaksi VALUES ('','$id_user','$id_buku','$jumlah','$total')";
    mysqli_query($koneksi, $query1);

    $query2 = "INSERT INTO keranjang VALUES ('','$id_user','$id_buku','$jumlah','$total')";
    mysqli_query($koneksi, $query2);

    //$stock = $_POST["stock"];
    //$query = "UPDATE buku SET stock = '$stock' WHERE id_buku='$id_buku'";
    //mysqli_query($koneksi, $query);
    //return mysqli_affected_rows($koneksi);

    // echo "<script>
    //     alert('Buku berhasil dimasukkan ke keranjang');    
    //     document.location.href = 'keranjang.php';
    // </script>";

    echo "<body><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script>
            Swal.fire({
              position: 'top-center',
              icon: 'success',
              title: 'Buku Berhasil Di Masukkan Ke Keranjang.',
              showConfirmButton: false,
              timer: 1500
          }).then(() => {
              window.location.href = 'keranjang.php';
          });
        </script></body>";
}
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Pembeli | Beli Buku</title>

    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    
    <script src="../assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
            .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            }

            @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
            }

            .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
            }

            .bi {
            vertical-align: -.125em;
            fill: #2c6fa5;
            }

            .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
            }

            .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            }

            .text-justify {
                text-align: justify;
            }  

            .bg-gramedia{
                color: #2c6fa5;
            }

            .text-gramedia{
                color: #2c6fa5;
            }

            .active {
                background-color: #2c6fa5 !important;
                color: #ffff !important;
            }
    </style>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
</head>
<body>

        <!-- Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </symbol>
            <symbol id="instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </symbol>
            <symbol id="twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </symbol>
            <symbol id="user" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </symbol>
        </svg>

        <!-- Header -->
        <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom border-top">
        <a href="beranda.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto fw-semibold text-gramedia text-decoration-none bg-gramedia">
            <img src="../img/logo_gramedia.png" width="30px">
            <span class="fs-4 ms-3">Gramedia</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="beranda.php" class="nav-link text-gramedia" aria-current="page">Beranda</a></li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" aria-expanded="false">Buku</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="buku.php">Beli Buku</a></li>
                <li><a class="dropdown-item" href="keranjang.php">Keranjang Buku</a></li>
            </ul>
            </li>
            <li class="nav-item"><a href="../logout.php" class="nav-link text-gramedia">Keluar</a></li>
        </ul>
        </header>
    </div>
    
    <!-- TAMPIL DATA BUKU -->
    <div class="form-signin w-100 m-auto text-center">
    <form method="post" action="">
      <h1 class="h3 mb-3 fw-normal">Beli Buku</h1>
      <?php while($row = mysqli_fetch_assoc($result)) { ?>

      <div class="form-floating mt-5">
      <input type="hidden" class="form-control" name="id_buku" value="<?php echo $row['id_buku'] ?>" readonly>
        <label for="id_buku">ID Buku</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" name="kategori" value="<?php echo $row['kategori'] ?>" readonly>
        <label for="kategori">Kategori</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" name="judul" value="<?php echo $row['judul'] ?>" readonly>
        <label for="judul">Judul</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" name="penulis" value="<?php echo $row['penulis'] ?>" readonly>
        <label for="penulis">Penulis</label>
      </div>

      <div class="form-floating">
        <input type="number" class="form-control" name="harga" id="harga" value="<?php echo $row['harga'] ?>" readonly>
        <label for="harga">Harga</label>
      </div>

      <?php } ?>
    </form>
    </div>


    <!-- BELI BUKU -->
    <div class="form-signin w-100 m-auto text-center">
    <form method="get" action="">
    <? php echo var_dump($_SESSION) ?>

      <div class="form-floating">
        <input type="hidden" class="form-control" name="id_buku" value="<?php echo $_GET['id_buku'] ?>" readonly>
        <label for="id_buku">ID Buku</label>
      </div>

      <div class="form-floating">
        <input type="number" class="form-control" name="jumlah" id="jumlah" step="any" min="0" value="0">
        <label for="jumlah">Jumlah</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" name="total" id="total" value="0" readonly>
        <label for="total">Total</label>
      </div>
  
      <button class="mt-5 w-100 btn btn-lg active" type="submit" name="keranjang">Masukkan Keranjang</button>


      <?php  ?>
    </form>
    </div>

    <!-- Footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="../beranda.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src="../img/logo_gramedia.png" width="20px">
            </a>
            <span class="mb-3 mb-md-0 text-muted">&copy; 2023 Gramedia</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
        </footer>
    </div>
    
    <!-- Script JS -->
    <script type="text/javascript">
    $("#harga").keyup(function(){   
      var a = parseFloat($("#harga").val());
      var b = parseFloat($("#jumlah").val());
      var c = a*b;
      $("#total").val(c);
    });
    
    $("#jumlah").keyup(function(){
      var a = parseFloat($("#harga").val());
      var b = parseFloat($("#jumlah").val());
      var c = a*b;
      $("#total").val(c);
    });
    </script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
