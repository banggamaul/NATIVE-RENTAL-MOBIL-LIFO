<?php
include("konek.php");
$kode = $_POST['kode'];
$idmobil = $_POST['mobil'];
$nama = $_POST['txtNama'];
$ktp = $_POST['txtKtppel'];
$gender = $_POST['gender'];
$alamat = $_POST['txtAlamat'];
$tlp = $_POST['txtNotlp'];
$tujuan = $_POST['txtTujuan'];
$sorder = $_POST['Sorder'];
$mulai = new DateTime($_POST['txtmulai']);
$selesai = new DateTime($_POST['txtselesai']);
$selisih = $selesai->diff($mulai);
$lama = $selisih->d;
$cari = mysqli_query($konek, "SELECT * FROM mobil WHERE id_mobil='$idmobil'");
$data = mysqli_fetch_array($cari);
$harga = $lama * $data['harga'];
$smobil = $_POST['txtsmobil'];
$simpan = mysqli_query($konek, "UPDATE sewa SET id_mobil='$idmobil', nama_order='$nama', ktp='$ktp', jk_order='$gender',
 alamat='$alamat', tlp_order='$tlp', tujuan='$tujuan', tgl_order='$_POST[txtmulai]',tgl_kembali='$_POST[txtselesai]',
 lama='$lama', harga_total='$harga', s_order='$sorder' 
 WHERE id_sewa='$kode' ");
if ($simpan) {
    $emobil = mysqli_query($konek, "UPDATE mobil SET s_mobil='$smobil' WHERE id_mobil='$idmobil'");
    // header("Location:index.php?x=pelanggan");
    ?>
    <script type="text/javascript">
        alert("Data Order Berhasil Di Ubah!");
        window.location = "index.php?x=order";
    </script>
    <?php
}
