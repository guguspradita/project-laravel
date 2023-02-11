<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php foreach ($mahasiswa as $mhs) {
            echo "<li> $mhs </li>";
        } 
        ?>
    </ol>
    <div>
        Copyright © <?php echo date("Y"); ?> Ethical Hacking
    </div>
</body>
</html>