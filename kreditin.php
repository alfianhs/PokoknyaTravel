<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simulasi Pembayaran</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
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
      <div class="container col-md-10 mt-4" align="center">
        <p>
        <h2 align="center">Simulasi Pembayaran</h2>
        <form action="" method="post">
          <table align="center" width="80%" border="1">
            <tr>
              <td>Pilih Tiket</td>
              <?php
              $query = "SELECT * FROM barang";
              $result = mysqli_query($koneksi, $query);
              $cek = mysqli_num_rows($result) > 0;
              ?>
              <td>
                <Select name="nama_barang" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option>Pilih Tiket</option>
                  <?php
                  if ($cek) {
                    while ($data = mysqli_fetch_assoc($result)) {
                  ?>
                      <option><?php echo $data['nama']; ?></option>
                  <?php }
                  } ?>
              </td>
            </tr>
            <tr>
              <td>Masukkan Harga</td>
              <td>
                <div class="input-group">
                  <span class="input-group-text">Rp.</span>
                  <input type="number" class="form-control" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="harga" min="10000000" placeholder="Tulis tanpa menggunakan titik | Min. Rp.10.000.000">
                </div>
              </td>
            </tr>
            <tr>
              <td>Bunga Pertahun</td>
              <td>
                <div class="input-group">
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="bunga" required>
                    <option value="5">5%</option>
                    <option value="6">6%</option>
                    <option value="7">7%</option>
                    <option value="8">8%</option>
                    <option value="9">9%</option>
                    <option value="10">10%</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td>Uang Muka(DP)</td>
              <td>
                <div class="input-group">
                  <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dp" required placeholder="Min. 30%" min="30" max="100">
                  <span class="input-group-text">%</span>
                </div>
              </td>
            </tr>
            <tr>
              <td>Jangka Waktu Peminjaman</td>
              <td>
                <div class="input-group">
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="jangkawaktu" required>
                    <option value="12">1 Tahun</option>
                    <option value="24">2 Tahun</option>
                    <option value="36">3 Tahun</option>
                    <option value="48">4 Tahun</option>
                    <option value="60">5 Tahun</option>
                  </select>
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <button type="submit" class="btn btn-success" name="input">Kalkulasi</button>
                <button type="reset" class="btn btn-danger" name="clear">Clear</button>
              </td>
            </tr>
          </table>
        </form>
        </p>

        <!-- Deklarasi -->
        <?php
        if (isset($_POST['input'])) {
          $nama_barang = $_POST['nama_barang'];
          $harga = $_POST['harga'];
          $bunga = $_POST['bunga'];
          $dp = $_POST['dp'];
          $jangkawaktu = $_POST['jangkawaktu'];
        ?>

          <!-- Perhitungan -->
          <?php
          $uangmuka = $harga * ($dp / 100);
          $bataskredit = $harga - $uangmuka;
          $angsuranpokok = $bataskredit / $jangkawaktu;
          $angsuranbunga = ($bataskredit * ($bunga / 100)) / 12;
          $angsurantotal = $angsuranpokok + $angsuranbunga;
          ?>

          <!--Format Rupiah-->
          <?php
          function currency($angka)
          {
            $jadi = "Rp. " . number_format($angka, 2, ',', '.');
            return $jadi;
          }
          ?>

          <p>
          <h2>Data Pinjaman Anda</h2>
          <table class="table table-dark table-striped">
            <tr>
              <td>Barang Yang Dipinjam</td>
              <td> : <?= $nama_barang ?></td>
            </tr>
            <tr>
              <td>Harga</td>
              <td> : <?= currency($harga) ?></td>
            </tr>
            <tr>
              <td>Bunga</td>
              <td> : <?= $bunga ?>%</td>
            </tr>
            <tr>
              <td>Jangka Waktu Pinjaman</td>
              <td> : <?= $jangkawaktu ?> Bulan</td>
            </tr>
            <tr>
              <td>Uang Muka (DP)</td>
              <td> : <?= currency($uangmuka) ?></td>
            </tr>
            <tr>
              <td>Batas Kredit</td>
              <td> : <?= currency($bataskredit) ?></td>
            </tr>
          </table>
          </p>

          <p>
          <h2>Besar Angsuran</h2>
          <table class="table table-dark table-striped">
            <tr>
              <td>Angsuran Pokok</td>
              <td> : <?= currency($angsuranpokok) ?></td>
            </tr>
            <tr>
              <td>Angsuran Bunga</td>
              <td> : <?= currency($angsuranbunga) ?></td>
            </tr>
            <tr>
              <td>Total Angsuran</td>
              <td> : <?= currency($angsurantotal) ?></td>
            </tr>
          </table>
          </p>

          <p>
          <h2>Tabel Angsuran</h2>
          <table class="table table-dark table-striped">
            <tr>
              <th>Bulan</th>
              <th>Angsuran Bunga</th>
              <th>Angsuran Pokok</th>
              <th>Total Angsuran</th>
              <th>Sisa Wajib</th>
            </tr>
            <tr>
              <td>0</td>
              <td>Rp 0,00</td>
              <td>Rp 0,00</td>
              <td>Rp 0,00</td>
              <td><?= currency($bataskredit) ?></td>
            </tr>
            <!-- PERULANGAN -->
            <?php
            $sisakredit = $bataskredit;
            for ($i = 1; $i <= $jangkawaktu; $i++) {
              $sisakredit = $sisakredit - $angsuranpokok;
              echo "<tr>";
              echo "<td>" . $i . "</td>";
              echo "<td>" . currency($angsuranbunga) . "</td>";
              echo "<td>" . currency($angsuranpokok) . "</td>";
              echo "<td>" . currency($angsurantotal) . "</td>";
              echo "<td>" . currency($sisakredit) . "</td>";
              echo "</tr>";
            }
            ?>
            <?php
            $totalangsuranbunga = $angsuranbunga * $jangkawaktu;
            $totalangsuranpokok = $angsuranpokok * $jangkawaktu;
            $totalangsuran  = $angsurantotal * $jangkawaktu;
            ?>
            <tr>
              <th>Total</th>
              <th><?= currency($totalangsuranbunga) ?></th>
              <th><?= currency($totalangsuranpokok) ?></th>
              <th><?= currency($totalangsuran) ?></th>
              <th>0</th>
            </tr>
          </table>
          </p>

      </div>
    <?php } ?>
    </section><!-- End Services Section -->

    <?php require("footer.php"); ?>

  </main>
</body>

</html>