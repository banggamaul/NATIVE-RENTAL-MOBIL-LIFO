<?php
if (isset($_GET['x'])) {
    switch ($_GET['x']) {
        case 'keluar':
            include("keluar.php");
            break;
        case 'homepage':
            include("homepage.php");
            break;
        case 'admin':
            include("admin/admin.php");
            break;
        case 'tadmin':
            include("admin/tadmin.php");
            break;
        case 'sadmin':
            include("admin/sadmin.php");
            break;
        case 'eadmin':
            include("admin/eadmin.php");
            break;
        case 'uadmin':
            include("admin/uadmin.php");
            break;
        case 'hadmin':
            include("admin/hadmin.php");
            break;
        case 'order':
            include("order/order.php");
            break;
        case 'riwayatorder':
            include("order/riwayatorder.php");
            break;
        case 'torder':
            include("order/torder.php");
            break;
        case 'torderpelanggan':
            include("order/torderpelanggan.php");
            break;
        case 'sorder':
            include("order/sorder.php");
            break;
        case 'sorderpelanggan':
            include("order/sorderpelanggan.php");
            break;
        case 'eorder':
            include("order/eorder.php");
            break;
        case 'uorder':
            include("order/uorder.php");
            break;
        case 'horder':
            include("order/horder.php");
            break;
        case 'mobil':
            include("mobil/mobil.php");
            break;
        case 'tmobil':
            include("mobil/tmobil.php");
            break;
        case 'smobil':
            include("mobil/smobil.php");
            break;
        case 'emobil':
            include("mobil/emobil.php");
            break;
        case 'umobil':
            include("mobil/umobil.php");
            break;
        case 'hmobil':
            include("mobil/hmobil.php");
            break;
        case 'pelanggan':
            include("pelanggan/pelanggan.php");
            break;
        case 'tpelanggan':
            include("pelanggan/tpelanggan.php");
            break;
        case 'spelanggan':
            include("pelanggan/spelanggan.php");
            break;
        case 'epelanggan':
            include("pelanggan/epelanggan.php");
            break;
        case 'upelanggan':
            include("pelanggan/upelanggan.php");
            break;
        case 'hpelanggan':
            include("pelanggan/hpelanggan.php");
            break;
        case 'laporan':
            include("laporan.php");
            break;
    }
} else {
?>
    <!-- <script type="text/javascript">
        alert("Halaman dalam proses pembangunan!");
    </script> -->
    <!-- echo "<h3>Halaman dalam proses pembangunan!</h3>"; -->
<?php
}
?>