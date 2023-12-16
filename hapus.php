<?php			
			include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database
			$id = $_GET['id']; //menampung id

			//query hapus
			$datas = mysqli_query($koneksi, "delete from barang where id ='$id'") or die(mysqli_error($koneksi));

			//alert dan redirect ke index.php
			echo "<script>alert('Data berhasil dihapus.');window.location='detaillogin.php';</script>";
	?>