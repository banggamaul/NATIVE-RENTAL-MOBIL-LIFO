<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Order</title>
</head>

<?php
include("konek.php");
$id = $_GET['id'];
$cari = mysqli_query($konek, "SELECT * FROM mobil WHERE id_mobil='$id'");
$data = mysqli_fetch_array($cari);
?>

<body>
    <div class="card border-secondary mt-4 mx-auto" style="max-width: 50rem;">
        <div class="card-header">Ubah Data Order</div>
        <div class="card-body text-secondary">
            <form method="post" action="?x=umobil">
                <input type="hidden" name="kode" value="<?php echo $data['id_mobil']; ?>">
                <div class="mb-3">
                    <label class="form-label">Tipe Mobil</label>
                    <input type="text" class="form-control" name="txtTipemobil"
                        value="<?php echo $data['merk']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">No Polisi</label>
                    <input type="text" class="form-control" name="txtNopol"
                        value="<?php echo $data['no_polisi']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun</label>
                    <input type="text" class="form-control" name="txtTahun"
                        value="<?php echo $data['tahun']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control" name="txtHarga"
                        value="<?php echo $data['harga']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="txtStatusmobil" class="form-control">
                        <option value="<?php echo $data['s_mobil']; ?>">
                            <?php echo $data['s_mobil']; ?>
                        </option>
                        <option value="Ready">Ready</option>
                        <option value="Di Sewa">Di Sewa</option>
                        <option value="Maintenance">Maintenance</option>
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