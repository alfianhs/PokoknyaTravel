<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pokoknya Travel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



</head>

<body>

  <?php 
    include('koneksi.php');
    session_start();
    if(isset($_SESSION['username'])){
      require("headerlogin.php");
    }else{
      require("header.php");
    } 
  ?>
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(foto/bg/bg-1.jpg)">
            <div class="carousel-container">
                <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Pokoknya Travel</span></h2>
                <p class="animate__animated animate__fadeInUp">Nikmati liburan anda dengan pelayanan penjualan tiket transportasi yang berkualitas.</p>
                <a href="aboutus.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Tentang kami</a>
                </div>
            </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(foto/bg/bg-2.jpg)">
            <div class="carousel-container">
                <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Our Products</h2>
                <p class="animate__animated animate__fadeInUp">Produk kami dimulai dari Tiket Pesawat, Kereta Api, Bus, dan masih banyak lagi.</p>
                <a href="products.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Go</a>
                </div>
            </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(foto/bg/bg-3.jpg)">
            <div class="carousel-container">
                <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Price</h2>
                <p class="animate__animated animate__fadeInUp">Produk-produk kami memiliki harga yang terjangkau, setiap tiket terdiri dari 3 kelas yaitu economics, premium economics, dan first class</p>
                <a href="detail.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Go</a>
                </div>
            </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        </div>
    </section>

  <main id="main">
    <section id="services" class="services">
      <div class="container col-md-10 mt-4">



      </div>
    </section><!-- End Services Section -->

    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Jasa Transportasi Paling Terpercaya</h2>
            <h3>Pokoknya Travel adalah jasa transportasi yang sudah dipercaya sejak tahun 2015</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Kami memiliki kerjasama yang erat dengan berbagai maskapai dan operator transportasi terkemuka. Kami menghadirkan berbagai fitur dan layanan terbaru untuk memudahkan Anda dalam mencari dan memesan tiket. Dukungan pelanggan yang responsif siap membantu Anda 24/7.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Terpercaya</li>
              <li><i class="ri-check-double-line"></i> Terjangkau</li>
              <li><i class="ri-check-double-line"></i> Berkualitas</li>
            </ul>
          </div>
        </div>

      </div>
    </section>

    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.garuda-indonesia.com" target="_blank">
            <img src="foto/Sponsor/garuda.png" class="img-fluid" alt="">
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.lionair.co.id" target="_blank">
            <img src="foto/Sponsor/lion_air.png" class="img-fluid" alt="">
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.kai.id" target="_blank">
            <img src="foto/Sponsor/kai.png" class="img-fluid" alt="">
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.pelni.co.id" target="_blank">
            <img src="foto/Sponsor/pelni.png" class="img-fluid" alt="">
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.rosalia-indah.co.id" target="_blank">
            <img src="foto/Sponsor/rosalia.png" class="img-fluid" alt="">
            </a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.indonesia.travel" target="_blank">
            <img src="foto/Sponsor/travel3.png" class="img-fluid" alt="">
            </a>
          </div>

        </div>

      </div>
    </section>
  </main><!-- End #main -->

  <?php require("footer.php"); ?>

</body>

</html>