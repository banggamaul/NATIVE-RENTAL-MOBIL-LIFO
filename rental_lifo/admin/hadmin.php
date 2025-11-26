<?php
include("konek.php");
$id=$_GET['id'];
$hapus = mysqli_query($konek, "delete from admin where id_admin='$id'")
or die(mysqli_error());
if ($hapus) {
    header("location:index.php?x=admin");
}