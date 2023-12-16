<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Tiket</title>
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
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>

  <?php
  include('koneksi.php');
  session_start();
  if (isset($_SESSION['username'])) {
    require("headerlogin.php");
  } else {
    require("header.php");
  }
  ?>

  <main id="main">
    <section id="services" class="services">
      <div class="container col-md-10 mt-4">

        <div class="row">
          <p>
          <div class="card-header bg-danger text-white" align="center">
            <h2>About Us</h2>
          </div>
          <div> <br> Selamat datang di laman kami! Kami adalah platform jual beli tiket transportasi terpercaya. Dapatkan pengalaman perjalanan yang mudah dan nyaman bersama kami. Kami menyediakan berbagai jenis tiket transportasi, mulai dari pesawat, kereta, bus, hingga kapal laut.</br>
            </br>
            Tim kami terdiri dari profesional yang berkomitmen untuk memberikan layanan terbaik kepada Anda. Kami berkomitmen untuk memastikan keamanan dan kepuasan pelanggan. Kami menawarkan harga tiket yang kompetitif dan penawaran khusus untuk perjalanan Anda.</br>
            </br>
            Kami memiliki kerjasama yang erat dengan berbagai maskapai dan operator transportasi terkemuka. Kami menghadirkan berbagai fitur dan layanan terbaru untuk memudahkan Anda dalam mencari dan memesan tiket. Dukungan pelanggan yang responsif siap membantu Anda 24/7.</br>
            </br>
            Misi kami adalah menjadi mitra perjalanan Anda yang terpercaya dan memenuhi kebutuhan transportasi Anda. Kami memberikan pengalaman belanja online yang aman, mudah, dan transparan. Dapatkan berbagai pilihan destinasi dan jadwal keberangkatan yang fleksibel.</br>
            </br>
            Bergabunglah dengan jutaan pelanggan kami yang puas dengan layanan kami. Kami senang dapat menjadi bagian dari perjalanan Anda!
          </div>
          </p>
        </div>

      </div>
    </section><!-- End Services Section -->
  </main>

  <?php require("footer.php"); ?>
</body>

</html>