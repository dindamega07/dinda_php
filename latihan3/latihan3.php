<?php
$mahasiswa = [
    ["Dinda Mega", "085673674111", "Rekayasa Perangkat Lunak", "dindamega@gmail.com"],
    ["Syahdan Abdus Ibrahim", "085567891011", "Teknik Kendaraan Ringan", "syahdanabdus@gmail.com"]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs )  : ?>
<ul>
   <li>Nama : <?= $mhs[0]; ?></li>
   <li>Nrp : <?= $mhs[1]; ?></li>
   <li>Jurusan : <?= $mhs[2]; ?></li>
   <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>