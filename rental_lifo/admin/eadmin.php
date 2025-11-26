<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Admin</title>
</head>

<?php
include("konek.php");
$id = $_GET['id'];
$cari = mysqli_query($konek, "SELECT * FROM admin WHERE id_admin='$id'")
    or die(mysqli_error());
$data = mysqli_fetch_array($cari);
?>

<body>
    <div class="card border-secondary mt-4 mx-auto" style="max-width: 50rem;">
        <div class="card-header">Ubah Data Admin</div>
        <div class="card-body text-secondary">
            <form method="post" action="?x=uadmin">
                <input type="hidden" name="kode" value="<?php echo $data['id_admin']; ?>">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="txtNamalengkap"
                        value="<?php echo $data['nama_admin']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="gender" class="form-control">
                        <option value="<?php echo $data['jk_admin']; ?>">
                            <?php echo $data['jk_admin']; ?></option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="txtUsername"
                        value="<?php echo $data['username']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="txtPassword"
                        value="<?php echo $data['password']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Level</label>
                    <select name="Level" class="form-control">
                        <option value="<?php echo $data['level']; ?>">
                            <?php echo $data['level']; ?></option>
                        <option value="Admin">Admin</option>
                        <option value="Super">Super</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary">Simpan</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>