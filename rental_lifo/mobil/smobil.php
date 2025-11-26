<?php
include("konek.php");
$merk = $_POST['txtTipemobil'];
$nopol = $_POST['txtNopol'];
$tahun = $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$status = $_POST['txtStatusmobil'];
$simpan = mysqli_query($konek, "INSERT INTO mobil(merk,no_polisi,tahun,harga,s_mobil)
values ('$merk', '$nopol', '$tahun', '$harga', '$status')");
if($simpan){
    ?>
    <!-- header("Location:index.php?x=mobil"); -->
    <script type="text/javascript">
        alert("Data Berhasil Di Simpan!");
        window.location = "index.php?x=mobil";
    </script>
<?php
}