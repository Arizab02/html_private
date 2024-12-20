<?php
$favcolor = trim(fgets(STDIN));

switch($favcolor){
    case "red":
        return "the color is red";
    
    case "yellow":
        return "the color is yellow";
    
    case "green":
        return "the color is green";
    
    case "black":
        return "the color is black";
    
    case "white":
        return "the color is white";
    
    default:
        return "There is no color";
}

abstract class Namakelas{
    function fungsi(){
        echo "ini hari diisi";
    }
    abstract function fungsiabstrak($param):string;
}

class anakan extends Namakelas{
    function fungsiabstrak($param): string{
        return "keluarnannya harus string, dan ini isi dari $param";
    }
}