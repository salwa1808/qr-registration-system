<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="mb-4">
            Data Pendaftaran
        </h2>

        <table class="table table-bordered">

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Tanggal</th>
            </tr>

            <?php

            $no = 1;

            $data = mysqli_query($conn,
            "SELECT * FROM pendaftaran");

            while($d = mysqli_fetch_array($data)){

            ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= $d['nama']; ?></td>

                <td><?= $d['email']; ?></td>

                <td><?= $d['no_hp']; ?></td>

                <td><?= $d['created_at']; ?></td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>