<?php
include("konek.php");
$nama = $_POST['txtNamalengkap'];
$gender = $_POST['gender'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$level = $_POST['Level'];
$simpan = mysqli_query($konek, "INSERT INTO admin(nama_admin,jk_admin,username,password,level)
values ('$nama', '$gender', '$username', '$password', '$level')");
if ($simpan) {
    // header("Location:index.php?x=admin");
?>
    <script type="text/javascript">
        alert("Data Berhasil Di Simpan!");
        window.location = "index.php?x=admin";
    </script>
<?php
}
