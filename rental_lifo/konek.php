<?php
$konek = mysqli_connect("localhost", "root", "", "rental_lifo");
if (mysqli_connect_error()){
    echo "Koneksi Gagal" . mysqli_connect_error();
}