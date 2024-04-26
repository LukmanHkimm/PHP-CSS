<?php
// Array data nama, umur, dan tinggi
$data = array(
    array("nama" => "John Doe", "umur" => 25, "tinggi" => 175.5),
    array("nama" => "Jane Doe", "umur" => 23, "tinggi" => 163.2),
    array("nama" => "Jim Smith", "umur" => 21, "tinggi" => 187.6)
);

// Fungsi untuk menghitung rata-rata umur
function hitungRataUmur($data) {
    $total_umur = 0;
    foreach ($data as $item) {
        $total_umur += $item['umur'];
    }
    return $total_umur / count($data);
}

// Menampilkan data dan menghitung rata-rata umur
foreach ($data as $item) {
    echo "Nama: " . $item['nama'] . ", Umur: " . $item['umur'] . ", Tinggi: " . $item['tinggi'] . "<br>";
}

$rata_umur = hitungRataUmur($data);
echo "Rata-rata umur: " . $rata_umur;
?>