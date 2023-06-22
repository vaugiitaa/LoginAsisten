<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hapus Data</title>
</head>

<body>
    <div class="container">
        <div class="p-4 text-white rounded" style="background-color: grey; ">
            <div class="jumbotron">
                <center>
                    <h1 class="display-4">HAPUS DATA ASISTEN</h1>
                </center>
            </div>
        </div>
        <form action="/asisten/delete" method="post">
            <?= csrf_field() ?>
            <div class="p-4 text-black rounded">
                <div class="mb-3 mt-3">
                    NIM
                    <br>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                </div>
            </div>
            <center><input type="submit" name="" value="Hapus" /></center>
        </form>
    </div>
</body>
</html>
