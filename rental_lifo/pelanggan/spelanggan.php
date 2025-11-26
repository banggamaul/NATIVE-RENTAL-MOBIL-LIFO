<?php
include("konek.php");
$nama = $_POST['txtNamapelanggan'];
$ktp = $_POST['txtKtppel'];
$gender = $_POST['gender'];
$alamat = $_POST['txtAlamat'];
$notelp = $_POST['txtNotlp'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$level = $_POST['level'];
$simpan = mysqli_query($konek, "INSERT INTO admin(nama_admin,ktp,jk_admin,alamat,no_tlp,username,password,level)
values ('$nama', '$ktp', '$gender', '$alamat', '$notelp', '$username', '$password', '$level')") or die (mysqli_fetch_array());
if($simpan){
    ?>
    <script type="text/javascript">
        // alert("Data Pelanggan Berhasil Di Ubah!");
        window.location = "index.php";
    </script>
    <?php
}