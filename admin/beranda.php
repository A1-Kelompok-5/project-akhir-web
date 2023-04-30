<?php
session_start();
if(!isset($_SESSION['role'])) {
    header('location:../login.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Admin | Beranda</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
            <li class="nav-item"><a href="beranda.php" class="nav-link active" aria-current="page">Beranda</a></li>
            <li class="nav-item"><a href="buku.php" class="nav-link text-gramedia">Buku</a></li>
            <li class="nav-item"><a href="../logout.php" class="nav-link text-gramedia">Keluar</a></li>
        </ul>
        </header>
    </div>
    
    <!-- Bagian 1 -->
    <div class="container text-center">
        <img src="../img/bg1.png"></img>
        <div class="row py-5">
            <div class="col-lg-10 mx-auto"><br><br><br>
                <h1 class="fw-semibold">Selamat Datang,  <?php echo $_SESSION['role']; ?>!</h1><br>
                <p class="lead text-muted">
                Gramedia.com adalah toko buku online terbesar dan terlengkap di Indonesia yang menyediakan aneka buku berkualitas, alat tulis hingga perlengkapan kantor lainnya.
                Sejak tahun 2009 Gramedia membangun toko online. Toko ini merupakan bagian dari Toko Gramedia Matraman.
                <br><br>Pada tahun 2016 hingga saat ini, Gramedia.com dikelola oleh PT. Gramedia Asri Media. Kini Gramedia.com telah terintegrasi dengan lebih dari 100 cabang toko Gramedia se-Indonesia. Para pelanggan dapat berbelanja dan melakukan pembelian dari Gramedia terdekat di kota Anda. Dan pengiriman pun dapat dilakukan dari seluruh toko Gramedia se-Indonesia.
                </p>
            </div>
        </div>
    </div>>

  <!-- Bagian 2 -->
  <div class="album bg-light">
    <div class="container"></br>

      <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="../img/Melangkah.jpg" class="card-img featurette-image" alt="Responsive image" width="100" height="500" >
                <div class="card-body text-gramedia">
                    <p class="card-text text-center">Js. Khairen</p>
                    <h5 class="card-title text-center fw-semibold">Melangkah</h5>
                    <p class="card-text text-center">Rp. 93.000</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></br>
                            <svg class="bi" width="50" height="50"><use xlink:href="#user"/></svg>
                        </div>
                        <div class="col-md-11"></br>
                        <h7 class="card-title fw-semibold fw-top">Js. Khairen</h7>
                            <p class="card-text"><small class="text-muted">Rekomendasi buku untukmu!</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"></br>
                            <p class="card-text"><b>Deskripsi</b></p>
                            <p class="card-text text-justify">Novel karya J. S Khairen yang berjudul Melangkah bertemakan tentang petualangan di Indonesia. Tidak hanya itu, cerita dalam novel ini juga mengutamakan kisah pahlawan. Berbeda dari karya-karya yang sebelumnya, di novel ini Khairen memberi sedikit imajinasi yang ia tanamkan. Terdapat 36 episode dan 5 babak.</p>
                            
                            <p class="card-text"><b>Sinopsis</b></p>
                            <p class="card-text text-justify">Listrik padam di seluruh Jawa dan Bali secara misterius. Ancaman nyata kekuatan baru yang hendak menaklukkan Nusantara.
                                Saat yang sama, empat sahabat mendarat di Sumba, hanya untuk mendapati nasib ratusan juta manusia ada di tangan mereka! Empat mahasiswa ekonomi ini, harus bertarung melawan pasukan berkuda yang bisa melontarkan listrik! Semua dipersulit oleh seorang buronan tingkat tinggi bertopeng pahlawan yang punya rencana mengerikan.
                                Ternyata pesan arwah nenek moyang itu benar-benar terwujud. “Akan datang kegelapan yang berderap, bersama ribuan kuda raksasa di kala malam. Mereka bangun setelah sekian lama, untuk menghancurkan Nusantara. Seorang lelaki dan seorang perempuan ditakdirkan membaurkan air di lautan dan api di pegunungan. Menyatukan tanah yang menghujam, dan udara yang terhampar.”
                                Kisah tentang persahabatan, tentang jurang ego anak dan orangtua, tentang menyeimbangkan logika dan perasaan. Juga tentang melangkah menuju masa depan. Bahwa, apa pun yang menjadi luka masa lalu, biarlah mengering bersama waktu.</p>
                            
                            <a href="#" class="btn btn-secondary">Beli Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></br>

    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="../img/Laut_Bercerita.png" class="card-img featurette-image" alt="Responsive image" width="500" height="450" >
                <div class="card-body text-gramedia">
                    <p class="card-text text-center">Leila S. Chudori</p>
                    <h5 class="card-title text-center fw-semibold">Laut Bercerita</h5>
                    <p class="card-text text-center">Rp. 115.000</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></br>
                            <svg class="bi" width="50" height="50"><use xlink:href="#user"/></svg>
                        </div>
                        <div class="col-md-11"></br>
                        <h7 class="card-title fw-semibold fw-top">Leila S. Chudori</h7>
                            <p class="card-text"><small class="text-muted">Rekomendasi buku untukmu!</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"></br>
                            <p class="card-text"><b>Deskripsi</b></p>
                            <p class="card-text text-justify">Buku ini terdiri atas dua bagian. Bagian pertama mengambil sudut pandang seorang mahasiswa aktivis bernama Laut, menceritakan bagaimana Laut dan kawan-kawannya menyusun rencana, berpindah-pindah dalam pelarian, hingga tertangkap oleh pasukan rahasia. Sedangkan bagian kedua dikisahkan oleh Asmara, adik Laut. Bagian kedua mewakili perasaan keluarga korban penghilangan paksa, bagaimana pencarian mereka terhadap kerabat mereka yang tak pernah kembali.
                                Buku ini ditulis sebagai bentuk tribute bagi para aktivis yang diculik, yang kembali, dan yang tak kembali dan keluarga yang terus menerus sampai sekarang mencari-cari jawaban.
                                <br><br>Novel ini merupakan perwujudan dalam bentuk fiksi bahwa kita sebagai bangsa Indonesia tidak boleh melupakan sejarah yang telah membentuk sekaligus menjadi tumpuan bangsa Ini. Novel ini juga mengajak pembaca menguak misteri-misteri bangsa ini yang mana tidak diajarkan di sekolah. Walaupun novel ini adalah fiksi, laut bercerita menunjukkan kepada pembaca bahwa negeri ini pernah memasuki masa pemerintahan yang kelam.</p>
                            
                            <p class="card-text"><b>Sinopsis</b></p>
                            <p class="card-text text-justify">Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.</p>
                            
                            <a href="#" class="btn btn-secondary">Beli Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></br>

    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="../img/Hai_Miiko.jpeg" class="card-img featurette-image" alt="Responsive image" width="100" height="500" >
                <div class="card-body text-gramedia">
                    <p class="card-text text-center">ONO Eriko</p>
                    <h5 class="card-title text-center fw-semibold">Hai, Miiko! Volume 34</h5>
                    <p class="card-text text-center">Rp. 60.000</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></br>
                            <svg class="bi" width="50" height="50"><use xlink:href="#user"/></svg>
                        </div>
                        <div class="col-md-11"></br>
                        <h7 class="card-title fw-semibold fw-top">ONO Eriko</h7>
                            <p class="card-text"><small class="text-muted">Rekomendasi buku untukmu!</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"></br>
                            <p class="card-text"><b>Deskripsi</b></p>
                            <p class="card-text text-justify">Hai, Miiko adalah serial komik Jepang yang telah diterjemahkan ke dalam Bahasa Indonesia. Ditulis dan diilustrasikan oleh Eriko Ono, komik bergenre komedi ini memiliki hampir 33 volume hingga saat ini. Bercerita tentang Yamada Miiko, seorang anak perempuan kelas empat yang sangat bersemangat dan memiliki kepribadian ceria baik di rumah maupun di sekolah.</p>                            
                            <p class="card-text"><b>Sinopsis</b></p>
                            <p class="card-text text-justify">Di episode kali ini, Oonishi Sensei tidak lagi menjadi guru untuk Miiko dan kawan-kawan. Miiko dan kawan-kawan resmi keluar sebagai lulusan murid-murid SD untuk menjadi murid-murid SMP bersama. Mari kita rayakan bersama momen berharga Miiko yang melangkah maju sebagai murid SMP! Hari-hari Miiko dan kawan-kawan di SD Suginoki telah usai. Seluruh kenangan di SD Suginoki jelas akan menjadi memori yang indah tidak hanya bagi Miiko dan kawan-kawan, namun juga para pembaca setia Miiko. Sambil menyimpan semua kenangan indah dalam hati, mereka kini mempersiapkan diri untuk menjadi murid SMP. Miiko dan kawan-kawan harus siap untuk banyak perubahan. Gedung sekolah baru, cinta baru, persahabatan baru, juga keseruan baru telah menanti Miiko dan kawan-kawan.</p>
                            
                            <a href="#" class="btn btn-secondary">Beli Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></br>

    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="../img/Home_Sweet_Loan.jpg" class="card-img featurette-image" alt="Responsive image" width="100" height="500" >
                <div class="card-body text-gramedia">
                    <p class="card-text text-center">Almira Bastari</p>
                    <h5 class="card-title text-center fw-semibold">Home Sweet Loan</h5>
                    <p class="card-text text-center">Rp. 95.000</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></br>
                            <svg class="bi" width="50" height="50"><use xlink:href="#user"/></svg>
                        </div>
                        <div class="col-md-11"></br>
                        <h7 class="card-title fw-semibold fw-top">Almira Bastari</h7>
                            <p class="card-text"><small class="text-muted">Rekomendasi buku untukmu!</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"></br>
                            <p class="card-text"><b>Deskripsi</b></p>
                            <p class="card-text text-justify">Novel Home Sweet Loan ditulis oleh Almira Bastari, seorang penulis muda yang namanya sudah populer di Indonesia. Novel Home Sweet Loan baru saja diterbitkan oleh Gramedia Pustaka Utama pada tahun 2022.
                                Novel Home Sweet Loan mengangkat genre yang sama dengan karya Almira sebelumnya yang berjudul “Ganjil Genap”, yaitu metropop. Namun, novel Home Sweet Loan ini akan menyajikan cerita yang ditulis menjadi lebih serius.
                                Layaknya novel-novel karya Almira sebelumnya, Home Sweet Loan menggunakan latar cerita di Kota Jakarta. Namun, cerita kali ini lebih menyoroti kaum menengah dengan mengisahkan perjuangan dari sudut pandang mereka.</p>                            
                            <p class="card-text"><b>Sinopsis</b></p>
                            <p class="card-text text-justify">Empat orang yang berteman sejak SMA bekerja di perusahaan yang sama meski beda nasib. Di usia 31 tahun, mereka berburu rumah idaman yang minimal nyerempet Jakarta. Kaluna, pegawai Bagian Umum, yang gajinya tak pernah menyentuh dua digit. Gadis ini bekerja sampingan sebagai model bibir, bermimpi membeli rumah demi keluar dari situasi tiga kepala keluarga yang bertumpuk di bawah satu atap. Di tengah perjuangannya menabung, Kaluna dirongrong oleh kekasihnya untuk pesta pernikahan mewah.
                                Selain itu, ada juga masalah hutang keluarganya. Masalah-masalah ini menjadikan Kaluna merasa menjadi rakyat jelata saja tidak cukup membuat kepalanya mumet luar biasa. Tanisha, ibu satu anak yang menjalani Long Distance Marriage, mencari rumah murah dekat MRT yang juga bisa menampung mertuanya.
                                Kamamiya, yang berambisi menjadi selebgram, mencari apartemen cantik untuk diunggah ke media sosial demi memenuhi gengsinya agar bisa menikah dengan pria kaya. Danan, anak tunggal tanpa beban yang akhirnya berpikir untuk berhenti hura-hura, dan membeli aset agar bisa pensiun dengan tenang. Apakah keempat sahabat ini berhasil menemukan rumah yang mampu mereka cicil? Dan apakah Kaluna bisa membentuk keluarga yang ia impikan?</p>
    
                            <a href="#" class="btn btn-secondary">Beli Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></br>

    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="../img/The_Girl_who_Fell_Beneath_the_Sea.jpg" class="card-img featurette-image" alt="Responsive image" width="100" height="500" >
                <div class="card-body text-gramedia">
                    <p class="card-text text-center">Axie Oh</p>
                    <h5 class="card-title text-center fw-semibold">The Girl who Fell Beneath the Sea</h5>
                    <p class="card-text text-center">Rp. 115.000</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></br>
                            <svg class="bi" width="50" height="50"><use xlink:href="#user"/></svg>
                        </div>
                        <div class="col-md-11"></br>
                        <h7 class="card-title fw-semibold fw-top">Axie Oh</h7>
                            <p class="card-text"><small class="text-muted">Rekomendasi buku untukmu!</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"></br>
                            <p class="card-text"><b>Deskripsi</b></p>
                            <p class="card-text text-justify">Novel ini diangkat dari mitologi Korea. Novel ini cocok untuk penyuka film Spirited Away!</p>                            
                            <p class="card-text"><b>Sinopsis</b></p>
                            <p class="card-text text-justify">Badai mematikan telah merusak tanah kelahiran Mina selama beberapa generasi. Banjir menyapu seluruh desa, sementara perang berdarah dikobarkan untuk memperebutkan sumber daya yang tersisa. Masyarakat di desa Mina memercayai bahwa Dewa Laut mengutuk mereka dengan kematian dan keputusasaan. Dalam upaya untuk menenangkan Dewa Laut, setiap tahun seorang gadis cantik dibuang ke laut untuk menjadi pengantin Dewa Laut, dengan harapan suatu hari "pengantin sejati" akan dipilih dan mengakhiri penderitaan mereka. Shim Cheong adalah gadis tercantik di desa, sekaligus kekasih Joon. Banyak yang percaya dialah pengantin sejati Dewa Laut Tapi pada malam Cheong hendak dikorbankan, Joon mengikuti Cheong, meski tahu bahwa ikut campur akan dihadiahi hukuman mati. Untuk menyelamatkan kakaknya, Mina terjun ke air menggantikan Cheong. Kecantikan Mina memang tidak sebanding dengan para pengantin terdahulu. Tapi dia sudah tersapu ke Alam Roh. Kini Mina tak punya banyak waktu untuk menemukan Dewa Laut sebelum dirinya sendiri berubah menjadi arwah. Berbekal kemampuan mendongeng dan bantuan para arwah, Mina harus berhasil menemukan Dewa Laut.</p>
    
                            <a href="#" class="btn btn-secondary">Beli Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></br>

    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="../img/Jujutsu_Kaisen_5.jpg" class="card-img featurette-image" alt="Responsive image" width="100" height="500" >
                <div class="card-body text-gramedia">
                    <p class="card-text text-center">Gege Akutami</p>
                    <h5 class="card-title text-center fw-semibold">Jujutsu Kaisen Volume 5</h5>
                    <p class="card-text text-center">Rp. 40.000</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></br>
                            <svg class="bi" width="50" height="50"><use xlink:href="#user"/></svg>
                        </div>
                        <div class="col-md-11"></br>
                        <h7 class="card-title fw-semibold fw-top">Gege Akutami</h7>
                            <p class="card-text"><small class="text-muted">Rekomendasi buku untukmu!</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"></br>
                            <p class="card-text"><b>Deskripsi</b></p>
                            <p class="card-text text-justify">Program pertukaran dengan Akademi Jujutsu Kyoto dimulai. Pihak yang duluan menyingkirkan jurei tingkat 2 di area pertandinganlah yang akan jadi pemenangnya. Todo yang gemar berkelahi segera menyerang pihak Tokyo! Saat Todo dan Itadori saling berhadapan, anak-anak Kyoto yang lain ikut mengepung Itadori dengan niat untuk membunuhnya.</p>                            
                            <p class="card-text"><b>Sinopsis</b></p>
                            <p class="card-text text-justify">Semua orang terkejut ketika mereka mengetahui Itadori masih hidup, tetapi tidak ada waktu untuk reuni yang mengharukan ketika Jujutsu High berada di tengah-tengah persaingan ketat dengan saingan mereka dari Kyoto! Tapi sportifitas yang baik tampaknya tidak ada dalam kartu begitu pihak berwenang memutuskan untuk menghilangkan ancaman Sukuna sekali dan untuk selamanya.
                                Dalam pergantian peristiwa yang tidak terduga, Aoi sangat menyukai Yuji. Yakin bahwa mereka adalah sahabat, Aoi bahkan melontarkan rencana timnya sendiri untuk membunuh Yuji. Sementara itu, Megumi dan yang lainnya mulai mengejar rival Kyoto mereka untuk melindungi Yuji juga.
                                <br>Tim Tokyo dapat mengetahui skema Tim Kyoto. Megumi dan Maki kembali untuk melindungi Yuji, menghadapi saingan mereka karena mencoba membunuhnya. Sementara itu, Aoi menyadari potensi Yuji, dan memutuskan untuk membantu membawanya ke level berikutnya.
                                Saat duel Yuji dengan Aoi, Todo mencapai klimaksnya, dia belajar apa artinya mencapai potensinya. Dengan keahlian membimbing Aoi, Yuji mulai tumbuh menuju tingkat kekuatan baru. Sementara itu, Mechamaru mendukung Momo dalam konfrontasinya dengan Nobara dan Panda.</p>
    
                            <a href="#" class="btn btn-secondary">Beli Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></br>

    <hr class="featurette-divider">

    <!-- Bagian 3 -->
    <div class="row text-center">
      <div class="col-lg-3 border-end">
        <img src="../img/Akasha_Oshi_no_Ko_Anak Idola_6.jpg" class="featurette-image rounded" widht="100" height="300" alt="Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h6 class="text-gramedia">Aka AKASAKA</6>
        <h5 class="fw-semibold text-gramedia">AKASHA : Oshi no Ko : Anak Idola 06</h5>
        <p><b>Rp. 48.000</b></p>
        <p><a class="btn btn-secondary" href="buku.php">Beli Buku</a></p>
      </div>
      <div class="col-lg-3 border-end">
        <img src="../img/Blue_Lock_7.jpg" class="featurette-image rounded" widht="100" height="300" alt="Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h6 class="text-gramedia">Muneyuki Kaneshiro</6>
        <h5 class="fw-semibold text-gramedia">Blue Lock 07</h5>
        <p><br><b>Rp. 45.000</b></p>
        <p><a class="btn btn-secondary" href="buku.php">Beli Buku</a></p>
      </div>
      <div class="col-lg-3 border-end">
        <img src="../img/Akasha_Ito_Junju_Tomie.jpg" class="featurette-image rounded" widht="100" height="300" alt="Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h6 class="text-gramedia">Ito Junji</6>
        <h5 class="fw-semibold text-gramedia">Akasha : Ito Junju - Tomie</h5>
        <p><b>Rp. 85.000</b></p>
        <p><a class="btn btn-secondary" href="buku.php">Beli Buku</a></p>
      </div>
      <div class="col-lg-3">
        <img src="../img/Malioboro_at_Night.jpg" class="featurette-image rounded" widht="100" height="300" alt="Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h6 class="text-gramedia">SKYPHIRE None</6>
        <h5 class="fw-semibold text-gramedia">Malioboro at Night</h5>
        <p><br><b>Rp. 99.000</b></p>
        <p><a class="btn btn-secondary" href="buku.php">Beli Buku</a></p>
      </div>

      <hr class="featurette-divider">

      <div class="col-lg-3 border-end">
        <img src="../img/Corat_coret_di_Toilet.jpg" class="featurette-image rounded" widht="100" height="300" alt="Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h6 class="text-gramedia">Eka Kurniawan</6>
        <h5 class="fw-semibold text-gramedia">Corat-coret di Toilet</h5>
        <p><b>Rp. 79.000</b></p>
        <p><a class="btn btn-secondary" href="buku.php">Beli Buku</a></p>
      </div>
      <div class="col-lg-3 border-end">
        <img src="../img/Dune_Bagian1.jpg" class="featurette-image rounded" widht="100" height="300" alt="Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h6 class="text-gramedia">Frank Herbert</6>
        <h5 class="fw-semibold text-gramedia">DUNE: Bagian 1</h5>
        <p><b>Rp. 129.000</b></p>
        <p><a class="btn btn-secondary" href="buku.php">Beli Buku</a></p>
      </div>
      <div class="col-lg-3 border-end">
        <img src="../img/The_Nightingale.jpg" class="featurette-image rounded" widht="100" height="300" alt="Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h6 class="text-gramedia">Kristin Hannah</6>
        <h5 class="fw-semibold text-gramedia">The Nightingale</h5>
        <p><b>Rp. 170.000</b></p>
        <p><a class="btn btn-secondary" href="buku.php">Beli Buku</a></p>
      </div>
      <div class="col-lg-3">
        <img src="../img/Teka_Teki_Rumah_Aneh.jpg" class="featurette-image rounded" widht="100" height="300" alt="Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
        <h6 class="text-gramedia">Uketsu None</6>
        <h5 class="fw-semibold text-gramedia">Teka-Teki Rumah Aneh</h5>
        <p><b>Rp. 79.000</b></p>
        <p><a class="btn btn-secondary" href="buku.php">Beli Buku</a></p>
      </div>
    </div><!-- /.row -->


    <!-- Footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="home.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
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
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
