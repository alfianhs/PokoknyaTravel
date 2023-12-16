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
    if (isset($_SESSION['username'])) {
        require("headerlogin.php");
    } else {
        require("header.php");
    }
    ?>
    <main id="main">
        <section id="services" class="services">
            <div class="container col-md-10 mt-4">
                <div class="row gy-3">
                    <h2 align="center">Products</h2>

                    <?php
                    $query = "SELECT * FROM barang";
                    $result = mysqli_query($koneksi, $query);
                    $cek = mysqli_num_rows($result) > 0;

                    if ($cek) {
                        while ($data = mysqli_fetch_assoc($result)) {
                    ?>

                            <div class="col-md-4">
                                <div class="card text-center h-100">
                                    <img class="card-img-top" src="foto/<?php echo $data['gambar']; ?>" alt="Card image cap" style="width: 400px; height: 400px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $data['nama']; ?></h5>
                                        <h6 class="card-subtitle">Harga mulai Rp. <?php echo $data['harga']; ?></h6>
                                        <br>
                                        <a href="Form.php" class="btn btn-primary">Beli</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "Error executing the querry: " . mysqli_error($koneksi);
                    }
                    ?>

                </div>
            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->

    <?php require("footer.php"); ?>

</body>

</html>