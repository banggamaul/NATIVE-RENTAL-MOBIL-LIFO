<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Order</title>
</head>

<body>
    <?php
    include("konek.php");
    $cari = mysqli_query($konek, "SELECT * FROM mobil where s_mobil='Ready' ORDER BY last_updated DESC");
    $carii = mysqli_query($konek, "SELECT * FROM admin WHERE id_admin='$_SESSION[id_admin]'");
    $dataa = mysqli_fetch_array($carii);

    ?>
    <div class="card border-secondary mt-4 mx-auto" style="max-width: 50rem;">
        <div class="card-header">Form Order</div>
        <div class="card-body text-secondary">
            <form method="post" action="?x=sorder">
                <!-- <input type="hidden" name="kode" value="<?php echo $data['id_mobil']; ?>"> -->
                <div class="mb-3">
                    <label class="form-label">Mobil</label>
                    <select name="txtnopol" class="form-control">
                        <option value="">Pilih Mobil</option>
                        <?php
                        // while ($data = mysqli_fetch_array($cari)) {
                        foreach ($cari as $data) {
                        ?>
                            <option value="<?php echo $data['id_mobil']; ?>"><?php echo $data['no_polisi'] . " -" . $data['merk'] . " Rp." . $data['harga']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <input type="hidden" name="kode" value="<?php echo $dataa['id_admin']; ?>">
                <!-- <fieldset disabled="disabled"> -->
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="txtNama"
                        value="<?php echo $dataa['nama_admin']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">No KTP</label>
                    <input type="text" class="form-control" name="txtKtppel"
                        value="<?php echo $dataa['ktp']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="gender" class="form-control">
                        <option value="<?php echo $dataa['jk_admin']; ?>">
                            <?php echo $dataa['jk_admin']; ?></option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="txtAlamat"
                        value="<?php echo $dataa['alamat']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">No Telp</label>
                    <input type="text" class="form-control" name="txtNotlp"
                        value="<?php echo $dataa['no_tlp']; ?>">
                </div>
                <!-- </fieldset> -->
                <div class="mb-3">
                    <label class="form-label">Tujuan</label>
                    <input type="text" class="form-control" name="txtTujuan">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Mulai Sewa</label>
                    <input type="date" class="form-control" name="txtmulai">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal dikembalikan</label>
                    <input type="date" class="form-control" name="txtselesai">
                </div>
                <input type="hidden" name="status" value="Di Sewa">
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