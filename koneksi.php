<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "qr_registration"
);

if(!$conn){
    die("Koneksi database gagal");
}

?>