<?php

include 'koneksi.php';

$isi_qr = $_POST['isi_qr'];

mysqli_query($conn,
"INSERT INTO qr_codes(isi_qr)
VALUES('$isi_qr')");

echo "

<script>

alert('QR berhasil disimpan');

window.location='index.php';

</script>

";

?>