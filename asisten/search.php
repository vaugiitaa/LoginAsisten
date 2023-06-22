<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="bg-primary p-4 mt-4 text-white rounded">
    <h1>Pencarian Asisten Praktikum</h1>
</div>

        <form action="/asisten/search" method="post">
            <?= csrf_field() ?>
            <div class="form-group mt-4">
                <label for="key">Pencarian:</label>
                <input type="text" class="form-control" name="key" id="key">
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Cari</button>
</div>
        </form>

        <?php if (!empty($hasil)) : ?>
            <div class="bg-secondary p-4 mt-4 text-white rounded">
                <h1>Hasil Pencarian</h1>
                <p>Nama: <?= $hasil['NAMA'] ?></p>
                <p>Praktikum: <?= $hasil['PRAKTIKUM'] ?></p>
                <p>IPK: <?= $hasil['IPK'] ?></p>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
