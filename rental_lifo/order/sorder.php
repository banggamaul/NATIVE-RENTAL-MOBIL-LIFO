<?php
include ("konek.php");
$polisi = $_POST['txtnopol'];
$nama = $_POST['txtNama'];
$ktp = $_POST['txtKtppel'];
$gender = $_POST['gender'];
$alamat = $_POST['txtAlamat'];
$tlp = $_POST['txtNotlp'];
$tujuan = $_POST['txtTujuan'];
$sts = $_POST['status'];
$mulai = new DateTime($_POST['txtmulai']);
$selesai = new DateTime($_POST['txtselesai']);
$selisih = $selesai->diff($mulai);
// $jlmhari = $selisih->days;
$x = $selisih->days;
$cari = mysqli_query($konek, "SELECT * FROM mobil WHERE id_mobil='$polisi'");
$data = mysqli_fetch_array($cari);
$harga = $x * $data['harga'];
// echo $polisi;
$smobil = $_POST['txtsmobil'];
$simpan = mysqli_query($konek, "INSERT INTO sewa (id_mobil,id_admin,nama_order,ktp,jk_order,alamat,tlp_order,tujuan,tgl_order,tgl_kembali,lama,harga_total,s_order)
values ('$polisi','$_SESSION[id_admin]','$nama','$ktp','$gender','$alamat','$tlp','$tujuan','$_POST[txtmulai]','$_POST[txtselesai]','$x','$harga','$sts')");
if($simpan){
    $emobil = mysqli_query($konek, "INSERT INTO mobil (s_mobil='$status'
  WHERE id_mobil='$polisi')");
     ?>
    <script type="text/javascript">
        alert("Order berhasil");
        window.location = "index.php?x=order";
    </script>
    <?php
}