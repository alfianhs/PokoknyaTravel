<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Form</title>
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

  <?php require("header.php"); ?>

  <main id="main">

    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container col-md-10 mt-4">
			<div class="card">
				<div class="card-header bg-danger text-white ">
					Data Form
				</div>
            <div class="card-body">
                <?php
                    $nama_barang = $_POST['nama_barang'];
                    $dari = $_POST['dari'];
                    $ke = $_POST['ke'];
                    $tgl = $_POST['tanggal'];
                    $tiket = $_POST['tiket'];
                    $penumpang = $_POST['penumpang'];
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                    $no = $_POST['nohp'];
                    $i = 0;
                    if (isset($_POST['fasilitas1']))
                    { 
                        $fasilitas[$i] = $_POST['fasilitas1'];
                        $i++;
                    }
                    if (isset($_POST['fasilitas2']))
                    { 
                        $fasilitas[$i] = $_POST['fasilitas2'];
                        $i++;
                    }
                    if (isset($_POST['fasilitas3']))
                    { 
                        $fasilitas[$i] = $_POST['fasilitas3'];
                        $i++;
                    }
                    if (isset($_POST['fasilitas4']))
                    { 
                        $fasilitas[$i] = $_POST['fasilitas4'];
                        $i++;
                    }
                    $fasilitaslist=implode(", ",$fasilitas);
                    echo "<table class='table table-bordered'>
                    <tr>
                        <td>Tiket</td>
                        <td>$nama_barang</td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>$nama</td>
                    </tr>
                    <tr>
                        <td>No. Handphone</td>
                        <td>$no</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>$alamat</td>
                    </tr>
                    <tr>
                        <td>Tanggal Keberangkatan</td>
                        <td>$tgl</td>
                    </tr>
                    <tr>
                        <td>Jumlah Penumpang</td>
                        <td>$penumpang</td>
                    </tr>
                    <tr>
                        <td>Kota Keberangkatan</td>
                        <td>$dari</td>
                    </tr>
                    <tr>
                        <td>Kota Tujuan</td>
                        <td>$ke</td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td>$tiket</td>
                    </tr>
                    <tr>
                        <td>Fasilitas yang dipilih</td>
                        <td>$fasilitaslist</td>
                    </tr>
                    </table>";
                ?>
                <div class="card-footer" align="center">
                    <a href='kreditin.php' class='btn btn-primary'>Simulasikan Pembayaran Kredit</a>
                </div>
            </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    

  </main><!-- End #main -->

  <?php require("footer.php"); ?>

</body>

</html>