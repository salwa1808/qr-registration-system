<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<title>Pendaftaran</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="card shadow p-4 col-md-5 mx-auto">

        <h2 class="text-center mb-4">
            Form Pendaftaran
        </h2>

        <form action="simpan_pendaftaran.php" method="POST">

            <input
            type="text"
            name="nama"
            class="form-control mb-3"
            placeholder="Nama Lengkap">

            <input
            type="email"
            name="email"
            class="form-control mb-3"
            placeholder="Email">

            <input
            type="text"
            name="no_hp"
            class="form-control mb-3"
            placeholder="Nomor HP">

            <button
            type="submit"
            class="btn btn-primary w-100">

                Daftar
            </button>

        </form>

    </div>

</div>

</body>
</html>