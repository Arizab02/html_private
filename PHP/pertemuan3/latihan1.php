<?php
// format for loop 
// for(index,condition,increment or decrement)
for($i = 0;$i < 5; $i++) {
    echo "Nomor".$i."<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name= "fjsaije1213@";
    echo !preg_match("[A-Za-z]",$name);
    $waktu =  new DateTime;
$sekarang = $waktu->format('Y-m-d');
echo "sekarang: $sekarang\n";

$tanggal_tertentu = $waktu->setDate(2021,4,13)->format('Y-m-d');

echo "tanggal tertentu: $tanggal_tertentu\n";

if ( $sekarang == $tanggal_tertentu ) {
    echo "Sekarang adalah tanggal tertentu\n";
}

    ?>
</body>
</html>