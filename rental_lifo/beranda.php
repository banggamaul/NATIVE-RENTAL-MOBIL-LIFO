<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Beranda</title>
</head>

<body>
    <!-- <script type="text/javascript">
        alert("Silahkan login terlebih dahulu");
    </script> -->
    <div class="container">
        <div class="row">
            <div class="col-md">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="?x=index">Rental Mobil</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="beranda.php">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="daftar.php">Daftar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <!-- side bar -->
                <?php
                include("konek.php");
                $cari = mysqli_query($konek, "select * from mobil");
                ?>
                <ul class="list-group list-group-flush">
                    <li class="fw-bold list-group-item">
                        <h3>List Mobil</h3>
                    </li>
                    <?php
                    while ($data = mysqli_fetch_array($cari)) {
                    ?>
                        <li class="list-group-item">
                            <a href="?x="><?php echo $data['merk']; ?> - <?php echo $data['no_polisi']; ?> - <?php echo $data['s_mobil']; ?></a>
                        </li>
                </ul>
            <?php
                    }
            ?>
            </div>
            <div class="col-md-8 mt-3 px-2">
                <!-- konten -->

                <?php include("kontrol.php"); ?>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/mobil-1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Rental Mobil</h5>
                                <p>Sewa Mobil Harga murah? hanya disini!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/garasi.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Rental Mobil LIFO</h5>
                                <p>Sistem pemesanan menggunakan metode LIFO.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/garasi.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>ORDER NOW</h5>
                                <p>Segera Order Mobil impian anda!</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="col mt-3">
                    <div class="row py-2 px-3">
                        <?php
                        while ($data = mysqli_fetch_array($cari)) {
                        ?>
                            <div class="card" style="width: 18rem;">
                                <!-- <img src="..." class="card-img-top" alt="..."> -->
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['merk']; ?></h5>
                                    <p class="card-text"><?php echo $data['no_polisi']; ?> - <?php echo $data['s_mobil']; ?></p>
                                    <a href="?x=torderpelanggan&id=<?php echo $data['id_mobil']; ?>" class="btn btn-primary">Sewa Sekarang</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
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