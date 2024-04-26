<!DOCTYPE HTML>
<html>
    <head>
</head>
<body>
    <?php
    $nama = "John Doe";
    $umur = "25";
    $tinggi = "175.5";
    $lulus = true;

    $hasil_penjumlahan = $umur + $tinggi;
    $hasil_pengurangan = $umur - $tinggi;
    $hasil_perkalian = $umur * $tinggi;
    $hasil_pembagian = $umur / $tinggi;
    $hasil_modulus = $umur % 30;

    $hasil_banding = $lulus ? "ya" : "tidak";
    $hasil_tidak_sama = $umur !== $tinggi ? "tidak" : "ya";
    $hasil_lebih_besar = $umur > $tinggi ? "ya" : "tidak";
    $hasil_lebih_kecil = $umur < $tinggi ? "ya" : "tidak";
    $hasil_lebih_besar_atau_sama = $umur >= $tinggi ? "ya" : "tidak";
    $hasil_lebih_kecil_atau_sama = $umur <= $tinggi ? "ya" : "tidak";

    echo "nama: " . $nama . "<br>";
    echo "umur: " . $umur . "<br>";
    echo "tinggi: " . $tinggi . "<br>";
    echo "lulus: " . ($lulus ? "ya" : "tidak") . "<br>";
    echo "hasil penjumlahan: " . $hasil_penjumlahan . "<br>";
    echo "hasil pengurangan: " . $hasil_pengurangan . "<br>";
    echo "hasil perkalian: " . $hasil_perkalian . "<br>";
    echo "hasil pembagian: " . $hasil_pembagian . "<br>";
    echo "hasil modulus: " . $hasil_modulus . "<br>";
    echo "hasil banding: " . $hasil_banding . "<br>";
    echo "hasil tidak sama: " . $hasil_tidak_sama . "<br>";
    echo "hasil lebih besar: " . $hasil_lebih_besar . "<br>";
    echo "hasil lebih besar atau sama: " . $hasil_lebih_besar_atau_sama . "<br>";
    echo "hasil lebih kecil atau sama: " . $hasil_lebih_kecil_atau_sama . "<br>";
    ?>
</body>
</html>


