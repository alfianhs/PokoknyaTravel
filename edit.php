<?php require('cek.php'); ?>
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

    <?php require("headerlogin.php"); ?>

<main id="main">
<section id="services" class="services">
    <div class="container col-md-6 mt-4">
		<h1>Table Barang</h1>
		<div class="card">
			<div class="card-header bg-danger text-white ">
				Edit Barang
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from barang where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
					</div>
					<div class = "form-group"> 
						<label>Foto Sebelumnya</label>
						<br>
						<img src="foto/<?= $row['gambar']; ?>" class="col-3">
						 <input type="hidden" name="gambar_sebelumnya" value="<?= $row['gambar']; ?>" />
					</div>
					<div class = "form-group"> 
						<label>Foto Baru (abaikan jika tidak ingin ganti foto)</label>
						 <input type="file" name="gambar" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];
					$nama_foto1   = $_FILES['gambar']['name'];
			        $file_tmp1    = $_FILES['gambar']['tmp_name'];   
			        $acak1      = rand(1,99999);

			        	//cek jika foto baru tidak ada
			          if($nama_foto1 != "") {
			            $nama_unik1     = $acak1.$nama_foto1;
			            move_uploaded_file($file_tmp1,'foto/'.$nama_unik1);
			          } else {
			          	//maka tetap pakai foto lama
			            $nama_unik1 = $_POST['gambar_sebelumnya'];
			          }
			      
			        $foto = $nama_unik1;

					//query mengubah barang
					mysqli_query($koneksi, "update barang set nama='$nama', harga='$harga', deskripsi='$deskripsi', gambar='$foto' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('Data berhasil diupdate.');window.location='detaillogin.php';</script>";
				}



				?>
			</div>
		</div>
	</div>
</section>
</main>

    <?php require("footer.php"); ?>
</body>
</html>