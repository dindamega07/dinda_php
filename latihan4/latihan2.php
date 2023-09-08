<?php
// $mahasiswa = [
//     ["Dinda Mega", "085673674111", "dindamega@gmail.com", "Rekayasa Perangkat Lunak"],
//     ["Syahdan Abdus Ibrahim", "085567891011", "syahdanabdus@gmail.com", "Teknik Kendaraan Ringan"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs )  : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" width="250px">
        </li>
             <li>Nama : <?= $mhs["nama"]; ?></li>
             <li>Nrp : <?= $mhs["nrp"]; ?></li>
             <li>Email : <?= $mhs["jurusan"]; ?></li>
             <li>Jurusan : <?= $mhs["email"]; ?></li>
    </ul>
<?php endforeach; ?>

</body>
</html>