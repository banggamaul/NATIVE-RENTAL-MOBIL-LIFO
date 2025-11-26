<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Order</title>
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?x=homepage">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mobil</li>
        </ol>
    </nav>
    <?php
    if ($_SESSION['level'] == "Super") {
        include("konek.php");
        $cari = mysqli_query($konek, "select * from mobil ORDER BY last_updated DESC") or die(mysqli_error());
    ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">No polisi</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">harga</th>
                        <th scope="col">Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    // while ($data = mysqli_fetch_array($cari)) {
                    foreach($cari as $data){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td><?php echo $data['merk']; ?></td>
                            <td><?php echo $data['no_polisi']; ?></td>
                            <td><?php echo $data['tahun']; ?></td>
                            <td>Rp.<?php echo $data['harga']; ?></td>
                            <td><?php echo $data['s_mobil']; ?></td>
                            <td><a href="?x=emobil&id=<?php echo $data['id_mobil']; ?>" class="btn btn-warning">Edit</a>
                                <a href="?x=hmobil&id=<?php echo $data['id_mobil']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
            <a href="?x=tmobil" class="btn btn-primary">Tambah</a>
        <?php
    } else if($_SESSION['level'] == "Admin")  {
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">No polisi</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">harga</th>
                        <th scope="col">Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    // while ($data = mysqli_fetch_array($cari)) {
                    foreach($cari as $data){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td><?php echo $data['merk']; ?></td>
                            <td><?php echo $data['no_polisi']; ?></td>
                            <td><?php echo $data['tahun']; ?></td>
                            <td>Rp.<?php echo $data['harga']; ?></td>
                            <td><?php echo $data['s_mobil']; ?></td>
                            <td><a href="?x=emobil&id=<?php echo $data['id_mobil']; ?>" class="btn btn-warning">Edit</a>
                                <a href="?x=hmobil&id=<?php echo $data['id_mobil']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
            <a href="?x=tmobil" class="btn btn-primary">Tambah</a>  
            <?php
    }else {?>
        <script type="text/javascript">
        alert("Silahkan Login Terlebih Dahulu");
        </script>
        <?php
    }
        ?>
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