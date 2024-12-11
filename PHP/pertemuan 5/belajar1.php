<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUiz</title>
    <style>
        .jawaban{
            display:flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="quiz">
        <form action="" method="get">
            <ol>
                <li><h3 >Apa nama ibukota indonesia?</h3 ></li>
                <div class="jawaban">
                    <label for="s1j1"><input type="radio" name="ibukota" method="get" id="s1j1" value="Jakarta">Jakarta</label>
                    <label for="s1j2"><input type="radio" name="ibukota" method="get" id="s1j2" value="IKN">IKN</label>
                    <label for="s1j3"><input type="radio" name="ibukota" method="get" id="s1j3" value="Yogyakarta">Yogyakarta</label>
                    <label for="s1j4"><input type="radio" name="ibukota" method="get" id="s1j4" value="Bali">Bali</label>
                    <?php
                        $soal1 = $_GET['ibukota'];
                        if ($soal1 == "Jakarta"){
                            print("Jawaban anda benar"); 
                        }
                        else {print "salah";}
                        ?>
                        <pre>
                            <?php
                            print_r($soal1);
                            ?>
                        </pre>
                </div>
                <li><h3 >Apa nama hari pertama di tanggalan?</h3 ></li>
                <div class="jawaban">
                    <label for="s2j1"><input type="radio" name="minggu" method="get" id="s2j1" value="Selasa">Selasa</label>
                    <label for="s2j2"><input type="radio" name="minggu" method="get" id="s2j2" value="Sabtu">Sabtu</label>
                    <label for="s2j3"><input type="radio" name="minggu" method="get" id="s2j3" value="Ahad">Ahad</label>
                    <label for="s2j4"><input type="radio" name="minggu" method="get" id="s2j4" value="Jum'at">Jum'at</label>
                    <?php
                        $soal2 = $_GET["minggu"];
                        if ($soal2 == 'Ahad'){
                            print("Jawaban anda benar"); 
                        }
                        else {print "salah";}
                        // print_r($soal2);
                        ?>
                        <!-- <input type="submit" method="get" name="minggu"> -->
                    <pre>
                        <?php
                            print_r($soal2);
                        ?>
                    </pre>
                </div>
                <li><h3 >Apa nama ibukota indonesia?</h3 ></li>
            </ol>
                        <input type="submit" method="get">
        </form>
    </div>
</body>
</html>