<!DOCTYPE html>
<html>
<head>
    <style>
         body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .h1 {
            display: flex;
            flex-direction: column;
            align-items: center;

    }

    .container input[type="submit"] {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

  </style>
</head>
<body>
<div class="container">
    <div class="bg-primary p-4 mt-4 text-white rounded">
    <h1>Update Asisten Praktikum</h1>
</div>
<br>
   <form action="/asisten/update/<?php echo isset($asisten['nim']) ? $asisten['nim'] : ''; ?>" method="post">
    <input type="hidden" name="_method" value="PUT">
    <label for="nim">NIM:</label>
    <input type="text" name="nim" value="<?php echo isset($asisten['nim']) ? $asisten['nim'] : ''; ?>">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="<?php echo isset($asisten['nama']) ? $asisten['nama'] : ''; ?>">
    <label for="praktikum">Praktikum:</label>
    <input type="text" name="praktikum" value="<?php echo isset($asisten['praktikum']) ? $asisten['praktikum'] : ''; ?>">

</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Update Data</title>
</head>

<body>
    <div class="container">
    <div class="jumbotron">
                <center></center>
            </div>
        </div>
        <form action="/asisten/update" method="post">
            <?= csrf_field() ?>
            <div class="p-4 text-black rounded"> 
                <div class="mb-3 mt-3">
                    NIM:
                    <br>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                </div>
                <div class="mb-3 mt-3">
                    Nama:
                    <br>
                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required>
                </div>
                <div class="mb-3 mt-3">
                    Mata Kuliah Praktikum:
                    <br>
                    <input type="text" class="form-control" placeholder="Masukkan Mata Kuliah Praktikum" 
                    name="praktikum" required>
                </div>
                <div class="mb-3 mt-3">
                    IPK:<br>
                    <input type="text" class="form-control" placeholder="Masukkan IPK" name="ipk" required>
                </div>
            </div>
            <center><input type="submit" name="" value="Update" /></center>
        </form>
    </div>
</body>
</html>