<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selmat Datang, $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Dinda"); ?></h1>
</body>
</html>
