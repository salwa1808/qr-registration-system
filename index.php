<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>QR Registration System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

</head>

<body style="background:#f4f6f9;">

<div class="container mt-5">

    <div class="card shadow p-4 col-md-6 mx-auto text-center">

        <h2 class="mb-4">
            QR Code Pendaftaran
        </h2>

        <p>
            Scan QR menggunakan smartphone untuk melakukan pendaftaran
        </p>

        <button
        onclick="generateQR()"
        class="btn btn-primary mb-4">

            Generate QR
        </button>

        <div id="qrcode"></div>

    </div>

</div>

<script>

function generateQR(){

    document.getElementById("qrcode").innerHTML = "";

    new QRCode(document.getElementById("qrcode"), {

        text: "http://192.168.1.6/qr_registration/daftar.php",

        width: 250,
        height: 250

    });

}

</script>

</body>
</html>