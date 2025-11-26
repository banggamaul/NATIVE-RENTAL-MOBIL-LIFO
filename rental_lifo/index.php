<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rental Mobil</title>
</head>

<body>
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-md">
                <?php
                session_start();
                if (!isset($_SESSION['username'])) {
                    header("location:login.php");
                }
                if ($_SESSION['level'] == "Super") {
                ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="?x=index">Rental Mobil</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="?x=homepage">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?x=order">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?x=mobil">Mobil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?x=admin">Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?x=pelanggan">Pelanggan</a>
                                    </li>
                                    <li class="nav-item ms-auto">
                                        <a class="nav-link" href="?x=keluar">Keluar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                <?php
                } else if ($_SESSION['level'] == "Admin") {
                ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="?x=index">Rental Mobil</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="?x=homepage">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?x=order">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?x=pelanggan">Pelanggan</a>
                                    </li>
                                    <li class="nav-item ms-auto">
                                        <a class="nav-link" href="?x=keluar">Keluar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                <?php
                } else if ($_SESSION['level'] == "Pelanggan") {
                ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="?x=index">Rental Mobil</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="?x=homepage">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?x=torder">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?x=riwayatorder"> Riwayat Order</a>
                                    </li>
                                    <li class="nav-item ms-auto">
                                        <a class="nav-link" href="?x=keluar">Keluar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <!-- side bar -->
                <?php
                include("konek.php");
                $cari = mysqli_query($konek, "SELECT * FROM mobil where s_mobil='Ready' ORDER BY last_updated DESC");
                $carii = mysqli_query($konek, "SELECT * FROM admin WHERE id_admin='$_SESSION[id_admin]'");
                $dataa = mysqli_fetch_array($carii);
                ?>
                <ul class="list-group list-group-flush">
                    <h2>Selamat Datang <?php echo $dataa['nama_admin']; ?></h2>
                    <li class="fw-bold list-group-item">
                        <h3>List Mobil</h3>
                    </li>
                    <?php
                    while ($data = mysqli_fetch_array($cari)) {
                    ?>
                        <li class="list-group-item">
                            <a href="?x=torderpelanggan&id=<?php echo $data['id_mobil']; ?>"><?php echo $data['merk']; ?> - <?php echo $data['no_polisi']; ?> - <?php echo $data['s_mobil']; ?></a>
                        </li>
                </ul>
            <?php
                    }
            ?>
            </div>
            <div class="col-md-8 mt-3 px-2">
                <!-- konten -->
                <?php include("kontrol.php"); ?>
            </div>
        </div>
        <div class="row mt-4">
            <div class="bg-light col-md-12">
                <p class="fw-bold text-center">Rental Mobil &copy; 2025</p>
            </div>
        </div>
    <!-- </div> -->


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