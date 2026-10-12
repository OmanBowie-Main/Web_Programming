<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung luas lingkaran</title>
</head>
<body>
<?php
//konstanta nilai judul
define("Judul","HItung Luas Lingkaran");
//konstanta untuk nilai phi
define("PHI",3.14);
echo "Judul";
$r=10;
echo "<br>Jari-jari:$r<br>";
$luas=PHI*$r*$r;
echo "Luas lingkaran=$luas";
?>
</body>
</html>