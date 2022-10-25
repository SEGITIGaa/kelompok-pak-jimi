<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$kon = mysqli_connect('localhost', 'root', '', 'kelompok');

$nama = $_POST['nama'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$gender = $_POST['gender'];
$pendidikan = $_POST['pendidikan'];
$prestasi = $_POST['prestasi'];

$sqlInput = "INSERT INTO data(nama,usia,alamat,agama,jenis_kelamin,pendidikan_akhir,prestasi) VALUES('$nama', '$usia', '$alamat', '$agama', '$gender', '$pendidikan', '$prestasi')";

$insert = mysqli_query($kon, $sqlInput);
?>
</body>
</html>