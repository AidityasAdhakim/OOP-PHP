<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
        <button type="submit">GASS</button>
    </form>
    <h1><?= "Selamat Datang ". $_GET['nama']; ?>
    </h1>
</body>
</html>