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
    if(isset($_SESSION['username'])){
      require("headerlogin.php");
    }else{
      require("header.php");
    } 
  	?>

<main id="main">
    <section id="services" class="services">

		<div class="container col-md-10 mt-4">
			<h1>Detail Tiket</h1>
			<div class="card">
				<div class="card-header bg-danger text-white ">
					Data Tiket 
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th style="vertical-align: middle; text-align: center;">No</th>
								<th style="vertical-align: middle; text-align: center;">Nama Tiket</th>
								<th style="vertical-align: middle; text-align: center;">Harga</th>
								<th style="vertical-align: middle; text-align: center;">Gambar</th>
								<th style="vertical-align: middle; text-align: center; width: 500px;">Deskripsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include('koneksi.php'); //memanggil file koneksi
								$datas = mysqli_query($koneksi, "select * from barang") or die(mysqli_error($koneksi));
								//script untuk menampilkan data barang

								$no = 1;//untuk pengurutan nomor

								//melakukan perulangan
								while($row = mysqli_fetch_assoc($datas)) {
							?>	

							<tr>
								<td style="text-align: center;"><?= $no; ?></td>
								<td><?= $row['nama'];?></td>
								<td>Rp. <?= $row['harga']; ?></td>
								<td class="card-footer" align="center" style="vertical-align: middle;">
									<a href="foto/<?= $row['gambar']; ?>" target="_blank">
									<img src="foto/<?= $row['gambar']; ?>" style="width: 100px; height: 100px;">
									</a>
								</td>
								<td><?= $row['deskripsi']; ?></td>
							</tr>

								<?php $no++; } ?>
						</tbody>
					</table>
					<div class="card-footer" align="center">
					<a href="detaillogin.php" class="btn btn-danger">Data Product (Admin Only)</a>
					
					<br> <br>
					<a href="detail_pdf.php" target="_blank" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i>PRINT</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

    <?php require("footer.php"); ?>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>