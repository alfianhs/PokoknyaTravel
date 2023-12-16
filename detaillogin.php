<?php require('cek.php'); ?>
<!DOCTYPE html>
<html>
<head>

    <title>Detail Tiket</title>

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
     <?php require('headerlogin.php'); ?>

<main id="main">
	<section id="services" class="services">


		<div class="container col-md-10 mt-4">
			<h1>Detail Tiket</h1>
			<div class="card">
				<div class="card-header bg-danger text-white">
					Data Tiket 
				</div>
				<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Tiket</th>
									<th>Harga</th>
									<th>Deskripsi</th>
									<th>Gambar</th>
									<th>Aksi</th>
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
									<td><?= $no; ?></td>
									<td><?= $row['nama'];?></td>
									<td>Rp. <?= $row['harga']; ?></td>
									<td><?= $row['deskripsi']; ?></td>
									<td  class="card-footer" align="center" style="vertical-align: middle;">
										<a href="foto/<?= $row['gambar']; ?>" target="_blank">
										<img src="foto/<?= $row['gambar']; ?>" style="width: 100px;">
										</a>
									</td>
									<td  class="card-footer" align="center" style="vertical-align: middle;">
											<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
											<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
									</td>
								</tr>

									<?php $no++; } ?>
							</tbody>
						<a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
						<br>
						<br>
						</table>
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