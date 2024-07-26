<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="background-color: darkviolet; color: white;">
                <h2>Jawaban</h2>
            </div>
            <div class="card-body">
                <p>Kompetisi : <?= $profile['nama']?></p> 
                <p>Ketua Kompetisi : <?= $profile['kajur']?></p> 
                <p>Jumlah Kelas : <?= $profile['kelas']?></p> 
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>