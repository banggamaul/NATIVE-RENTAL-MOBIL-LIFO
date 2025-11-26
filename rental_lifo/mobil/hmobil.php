<?php
include("konek.php");
$id=$_GET['id'];
$hapus = mysqli_query($konek, "delete from mobil where id_mobil='$id'")
or die(mysqli_error());
if ($hapus) {
    ?>
    <!-- header("location:index.php?x=order"); -->
    <script type="text/javascript">
        alert("Data Berhasil Di Hapus!");
        window.location = "index.php?x=mobil";
    </script>
<?php
}