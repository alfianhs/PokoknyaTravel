<?php 
include("koneksi.php");
$nama_barang = $_POST['id'];
$tampil=mysqli_query($koneksi,"SELECT * FROM ke WHERE nama_tiket='$nama_barang'");
$jml=mysqli_num_rows($tampil);
 
if($jml > 0){    
    while($r=mysqli_fetch_array($tampil)){
        ?>
        <option value="<?php echo $r['kota_ke'] ?>"><?php echo $r['kota_ke'] ?></option>
        <?php        
    }
}else{
    echo "<option selected>- Data Kota/Kabupaten Tidak Ada, Pilih Yang Lain -</option>";
}
 
?>