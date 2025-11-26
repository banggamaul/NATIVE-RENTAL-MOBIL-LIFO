<?php
session_start();
session_unset();
session_destroy();
// header("location:beranda.php");
?>
<script type="text/javascript">
        // alert("Data Pelanggan Berhasil Di Ubah!");
        window.location = "beranda.php";
    </script>