<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

mysqli_query($conn,
"INSERT INTO pendaftaran(nama,email,no_hp)
VALUES('$nama','$email','$no_hp')");

echo "

<script>

alert('Pendaftaran berhasil');

window.location='daftar.php';

</script>

";

?>