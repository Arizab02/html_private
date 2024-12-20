<?php
$cookie_name = "Nama";
$cookie_value = "Otong";
// setcookie(name, value, expires,path, domain, secure, httponly);
setcookie($cookie_name,$cookie_value,time()+(86400 * 30),"/");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta content="viewport" width="initial-scale=0.1">
    <title>PHP Cookies</title>
</head>
<body>
    <div>
        Ini untuk percobaan PHP Cookies...
        <?php
        if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>
    </div>
</body>
</html>
<?php

?>