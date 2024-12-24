<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data</title>
</head>
<body>
    <form>
        Input nama :<input type="text" name="nama" id="nama">
        <input type="Submit">   
    </form>
    <?php
    $data = $_GET["nama"];
    echo $data;
    ?>
</body>
</html>