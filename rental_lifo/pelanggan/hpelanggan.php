<?php
include("konek.php");
$id=$_GET['id'];
$hapus = mysqli_query($konek, "delete from admin where id_admin='$id'")
or die(mysqli_error());
if ($hapus) {
    ?>
    <script type="text/javascript">
        alert("Data Pelanggan Berhasil di Hapus");
        window.location = "index.php?x=pelanggan";
    </script>
    <?php
}