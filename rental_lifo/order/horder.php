<?php
include("konek.php");
$id=$_GET['id'];
$hapus = mysqli_query($konek, "delete from sewa where id_sewa='$id'");
if ($hapus) {
    ?>
    <!-- header("location:index.php?x=order"); -->
    <script type="text/javascript">
        alert("Data Order Berhasil Di Hapus!");
        window.location = "index.php?x=order";
    </script>
<?php
}