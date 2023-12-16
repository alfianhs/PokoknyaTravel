<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Pemesanan Tiket</title>
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
  require("header.php"); 
  include('koneksi.php');
  ?>

  <main id="main">

    

    <section id="services" class="services">
      <div class="container col-md-10 mt-4">

        <div class="row">
            <p>
                <h2 align="center">Form Pemesanan</h2>
                                    
                <form action="terima.php" method="post">
                    <table align="center">
                    <tr>
                        <td>Tiket</td>
                        <td>
                            <Select name="nama_barang" class="form-select form-select-sm" aria-label=".form-select-sm example" id="nama_barang" require>
                            <option value="">Pilih Tiket</option>
                            <?php 
                                $nama_barang = mysqli_query($koneksi,"select * from barang");
                                while($f = mysqli_fetch_array($nama_barang)){
                            ?>
                                <option value="<?php echo $f['id'] ?>"><?php echo $f['nama']; ?></option>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nama" placeholder="Masukan Nama Lengkap"></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td><input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan No Telepon" name="nohp"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Alamat Lengkap"></textarea></td>
                    </tr>
                    <tr>
                        <td>Tanggal Keberangkatan</td>
                        <td><input type="date" name="tanggal"></td>
                    </tr>
                    <tr>
                        <td>Jumlah Penumpang</td>
                        <td><input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="penumpang" id=""></td>
                    </tr>
                    <tr>
                        <td>Kota/Kabupaten Keberangkatan</td>
                        <td><Select name="dari" class="form-select form-select-sm" aria-label=".form-select-sm example" id="dari" require>
                                    
                            </Select>
                        </td>
                    </tr>
                    <tr>
                        <td>Kota/Kabupaten Tujuan</td>
                        <td><Select name="ke" class="form-select form-select-sm" aria-label=".form-select-sm example" id="ke" require>

                            </Select>
                        </td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td><input class="form-check-input" type="radio" name="tiket" value="Economics" checked="Ekonomi">Economics
                            <input class="form-check-input" type="radio" name="tiket" value="Premium Economics">Premium Economics
                            <input class="form-check-input" type="radio" name="tiket" value="First Class">First Class
                    </tr>
                    <tr>
                        <td>Fasilitas</td>
                        <td><input class="form-check-input" type="checkbox" name="fasilitas1" value="Snack">Snack
                            <input class="form-check-input" type="checkbox" name="fasilitas2" value="Makanan">Makanan
                            <input class="form-check-input" type="checkbox" name="fasilitas3" value="Minuman">Minuman
                            <input class="form-check-input" type="checkbox" name="fasilitas4" value="Tidak Ketiganya">Tidak Ketiganya
                        </td>
                    </tr>
                        <tr>
                            <td></td>
                            <td>
                            <button type="submit" class="btn btn-primary" name="input">Submit</button>
                            <button type="reset" class="btn btn-danger" name="clear">Clear</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </p>
        </div>

      </div>
    </section>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
		$('#nama_barang').change(function() { 
			var nama_barang = $(this).val(); 
			$.ajax({
				type: 'POST', 
				url: 'ajaxdari.php', 
				data: 'id=' + nama_barang, 
				success: function(response) { 
					$('#dari').html(response); 
				}
			});
		});
 
	</script>

    <script type="text/javascript">
		$('#nama_barang').change(function() { 
			var nama_barang = $(this).val(); 
			$.ajax({
				type: 'POST', 
				url: 'ajaxke.php', 
				data: 'id=' + nama_barang, 
				success: function(response) { 
					$('#ke').html(response); 
				}
			});
		});
 
	</script>
    

  </main><!-- End #main -->

  <?php require("footer.php"); ?>

</body>

</html>