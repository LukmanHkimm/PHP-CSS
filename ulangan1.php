<!DOCTYPE html>
<html>
<head>
    <title>Ulangan Harian</title>
</head>
<body>
    <?php
    // Deklarasi variabel
    $nama = "John Doe";
    $umur = 18;
    $tinggi = 150;

    // Percabangan
    if ($umur >= 17) {
        echo "Anda sudah cukup umur untuk mengikuti kursus ini.<br>";
    } else {
        echo "Anda belum cukup umur untuk mengikuti kursus ini.<br>";
    }

    if ($tinggi >= 160) {
        echo "Anda memiliki tinggi yang cukup tetapi agak pendek untuk mengikuti kursus ini.<br>";
    } else {
        echo "Anda memiliki tinggi yang tidak cukup untuk mengikuti kursus ini.<br>";
    }

    // Perulangan
    echo "Halo, " . $nama . "!<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Angka ke-" . $i . ": " . $i . "<br>";
    }

    echo "Angka ke-1: 1<br>";
    echo "Angka ke-2: 2<br>";
    echo "Angka ke-3: 3<br>";
    echo "Angka ke-4: 4<br>";
    echo "Angka ke-5: 5<br>";

    $i = 1;
    while ($i <= 5) {
        echo "Angka ke-" . $i . ": " . $i . "<br>";
        $i++;
    }
    ?>
</body>
</html>