<!DOCTYPE html>
<?php
    //Data pada Array
    $bahasa = [
        [
            "Indonesia" => "Indonesia",
            "English" => "English",
            "Arab" => "Arab",
            "Latin" => "Latin",
            "Jawa" => "Jawa"
        ],
        [
            "Indonesia" =>"Menulis",
            "English" => "Writte",
            "Arab" => "كتب",    
            "Latin" => "Scribit",
            "Jawa" => "Nulis",
        ],
        [
            "Indonesia"=>"Pergi",
            "English" => "Go",
            "Arab" => "ذهب",
            "Latin" => "It",
            "Jawa" => "Lunga"
        ],
        [
            "Indonesia"=>"Belajar",
            "English" => "Study",
            "Arab" => "درس",
            "Latin" => "Studet",
            "Jawa" => "Sinau"
        ],
        [
            "Indonesia"=>"Bersama",
            "English" => "With",
            "Arab" => "مع",
            "Latin" => "Cum",
            "Jawa" => "Bareng"
        ],
        [
            "Indonesia"=>"Nama",
            "English" => "Name",
            "Arab" => "اسم",
            "Latin" => "Nomen",
            "Jawa" => "Asma"
        ],
        [
            "Indonesia"=>$_GET['Ind'],
            "English" => $_GET['Eng'],
            "Arab" => $_GET['Ar'],
            "Latin" => $_GET['Lat'],
            "Jawa" => $_GET['Jv']
        ]
];
function addData(){
    $bahasa[] = [
        "Indonesia" => $_GET['Ind'],
        "English" => $_GET['Eng'],
        "Arab" => $_GET['Ar'],
        "Latin" => $_GET['Lat'],
        "Jawa" => $_GET['Jv']
    ];
}
addData();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in div</title>
</head>
<body>
    <form  method="get">
        Indonesia :<input type="text" name="Ind" id="ind">
        English :<input type="text" name="Eng" id="Eng">
        Arab :<input type="text" name="Ar" id="Ar">
        Latin :<input type="text" name="Lat" id="Lat">
        Java :<input type="text" name="Jv" id="Jv">
        <input type="submit" value="Submit">
    </form>
    <?php foreach($bahasa as $kosakata):?>
        <div class="kosakata"><?= $kosakata["Indonesia"] ?></div>
        <div class="bahasa"><?= $kosakata["English"] ?></div>
        <div class="bahasa"><?= $kosakata["Arab"] ?></div>
        <div class="bahasa"><?= $kosakata["Latin"] ?></div>
        <div class="bahasa"><?= $kosakata["Jawa"] ?></div>
        <div class="clear"></div>   
    <?php endforeach;?>
</body>
</html>

<style>
body{
}
div{
    float:left;
    width: 80px;
    height:80px;
    text-align:center;
    line-height:80px;
    margin:1px;
    display:block;
}
.kosakata{
    background-color:black;
    color:white;
}
.bahasa{
    background-color:blue;
    color :white;
    transition:all 0.5s ease;
    scale:0.9;
}
.bahasa:hover{
    transform:translateY(-10px);
    border-radius:20%;
    color :violet;
    font-size :24px;
    background-color:blueviolet;
}
.clear{
    width:unset;
    height:unset;
    clear:both;
}
input{
    transition: all 1s ease;
}
input:focus{
    border-radius:20%;
    border:1px;
    box-shadow: 0 0 2px 2px 2px black;
}
</style>