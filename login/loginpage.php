<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<body>
<form method="post" action="/AsistenController/cekLogin">
            <?= csrf_field() ?>
            <div class="user-box">
                <input class="form-control" id="username" name="username" type="text" placeholder="" required />
                <label for="username">Username</label>
            </div>
            <div class="user-box">
                <input class="form-control" id="password" name="password" type="password" placeholder="" required />
                <label for="password">Password</label>
            </div>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>