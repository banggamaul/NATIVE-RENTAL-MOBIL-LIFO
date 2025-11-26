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
    $id = $_GET['id'];
    $cari = mysqli_query($konek, "SELECT * FROM sewa WHERE id_sewa='$id'");
    $carii = mysqli_query($konek, "SELECT * FROM mobil,sewa WHERE sewa.id_mobil=mobil.id_mobil");
    $caari = mysqli_query($konek, "SELECT * FROM mobil where s_mobil='Ready' ORDER BY last_updated DESC");
    $dataa = mysqli_fetch_array($carii);
    $data = mysqli_fetch_array($cari);

    ?>
    <div class="card border-secondary mt-4 mx-auto" style="max-width: 50rem;">
        <div class="card-header">Form Order</div>
        <div class="card-body text-secondary">
            <form method="post" action="?x=uorder">
                <input type="hidden" name="kode" value="<?php echo $dataa['id_mobil']; ?>">
                <div class="mb-3">
                    <label class="form-label">Mobil</label>
                    <?php echo $dataa['id_mobil']; ?>
                    <select name="mobil" class="form-control">
                        <option value="<?php echo $dataa['id_mobil']; ?>">
                            <?php echo $dataa['no_polisi'] . " -" . $dataa['merk'] . " Rp." . $dataa['harga']; ?></option>
                        <?php
                        // while ($data = mysqli_fetch_array($cari)) {
                        foreach ($caari as $daata) {
                        ?>
                            <option value="<?php echo $daata['id_mobil']; ?>"><?php echo $daata['no_polisi'] . " -" . $daata['merk'] . " Rp." . $daata['harga']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <input type="hidden" name="kode" value="<?php echo $data['id_sewa']; ?>">
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="txtNama"
                        value="<?php echo $data['nama_order']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">No KTP</label>
                    <input type="text" class="form-control" name="txtKtppel"
                        value="<?php echo $data['ktp']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="gender" class="form-control">
                        <option value="<?php echo $data['jk_order']; ?>">
                            <?php echo $data['jk_order']; ?></option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="txtAlamat"
                        value="<?php echo $data['alamat']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">No Telp</label>
                    <input type="text" class="form-control" name="txtNotlp"
                        value="<?php echo $data['tlp_order']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tujuan</label>
                    <input type="text" class="form-control" name="txtTujuan"
                        value="<?php echo $data['tujuan']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Mulai Sewa</label>
                    <input type="date" class="form-control" name="txtmulai"
                        value="<?php echo $data['tgl_order']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal dikembalikan</label>
                    <input type="date" class="form-control" name="txtselesai"
                        value="<?php echo $data['tgl_kembali']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="Sorder" class="form-control">
                        <option value="<?php echo $data['s_order']; ?>">
                            <?php echo $data['s_order']; ?>
                        </option>
                        <option value="DiKembalikan">Di kembalikan</option>
                        <option value="DiSewa">Di Sewa</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status mobil</label>
                    <select name="txtsmobil" class="form-control">
                        <option value="<?php echo $daata['s_mobil']; ?>">
                            <?php echo $daata['s_mobil']; ?>
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