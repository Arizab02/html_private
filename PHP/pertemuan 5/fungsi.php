<?php

echo "Welcome our user \n";
sleep(1);
echo "What is your name?\n";
sleep(1);
echo "What's your age?\n";

$name = "This is a keyboard style"; 
for($i = 0; $i == strlen($name); $i++){
    print($name[$i]);
    sleep(1);
}

function typeWriter($text, $delay = 1) {
    for ($i = 0; $i < strlen($text); $i++) {
        echo $text[$i];
        flush();
        sleep($delay);
    }
}

// typeWriter("This is a keyboard style");

