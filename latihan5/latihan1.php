<?php
// $_GET

$mahasiswa = [
    [
        "nama"  => "Dinda Mega", 
        "nrp" => "085673674111",
        "email" => "dindamega@gmail.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "poto1.jpg"
    ],
    [
        "nama"  => "Syahdan Abdus Ibrahim", 
        "nrp" => "085567891011",
        "email" => "syahdanabdus@gmail.com",
        "jurusan" => "Teknik Kendaraan Ringan",
        "gambar" => "poto2.jpg"

    ]
];


?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs ["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?> </a> 
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>