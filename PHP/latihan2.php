<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP helo world</title>
</head>
<body>
    <?php
        echo "Hello world";
        echo "<br> Hello world";
        echo "<br> ini statement 1";
        echo "<br> ini statement 2";
        $c = 2;
        $b = 3;
        $a = $b + $c;
        echo "<br>";
        echo $a ," ini tidak menggunakan petik dua";
        echo "<br>";
        echo "$a ini menggunakan petik dua";
        $a = "3" + "2";
        echo "<br>";
        echo $a ," ini tidak menggunakan petik dua";
        echo "<br>";
        echo "$a ini menggunakan petik dua";
        echo "<br>";
        echo "PHP support  with string";
        echo "<br>";
        echo "membuat array";
        echo "<br>";
        $array = [
            "dian",
            "hadi",
            "aku",
        ];
        print_r($array);
        echo "<br>";
        echo "membuat aray asosiasi";
        echo "<br>";
        $array_asosiasi = [
            "nama"=>"ariz",
            "kelas"=>"2",
            "namapanjang"=>"ariz bb"
        ];
        echo "<br>";
        print_r($array_asosiasi);
        echo "<br>";
        ?>
    
    </body>
</html>