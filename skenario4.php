<?php
date_default_timezone_set("Asia/Jakarta");

$nama1 = "Najiya Rizqi";
$nama2 = "Shifa Lufna A.";

echo "<h1>Aktivitas Berpasangan: Array dan Looping</h1>";
echo "<h3>Dibuat oleh: $nama1 dan $nama2</h3>";

echo "<hr>";

echo "<h2>Kasus 1: Tanggan dengan Array dan Looping</h2>";

$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = range(1, 31);
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = [2024, 2025, 2026];

echo "<b>Hari:</b>";
for ($i = 0; $i < count(value: $hari); $i++) {
    echo $hari[$i] . ", ";
}

echo "<br><b>Tanggal:</b>";
foreach ($tanggal as $tgl) {
    echo $tgl . ", ";
}

echo "<br><b>Bulan:</b>";
$j = 0;
while ($j < count(value: $bulan)) {
    echo $bulan[$j] . ", ";
    $j++;
}

echo "<br><b>Tahun:</b>";
$k = 0;
do {
    echo $tahun[$k] . ", ";
    $k++;
} while ($k < count (value: $tahun));

echo "<br><br><b>Contoh Tanggal:</b>" . $hari[1] . ", 10 - " . $bulan[2] . " - " . $tahun[1];

echo "<hr>";

echo "<h2>Kasus 2: Anak Ayam Turun 30</h2>";
for ($i = 30; $i > 0; $i--) {
    if ($i == 1) {
        echo "Anak ayam turun $i, mati satu tinggal induknya.<br>";
    } else {
        echo "Anak ayam turun $i, mati satu tinggal " . ($i - 1) . ".<br>";
    }
}

echo "<hr>";

echo "<h2>Kasus 3: Mawar Sholeh</h2>";

echo "<b>Mawar yang dimiliki Sholeh:</b>";
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "$mawar, ";
}
echo "<br>Jumlah: " . (21 - 10 + 1) . " batang.";

echo "<br><b>Mawar yang diberikan ke ibunya:</b>";
$count = 0;
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    echo "$mawar, ";
    $count++;
}
echo "<br>Jumlah: $count batang.";

echo "<br><b>Mawar yang diberikan ke Sholehah:</b>";
$count2 = 0;
for ($mawar = 20; $mawar >= 10; $mawar -= 5) {
    echo "$mawar, ";
    $count2++;
}
echo "<br>Jumlah: $count2 batang.";

echo "<hr>";

echo "<h2>Kasus 4: Lagu Ambyar</h2>";

$emosi_lagu = [
    ["Suasana" => "Galau", "Lagu" => "Married With Children - Oasis"],
    ["Suasana" => "Bersemangat", "Lagu" => "Karma Chameleon - Culture Club"],
    ["Suasana" => "Marah", "Lagu" => "Bed Of Roses - Bon Jovi"]
];

foreach ($emosi_lagu as $lagu) {
    foreach ($lagu as $key => $value) {
        echo "<b>$key:</b> $value<br>";
    }
    echo "<br>";
}

echo "<hr>";

?>