<?php
include("konek.php");
$kode = $_POST['kode'];
$merk = $_POST['txtTipemobil'];
$nopol = $_POST['txtNopol'];
$tahun = $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$status = $_POST['txtStatusmobil'];
$simpan = mysqli_query($konek, "UPDATE mobil SET merk='$merk', no_polisi='$nopol',
 tahun='$tahun', harga='$harga', s_mobil='$status'
  WHERE id_mobil='$kode'") or die(mysqli_error());
if ($simpan) {
  ?>
    <!-- header("Location:index.php?x=mobil"); -->
    <script type="text/javascript">
        alert("DataBerhasil Di Ubah!");
        window.location = "index.php?x=mobil";
    </script>
    <?php
}
