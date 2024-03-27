<?php

function deretGanjilHabisTiga($awal, $akhir) {
$banyakBilangan = 0;
$jumlahBilangan = 0;

for ($i = $awal; $i <= $akhir; $i++) {
if ($i % 2 != 0 && $i % 3 == 0) {
$banyakBilangan++;
$jumlahBilangan += $i;
echo "$i ";
}
}

echo "\n";
echo "Banyaknya bilangan: $banyakBilangan\n";
echo "Jumlah bilangan: $jumlahBilangan";
}

$awal = 4;
$akhir = 30;

deretGanjilHabisTiga($awal, $akhir);

?>