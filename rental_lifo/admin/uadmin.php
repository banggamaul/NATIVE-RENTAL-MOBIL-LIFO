<?php
include("konek.php");
$kode = $_POST['kode'];
$nama = $_POST['txtNamalengkap'];
$gender = $_POST['gender'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$level = $_POST['Level'];
$simpan = mysqli_query($konek, "UPDATE admin SET nama_admin='$nama', jk_admin='$gender',
 username='$username', password='$password', level='$level'
  WHERE id_admin='$kode'") or die(mysqli_error());
if ($simpan) {
    header("Location:index.php?x=admin");
}
