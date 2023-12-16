<?php 
include('koneksi.php'); 
require('cek.php');
?>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#">Pokoknya Travel</a></h1>



      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="detail.php">Detail Tiket</a></li>
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="#" class="getstarted"><?php echo $username; ?></a></li>
          <li><a href="logout.php" class="getstarted">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->