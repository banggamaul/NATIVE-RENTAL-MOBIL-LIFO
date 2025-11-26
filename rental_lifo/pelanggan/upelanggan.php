<?php
include("konek.php");
$kode = $_POST['kode'];
$nama = $_POST['txtNamapelanggan'];
$ktp = $_POST['txtKtppel'];
$gender = $_POST['gender'];
$alamat = $_POST['txtAlamat'];
$notelp = $_POST['txtNotlp'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$level = $_POST['Level'];
$simpan = mysqli_query($konek, "UPDATE admin SET nama_admin='$nama', ktp='$ktp', jk_admin='$gender',
 alamat='$alamat', no_tlp='$notelp', username='$username', password='$password', level='$level'
  WHERE id_admin='$kode'") or die(mysqli_error());
if ($simpan) {
    // header("Location:index.php?x=pelanggan");
    ?>
    <script type="text/javascript">
        alert("Data Pelanggan Berhasil Di Ubah!");
        window.location = "index.php?x=pelanggan";
    </script>
    <?php
}
